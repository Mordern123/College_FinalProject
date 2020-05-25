# finalProject
皮膚辨識專題（由ham10000資料集訓練而成）

在aboutTraining的資料夾中附上了詳細的訓練代碼


//模型建構

將最先的資料及經由 Resnet50、InceptionV3 兩個預訓練模型做特徵提取，並將這兩個模型所提取出的特徵，做為我們的訓練資料。在所有模型訓練過程中我們皆採用 5-fold cross validation，做為模型的選擇參數之依據以及為了避免依賴某一特定的訓練和驗證資料產生偏差。 
　　一開始針對兩個預訓練模型的特徵，各會訓練8個One-Vs-All 模型，對應資料集中的8個類別。接著由兩個預訓練模型所提取的特徵，做為One-Vs-All 模型的輸入資料，模型建構上我們利用二維卷積層作為模型的輸入層，加上全局池化層或是扁平層調整訓練資料維度，最後接上不等層數的全連接層與輸出層去建立我們的模型架構。
　　在使用 Resnet50 以及 InceptionV3 特徵的狀況下，產生了各8個One-Vs-All 二元分類器。接著我們利用Stacking的技術，將這八個二元分類器的輸出信息融合起來，成為訓練圖像的新特徵，並在此依據上訓練出多分類模型。進而得到了兩個分別由 Resnet50 以及 InceptionV3 特徵訓練出的集成模型。
　　最後我們將兩個分別由 Resnet50 以及 InceptionV3 特徵訓練出的集成模型，同樣利用Stacking的技術，結合這兩個模型的輸出訊息得到我們的最終模型。


//模型評估

　　本次專案所訓練之模型，因為各類別資料的數量相差巨大，所以單純以準確率做為評估標準是不客觀的。
　　因此我們根據Confusion Matrix的概念，定義了下述的情況：
-	情況為真且模型判斷為真：True Positive (TP)
-	情況為真且模型判斷為假：False Negative (FN)
-	情況為假且模型判斷為真：False Positive (FP)
-	情況為假且模型判斷為假：True Negative (TN)
　　其中我們計算了在培訓過程中TP、FN、FP與TN的數值，並藉由精準率(Precision)跟召回率(Recall)去評估模型關於True Positive的預測能力。
Precision = TP / (TP +FP)
Recall = TP / (TP+ FN)
在多類別分類中精準率跟召回率計算方式，有分為 macro 以及 micro 兩種。其中 micro 的方式通過先計算總體的TP，FN和FP的數量，再計算精準率跟召回率。而 macro 的方式則是分別計算每個類別的精準率跟召回率，然後做平均（各類別所佔的權重相同）。
考慮到我們是多類別分類的問題，因此我們在計算時，使用了macro的方式去計算精準率跟召回率。藉此使得模型在評估上可以更加全面地兼顧到每一種類別。
　　最後我們以 F1-score 計算精準率跟召回率的調和均值，作為我們評估模型的最終指標。
F1-score = 2 (recall * precision) / (recall + precision)

	
