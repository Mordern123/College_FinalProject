<!DOCTYPE html>
<html lang="zh-Hant-TW ">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <title>SKIN AIdentifier</title> 
    <script src="jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="test.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap&subset=chinese-traditional" rel="stylesheet">
    <!-- <script src="all.js"></script> -->
</head>
<body>
        <div class="wrap">
                <div class="header">
                  <div id="mobile">
                        <a id="logo">
                        <img src="https://i.imgur.com/kDvJcYp.png" width=30% height=15% /></a>
                      <ul class="menu">
                          <!---<li><a href="" ><font face="Noto Sans TC">首頁</font></a></li> --->
                          <li><?php session_start();
                              if(isset($_SESSION["login_session"])){
                                echo "<font face='Noto Sans TC'><a href='login.php'>首頁</a></font>";

                              }
                              else{
                                echo "<font face='Noto Sans TC'><a href='index.html'>首頁</a></font>";
                              }
                              ?>
                          </li>
                          <li><a href="Encyclopedia.html"><font face="Noto Sans TC">小百科</font></a></li>
                          <li><a href="update_info.php"><font face="Noto Sans TC">個人資料</font></a></li>
                          <li><a href="resultHistoryD.php"><font face="Noto Sans TC">歷史結果</font></a></li>
                      </ul>
<script>
  if ($(window).width() <= 798){
$(function(){
   var  $mobile = $('#mobile') ,
        $toggle = $mobile.find('#logo') ,
        $menu = $mobile.find('.menu');
     
    $toggle.click(function(e) {
        $menu.slideToggle()
    });
})
  }
</script>
                      <ul class="login">
                      <li><?php session_start();
                            echo    "<font face='Noto Sans TC'>".$_SESSION["username"]. " 會員您好". "</font>";
                          ?>
                          </li>
                        <li ><a href="logout.php"><font face="Noto Sans TC">登出</font></a></li>
                        <li id="contact"><a href="#"><font face="Noto Sans TC">聯絡我們</font></a></li>
                      </ul>
                      <script>    
                            $(document).ready(function(){
                                 $(function(){ $('#login').click(function(){ 
                                    $('html,body').animate({scrollTop:$('#content1').offset().top}, 500);});  
                                }); 
                            }); 
                            $(document).ready(function(){
                                 $(function(){ $('#contact').click(function(){ 
                                    $('html,body').animate({scrollTop:$('.location').offset().top}, 500);});  
                                }); 
                            });
                            $(document).ready(function(){
                                 $(function(){ $('#intro').click(function(){ 
                                    $('html,body').animate({scrollTop:$('.content').offset().top}, 500);});  
                                }); 
                            }); 
                    </script>
                  </div>
                </div>
          <div class="BigLogo">
            <img src="./images/cover.jpg" alt="" >
          </div>
          <div class="clear"></div>




        <div class="encyclopedia">
            <h2>常見皮膚癌介紹</h2>
            <div id="tab-panel">
                <div class="tabs">
                    <a>日光性角化症<br>(Actinic keratosis)</a>
                    <a>基底細胞癌<br>(Basal cell carcinoma)</a>
                    <a>良性角化病<br>(Benign keratosis)</a>
                    <a>皮膚纖維瘤<br>(Dermatofibroma)</a>
                    <a>黑素細胞痣<br>(Melanocytic nevus)</a>
                    <a>黑色素瘤<br>(Melanoma)</a>
                    <a>鱗狀上皮細胞癌<br>(Squamous cell carcinoma)</a>
                    <a>血管病變<br>(Vascular lesion)</a>
                </div>
                <ul class="tab-content">
                    <li>
                        <p><font size=4>概述:</font><br>
                        
                            日光性角化病在臨床上被定義為在受陽光照射導致受損的皮膚上發生紅斑鱗狀斑塊，且主要是由於長期暴露紫外線輻射的環境中所導致，屬於慢性疾病。它們通常位於面部，頭皮，頸部和四肢。他們具有高機率惡性轉化的可能性 [15] 。
                            日光性角化症主要發生在白皮膚的個體中，並且有越來越多成為免疫抑制的問題。 日光性角化症可以自發消退，保持穩定或轉化為侵襲性的鱗狀細胞癌，並且大多數的鱗狀細胞癌來自日光性角化病。 會形成日光性角化症的主要發生機制是來自於發炎、免疫抑制、細胞凋亡受損和增殖失調 [16] 。
                        </p><br>
                        <p><font size=4>病徵:</font><br>
                            日光性角化症常出現在中老年人中，長時間累積的陽光的曝曬傷害與日光性角化症發病有關，常發生於顏面、頸部、及手背 [17] 。特徵是紅到淡褐色或暗色的斑塊或丘疹，表面粗糙或角化異常，通常沒有症狀。
                        </p><br>


                        <p><font size=4>風險因素:</font><br>
                            日光性角化症在面部的發病率最高，曝露過量紫外線環境下會導致細胞損傷而造成惡性病變，因此長期在戶外從事勞動工作者主要風險群，此外發病率也回隨著年齡而提高機率，尤其好發在中老年人 [18] 。<br>
                            過量的放射線照射也是造成細胞惡化病變的風險因素之一，針對接受過放射治療或器官移植的患者，較容易發病 [15] 。<br>
                        </p><br>
                        <p><font size=4>治療方式:</font><br>
                            根據患者的年齡、部位加以考慮治療方式，目前最理想的療法是切除病變部位 [19] 。<br>
                            目前常見的治療方法有四種 [18] :<br>
                            冷凍治療 : 透過局部冷凍使其表層組織壞死而脫落。治療時局部會有不等程度的疼痛感，術後有時會形成水泡，須照顧傷口。 <br>
                            局部治療 : 透過局部麻醉並進行切除治療。 <br>
                            放射治療 : 適用於老年人，透過病變對射線敏感，做切除療程。 <br>
                            雷射治療 : 透過雷射方式將病變部位切除。<br>
                        </p><br>
                        <p><font size=4>術後恢復 :</font><br>
                            一、飲食管理與照護 : 手術後應進食高維生素的流質、半流質營養食物，手術後恢復期間可多食纖維素含量高的蔬菜如芹菜、韭菜，以補充維生素 [16] 。<br>
                            二、疼痛的控制與病情追蹤 ： 術後因手術創傷，會出現傷口少量出血或嘔吐等症狀，根據疼痛的原因及時控制舒緩疼痛，恢復期間，除了傷口處理及飲食控管，需要定期接受皮膚檢測和追蹤，以控制病情。
                        </p><br>
                        
                        <p><font size=4>引用資料 :</font><br>
                            [15]     Goldberg, L.H.; Trieu, D.; Drosou, A.Actinic keratosis. In Dermatological Cryosurgery and Cryotherapy; 2016 ISBN 9781447167655. <br>
                            [16]     Berman, B.; Amini, S.Pharmacotherapy of actinic keratosis: an update. Expert Opin. Pharmacother. 2012.<br>
                            [17]     Ceilley, R.I.; Jorizzo, J.L.; Zografos, P.Current issues in the management of actinic keratosis. J. Am. Acad. Dermatol. 2013.<br>
                            [18]     DeBerker, D.; McGregor, J.M.; Hughes, B.R.Guidelines for the management of actinic keratoses. Br. J. Dermatol. 2007.<br>
                            [19]     Dodds, A.; Chia, A.; Shumack, S.Actinic Keratosis: Rationale and Management. Dermatol. Ther. (Heidelb). 2014.<br>

                        </p>

                    </li>
                    <li>
                        <p><font size=4>概述:</font><br>
                            基底細胞癌是皮膚病中最常見的惡性腫瘤，約佔白種人皮膚癌的三分之二。全世界的發病率到達275萬 [11] 。基底細胞癌為表皮基底細胞或毛囊外根鞘的上皮性低度惡性腫瘤，惡性程度較低，基底細胞癌很少轉移或導致死亡，但它可能通過局部潰傷和組織間的組織破壞導致發病率居高不下。
                            根據分化的方向可分為毛髮、皮脂腺、頂泌汗腺和汗腺四種良性腫瘤，而分化程度可再分為增生、腺瘤、良性上皮瘤以及惡性的基底細胞上皮瘤 [12] 。
                            </p><br>
                        <p><font size=4>病徵:</font><br>
                            基底細胞癌較常發生臉部，尤其以鼻、眼瞼及頰部最為常見。早期表現為局部皮膚略呈隆起小結節，質硬，表皮薄，無疼痛或壓痛，多年後出現脫屑，以後反復結痂，形成潰瘍 [13] 。 
                            可分為五種型態 [12] :<br>
                            結節潰瘍性基底細胞癌：最常見，常發生在頰部、鼻旁溝，形成潰傷。<br>
                            硬斑病樣基底細胞癌 : 表面光滑，觸之較硬，可侵襲淺表神經。治療後容易復發。<br>
                            色素性基底細胞癌：表皮會出現色素沉著，與潰瘍型不同在於皮損呈褐色或灰色，易誤診成惡性黑色素瘤。<br>
                            基底鱗狀基底細胞癌：較其他類型更具有潛在的破壞性，屬於基底細胞癌的混和型。<br>
                        </p><br>
                        <p><font size=4>風險因素:</font><br>
                            基底細胞癌常發生在面部，因此日光紫外線長期曝曬為主要風險因素之一，長久受紫外線照射會導致細胞損傷而造成病變。
                            另一個主要因素為過量放射線照射，針對接受過放射治療或器官移植的患者，較容易發病 [14] 。
                            化學物質及物理性因素，長期接觸有毒化學物質或慢性潰傷也會導致發病率的提高 [11] 。<br>
                        </p><br>
                        <p><font size=4>治療方式:</font><br>
                            治療重點在於局部病變的處理，根據基底細胞癌的種類、年齡、部位加以考慮，目前最理想的療法是切除病變部位 [13] 。<br>
                            常見的方法有五種: <br>
                            冷凍治療 : 透過局部冷凍使其表層組織壞死而脫落。治療時局部會有不等程度的疼痛感，術後有時會形成水泡，須照顧傷口<br>
                            局部治療 : 透過局部麻醉並進行切除治療<br>
                            光動力治療 : 適合表皮淺層且光容易到達的部位，本身侵入性低。可立刻回復正常生活 [14] <br>
                            放射治療 : 基底細胞癌病變對射線非常敏感，適用於老年人<br>
                            雷射治療 : 透過雷射方式將病變部位切除<br>                          
                        </p><br>
                        <p><font size=4>術後恢復:</font><br>
                            一、飲食照顧：術後進食營養豐富的流質、半流質食物，避免咀嚼較硬的食物，可能會導致傷口癒合的速度減慢或使手術部位疼痛加劇 [12] 。<br>
                            二、術後追蹤觀察：術後會因為傷口還沒癒合而出現少量出血或疼痛感等症狀，需根據疼痛原因及時調整繃帶或服用止痛藥物以緩解疼痛，而皮膚癌患者手術後復發機率提高，需長期配合追蹤以及檢測 [14] 。 
                        </p><br>

                        <p><font size=4>引用資料 :</font><br>
                            [11]     Mohan, S.V; Chang, A.L.S.Advanced basal cell carcinoma: epidemiology and therapeutic innovations. Curr. Dermatol. Rep. 2014, 3, 40–45.<br>
                            [12]     Metterle, L.; Russell, J.S.; Patel, N.S.An overview of the medical management of nonmelanoma skin cancer. Curr. Probl. Cancer,vol39,no.4 2015, 226–236.<br>
                            [13]     Pellegrini, C.; Maturo, M.G.; DiNardo, L.; Ciciarelli, V.; Gutiérrez García-Rodrigo, C.; Fargnoli, M.C.; Metterle, L.; Russell, J.S.; Patel, N.S.Understanding the molecular genetics of basal cell carcinoma. Int. J. Mol. Sci. 2017, 2845.<br>
                            [14]     Firnhaber, J.M.Diagnosis and treatment of basal cell and squamous cell carcinoma. Am. Fam. Physician,vol70,no.8 2012, 1481.<br>

                        </p>

                    </li>
                    <li>
                        <p><font size=4>概述:</font><br>
                            日曬黑斑，是透過陽光照射深棕色色素斑，常發生在會受紫外線曝曬的部位。其發病率會跟年齡成正相關，罹患日曬黑斑的機率會因此提高，也會因為新陳代謝減緩而導致色素累積，因此被認為是皮膚老化的徵兆，並且是由於皮膚積累的紫外線輻射造成的 [20] 。<br>
                            脂溢性角化病，較常發生在中年人族群，也是最常見的皮膚腫瘤之一。因為這種腫瘤是良性的，所以治療不具強制性。也沒有發生在特定性別，目前認為發病原因與遺傳基因有關 [21] 。<br>
                            扁平苔癬樣角化病，是一種慢性自身免疫性疾病，影響皮膚，口腔粘膜，頭皮和指甲 [22] 。<br>
                        </p><br>
                        <p><font size=4>病徵 :</font><br>
                            日曬黑斑，大部分是塊狀且明顯，顏色較暗沉，多為黃褐色或褐色，較不明顯，較常發生於面部(如四肢、背部)，發病特徵不明顯 [23] 。<br>
                            脂溢性角化病，初期大部分為褐色，表面粗糙，常會有皮膚掉屑的現象，形狀多為圓形 [24] 。<br>
                            扁平苔癬樣角化病，多邊界且邊界清楚，顏色多呈紫色或紅色。發病部位可在全身發生，其中以四肢最為主要部位。跟前兩者良性角化病相比，較容易發現到異常症狀且由於是慢性疾病，通常發現時病變部位已經惡化 [25] 。<br>
                        </p><br>
                        <p><font size=4>風險因素:</font><br>
                            日曬黑斑，與長時間受紫外線曝曬有關，初期並不會被發現，但隨著年齡變大，長期的黑色素異常累積，會逐漸在容易照射紫外線的部位生成黑斑 [26] 。<br>
                            脂溢性角化病，目前原因較難以捉摸，現今比較傾向相關疾病遺傳的因素，認為發病基因與染色體顯性遺傳有關 [27] 。<br>
                            扁平苔癬樣角化病，男性跟女性都有機會發病，最常見的在中年人族群身上，老年人及小孩比較罕見 [22] 。<br>
                            其他風險因素包括家族成員患有扁平苔蘚之病毒性疾病，或接觸某些充當過敏原的化學物質，例如 (抗生素、砷) [21] 。<br>
                        </p><br>
                        <p><font size=4>治療方式:</font><br>
                            由於屬於良性角化病，不會有立即危害，但因為角化病經常發生在較容易受太陽曝曬的地方，會影響美觀，目前的治療方式常為手術切除 [21] 。<br>
                            常見的治療方式有三種:<br>
                            冷凍治療 : 透過局部冷凍使其表層組織壞死而脫落。治療時局部會有不等程度的疼痛感，術後有時會形成水泡，須照顧傷口 <br>
                            放射治療 : 適用於老年人，透過病變對射線敏感，做切除療程 <br>
                            雷射治療 : 透過雷射方式將病變部位切除<br>
                        </p><br>
                        <p><font size=4>術後恢復:</font><br>
                            一、飲食照顧：術後進食營養豐富的流質、半流質食物，避免咀嚼較硬的食物，可能會導致傷口癒合的速度減慢或使手術部位疼痛加劇 [23] 。<br>
                            二、術後追蹤觀察：術後會因為傷口還沒癒合而出現少量出血或疼痛感等症狀，需根據疼痛原因及時調整繃帶或服用止痛藥物以緩解疼痛，而皮膚癌患者手術後復發機率提高，需長期配合追蹤以及檢測。
                        </p><br>

                        <p><font size=4>引用資料 :</font><br>
                            [20]     Tanaka, M.; Sawada, M.; Kobayashi, K.Key points in dermoscopic differentiation between lentigo maligna and solar lentigo. J. Dermatol. 2011.<br>
                            [21]     Elgart, G.W.Seborrheic keratoses, solar lentigines, and lichenoid keratoses: Dermatoscopic features and correlation to histology and clinical signs. Dermatol. Clin. 2001.<br>
                            [22]     Usatine, R.P.; Tinitigan, M.Diagnosis and treatment of lichen planus. Am. Fam. Physician 2011.<br>
                            [23]     Aoki, H.; Moro, O.; Tagami, H.; Kishimoto, J.Gene expression profiling analysis of solar lentigo in relation to immunohistochemical characteristics. Br. J. Dermatol. 2007.<br>
                            [24]     Epstein, S.E.Diagnosis and Treatment of Seborrheic Keratosis. JAMA J. Am. Med. Assoc. 1991.<br>
                            [25]     Lallas, A.; Argenziano, G.; Moscarella, E.; Longo, C.; Simonetti, V.; Zalaudek, I.Diagnosis and management of facial pigmented macules. Clin. Dermatol. 2014.<br>
                            [26]     Nakamura, M.; Morita, A.; Seité, S.; Haarmann-Stemmann, T.; Grether-Beck, S.; Krutmann, J.Environment-induced lentigines: Formation of solar lentigines beyond ultraviolet radiation. Exp. Dermatol. 2015.<br>
                            [27]     Braun, R.P.; Rabinovitz, H.S.; Krischer, J.; Kreusch, J.; Oliviero, M.; Naldi, L.; Kopf, A.W.; Saurat, J.H.Dermoscopy of pigmented seborrheic keratosis: A morphological study. Arch. Dermatol. 2002.<br>


                        </p>

                    </li>
                    <li>
                        <p><font size=4>概述:</font><br>
                            皮膚纖維瘤是一種常見的良性皮膚增生，由微小皮膚損傷所引發的纖維母細胞反應性增生，而非真正腫瘤，大小可變，包括苔蘚樣皮膚纖維瘤、潰瘍皮膚纖維瘤、細胞皮膚纖維瘤和脂化皮膚纖維瘤等 [28] 。<br>
                            皮膚纖維瘤發生於任何年齡，但常見於中年族群且女性發生機率多於男性。可自然發生或外傷後引起。生長緩慢，長期存在，極少自行消退 [29] 。<br>
                        </p><br>
                        <p><font size=4>病徵:</font><br>
                            多見於四肢好發於下肢、肘上方或軀幹兩側和肩背部，其他部位亦可發生。<br>
                            皮內丘疹或結節，隆起堅硬，基底可推動，但與表皮相連。表面的皮膚光滑或粗糙，色澤深淺不一可為正常膚色，亦可為黃褐色、黑褐色或淡紅色，通常無自覺症狀，偶有輕度疼痛感 [30] 。<br>
                        </p><br>
                        <p><font size=4>風險因素:</font><br>
                            皮膚纖維瘤是深層皮膚細胞多餘的累積。這些增長的確切原因是很難得知的。<br>
                            潛在的原因可能包括小傷，如:蚊蟲叮咬、或穿刺傷口 [31] 。<br>
                            年齡可能是另一個危險因素，因為增長主要出現在青壯年族群，尤其若免疫系統受抑制的患者患有皮膚纖維瘤的機率提高，如果纖維瘤的形狀異常或是不正當的出血，也可能會病變成惡性纖維瘤 [28] 。<br>
                        </p><br>
                        <p><font size=4>治療方式:</font><br>
                            大部分皮膚纖維瘤不需要治療，並不會有任何症狀，必要時可透過手術治療，依照患者的年齡、病變部位範圍作為手術治療參考依據。透過手術切除病變部位，注射皮質類固醇激素治療 [32] 。
                            常見手術方法有三種:<br>
                            冷凍治療 : 透過局部冷凍使其表層組織壞死而脫落。治療時局部會有不等程度的疼痛感，術後有時會形成水泡，須照顧傷口。 <br>
                            局部治療:透過局部麻醉並進行切除治療。 <br>
                            放射治療:適用於老年人，透過病變對射線敏感，做切除療程。<br>
                        </p><br>
                        <p><font size=4>術後恢復:</font><br>
                            飲食控管 : 術後應以清淡而富有營養為主。多吃蔬菜、食物中含有抗癌物質，水果、牛奶等富含多種胺基酸、維生素、蛋白質和易消化的滋補食品。少吃油膩的食物及、菸酒等刺激物 。<br>
                            養成良好的生活習慣 : 注意保持充足的睡眠，避免過度勞累，養成規律生活以增強體質，提高自身的抗病能力 [28] 。<br>
                            傷口復原及追蹤 : 術後因手術創傷，會出現傷口少量出血或嘔吐等症狀，根據疼痛的原因及時控制舒緩疼痛，術後可能會留下傷疤，這些傷疤可能會形成新的纖維瘤，除了傷口控制之外，也需要定期接受皮膚檢測和追蹤。
                        </p><br>

                        <p><font size=4>引用資料 :</font><br>
                            [28]     Puig, S.; Romero, D.; Zaballos, P.; Malvehy, J.Dermoscopy of dermatofibroma. Arch. Dermatol. 2005, 142, 75–83.<br>
                            [29]     Ferrari, A.; Argenziano, G.; Buccini, P.; Cota, C.; Sperduti, I.; DeSimone, P.; Eibenschutz, L.; Silipo, V.; Zalaudek, I.; Catricalà, C.; et al.Myxoid dermatofibroma. Histopathology 1999, 34, 357–364.<br>
                            [30]     Agero, A.L.C.; Taliercio, S.; Dusza, S.W.; Salaro, C.; Chu, P.; Marghoob, A.A.Conventional and polarized dermoscopy features of dermatofibroma. Arch. Dermatology,vol142,no.11 2006, 1431–1437.<br>
                            [31]     Ferrari, A.; Argenziano, G.; Buccini, P.; Cota, C.; Sperduti, I.; DeSimone, P.; Eibenschutz, L.; Silipo, V.; Zalaudek, I.; Catricalà, C.Typical and atypical dermoscopic presentations of dermatofibroma. J. Eur. Acad. Dermatology Venereol. 2013, 1375–1380.<br>
                            [32]     Simões, M.C.F.; Sousa, J.J.S.; Pais, A.A.C.C.Skin cancer and new treatment perspectives: A review. Cancer Lett. 2015, 8–42.<br>

                        </p>
                    
                    </li>
                    <li>
                        <p><font size=4>概述:</font><br>
                            黑色素痣是在胚胎形成過程中的神經外胚層細胞突變，在6-24週間，形成一群良性的黑色素細胞，黑色素細胞是一種特殊的細胞類型，其主要功能是產生決定皮膚，毛髮和眼睛顏色的黑色素 [7] 。
                            黑素細胞出現在神經嵴中，以填充各種部位，包括表皮，毛囊，眼睛的葡萄膜和耳蝸包括皮膚真皮層，結締組織，附屬器官如汗腺、毛囊、血管、神經、皮脂腺、角質細胞等等，偶爾還會延伸到皮下脂肪。它並非是遺傳性疾病，大約33％的黑素瘤直接來源於良性黑素細胞痣
                            [8] 。儘管如此，絕大多數黑素細胞痣並不會發展為黑色素瘤。
                        </p><br>
                        <p><font size=4>病徵:</font><br>
                            直徑大於20公分以上者稱為巨大先天性黑色細胞痣，此種先天痣有時會大到覆蓋超過50%以上的人體皮膚表面積，覆蓋着黑色素，皮膚真皮，結締組織，附屬器官如汗腺、毛髮、血管、神經纖维、皮脂腺，黑色細胞痣會以各種不同的形態出現，如果黑色細胞痣上長有粗毛，此種痣除了不雅觀外，其惡性變化的機率相比之下來的較高
                            (3-7%) 。其他直徑小於20公分的，稱為非巨大先天性黑色細胞痣，其惡性變化的機率較低 [9] 。痣的外觀看起來可能是扁平、突起、顆粒狀，或者其它形狀，黑色素痣顏色則可能為棕色、黑色或藍色 [10] 。
                        </p><br>
                        <p><font size=4>風險因素:</font><br>
                            黑色素痣又分為先天性的痣及後天性的痣，先天性的痣大多在出生時或新生兒時期就存在，遺傳體質和陽光的長期暴晒是兩個生成黑色素痣的重要因素。直徑大於20公分以上的黑色素痣稱為巨大先天性黑色細胞痣，黑色素痣屬於良性的腫瘤，但長期不正常的黑色素累積和外在環境因素影響，具有一定機率發展成惡性黑色素瘤的風險，需要定期追蹤並定期檢測 [9] 。
                            黑素細胞痣的數量與黑素瘤風險呈正相關，並且根據痣的數量，大小和類型而變化。分析結果強調，痣超過100的患者黑素瘤風險增加7倍 [10] 。
                            </p><br>
                        <P><font size=4>治療方式:</font> <br>
                            手術是首選的治療方法，但手術並不能改善美容外觀，而是最大程度的降低惡變成黑色素瘤的風險 [9] 。<br>
                            目前常見的手術方式有四種:<br>
                            直接切除 <br>
                            階段性切除 : 依照黑色素瘤部位設計階段性的療程。<br>
                            水球擴張階段性切除。<br>
                            全皮移植/網狀化薄層皮膚移植皮移植。 <br>
                        </P><br>
                        <P><font size=4>術後恢復:</font><br>
                            一、飲食護理：術後一至兩天予進食高蛋白、高維生素等營養豐富的流質、半流質食物，避免進食硬的食物，減少咀嚼肌運動，以免影響傷口癒合，術後3天後可多食纖維素含量高的蔬菜，以促進腸胃蠕動 [9] 。<br>
                            二、疼痛的觀察護理：術後因手術創傷，早期可有眼瞼腫脹、結膜水腫、眼睛疼痛及噁心、嘔吐等症狀，根據疼痛原因及時調整繃帶或應用止痛藥物緩解疼痛。如果手術後三天後病痛加劇，要警惕併發症的發生，應及時報告醫生及時處理。<br>
                            三、定期追蹤 : 切除後，黑色素瘤有一定的機率會再復發，需要透過定期檢測去掌握病況。
                        </p><br>

                        <p><font size=4>引用資料 :</font><br>
                            [7]  Balois, T.; Amar, M.BenMorphology of melanocytic lesions in situ. Sci. Reports,vol4,no.3622 2014.<br>
                            [8]  Damsky, W.E.; Bosenberg, M.Melanocytic nevi and melanoma: Unraveling a complex relationship. Oncogene,vol36,no.42 2017, 5771–5792.<br>
                            [9]  Armstrong, B.K.; Kricker, A.The epidemiology of UV induced skin cancer. J. Photochem. Photobiol. B Biol. 2001, 8–18.<br>
                            [10]     Titus, L.; Barnhill, R.L.; Lott, J.P.; Piepkorn, M.W.; Elder, D.E.; Frederick, P.D.; Nelson, H.D.; Carney, P.A.; Knezevich, S.R.; Weinstock, M.A.; et al.The influence of tumor regression, solar elastosis, and patient age on pathologists’ interpretation of melanocytic skin lesions. Lab. Investig. 2017, 187–193.<br>


                        </p>
                        </li>
                    <li>
                        <p><font size=4>概述:</font><br>
                            黑色素瘤在現今醫療資源進步的時代仍然是一種致命的惡性腫瘤，在許多其他類型的腫瘤發病率和死亡率明顯改善下降的時候，黑色素瘤的發病率卻持續增加，雖然大多數患者在診斷時是身體局部部位發病，並且通過手術切除原發腫瘤進行治療，但許多患者仍發生轉移
                            [1] 。
                            黑色素瘤發病率急劇增加的一部分可歸咎於近年來紫外線輻射的增加，紫外線輻射是罹患黑素瘤的環境危險因素之一。研究顯示遺傳和基因變化呈現高度相關性，黑色素瘤基因有機會從上一代經過遺傳傳遞到下一代，是年齡在十五歲至四十五歲之間的族群中最常見的皮膚類型癌症
                            [2] 。
                            早期診斷治療是降低黑素瘤死亡率的最有效措施之一。目前主要解決方法為早期檢測並切除，但切除後不代表痊癒，反而可能會導致黑色素瘤復發的風險增加，需要定期檢查以及追蹤，避免黑色素瘤發生移轉。
                        </p><br>
                        <p><font size=4>病徵:</font><br>
                            身上具有較大的痣 (>5mm) 的人與黑素瘤的風險具有高度相關。非典型的痣通常較大，至少五毫米，具有扁平且有非典型特徵，例如色素堆積，不規則不對稱的輪廓和不明顯的邊界 [3] 。
                            <br>
                            依型態可以分為四種 [1] :<br>
                            小痣色素性黑色素瘤：主要是長期曝曬在陽光下所造成，在面部上有較高機會出現。<br>
                            肢端黑色素瘤：主要出現在腳底。<br>
                            結節狀黑色素瘤：會在皮膚表面呈硬結狀，侵入皮膚較深。<br>
                            表淺擴散性黑色素瘤：此型態的黑色素瘤出現機率最高。
                        </p><br>
                        <p><font size=4>風險因素:</font><br>
                            黑素瘤是由遺傳和環境暴露之間的相互作用引起的多因素疾病。發展為惡性黑色素瘤的最重要的環境風險因素是紫外線，因為它們具有遺傳毒性。Gandini研究了黑色素瘤和陽光暴露之間的相關性，實驗結論認為間歇性陽光照射是黑色素瘤風險的主要決定因素
                            [4] 。曬傷可能是間歇性日照暴露的主因，而在兒童時期曬傷罹病機率最高。<br>
                            另一危險因素是黑素細胞痣的數量，黑素細胞痣是黑素細胞或痣細胞的良性累積，可以是先天性的或由後天獲得。大約25％的黑色素瘤病例與預先存在的痣一起發生。此外，總痣計數與黑素瘤風險呈正相關，並且根據痣的數量，大小和類型而變化。分析結果強調，痣超過100的患者黑素瘤風險增加七倍
                            [3] 。
                        </p><br>
                        <p><font size=4>治療方式 [5] :</font> <br>
                            化學治療 : 包含手術和放射治療，化學治療通常會搭配藥物綜合治療。<br>
                            免疫治療 : 黑色素瘤細胞通過多種機制表現出對化學治療的內在抵抗性，免疫療法改善黑素瘤患者的免疫應答並增加細胞毒性藥物損傷的癌細胞的清除率。<br>
                            局部治療 : 是治療黑色素瘤轉移的有效和安全的方法。雖然它不會停止進展，但它可以控制原發性的黑色素瘤擴散以避免從皮膚轉移到其他部位。<br>
                            標靶治療 : 由於黑素瘤的高度抗性，需要針對黑素瘤發生的部位及狀況評估特定機制進行靶向治療。<br>
                        </p><br>
                        <p><font size=4>術後恢復:</font><br>
                            一、飲食控管照護：術後可攝取高維生素、高蛋白質的流質食物，以取得和補充手術過程中所流失的營養素，盡量避免咀嚼較硬的食物，以免傷口撕裂疼痛加劇或影響傷口癒合 [6] 。<br>
                            二、傷口恢復照護：術後以繃帶加壓包紮，預防切口裂開，要保持繃帶固定良好及敷料清潔，如繃帶鬆脫、敷料滲濕應及時更換，避免因此導致傷口受感染。<br>
                            三、術後病情追蹤：術後因手術創傷，早期可能會有腫脹、水腫、疼痛及偶爾會發生嘔吐等症狀，根據疼痛的原因及時調整繃帶或服用止痛藥物緩解疼痛。如果手術後3天後傷口疼痛加劇，其他症狀也沒有好轉，此時要警惕併發症的發生，應及時告知醫生立即處理
                            [5]。
                        </p><br>

                        <p><font size=4>引用資料 :</font><br>
                            [1]  Ossio, R.; Roldán-Marín, R.; Martínez-Said, H.; Adams, D.J.; Robles-Espinoza, C.D.Melanoma: A global perspective. Nat. Rev. Cancer,vol17,no.7 2017, 393–394.<br>
                            [2]  Berwick, M.; Armstrong, B.K.; Ben-Porat, L.; Fine, J.; Kricker, A.; Eberle, C.; Barnhill, R.Sun exposure and mortality from melanoma. J. Natl. Cancer Institute,vol197,no.3 2005, 195–199.<br>
                            [3]  McPherson, M.; Elwood, M.; English, D.R.; Baade, P.D.; Youl, P.H.; Aitken, J.F.Presentation and detection of invasive melanoma in a high-risk population. J. Am. Acad. Dermatology,vol54,no.5 2006, 783–792.<br>
                            [4]  Meyle, K.D.; Guldberg, P.Genetic risk factors for melanoma. Hum. Genet. 2009, 499–510.<br>
                            [5]  Apalla, Z.; Nashan, D.; Weller, R.B.; Castellsagué, X.Skin Cancer: Epidemiology, Disease Burden, Pathophysiology, Diagnosis, and Therapeutic Approaches. Dermatol. Ther. (Heidelb). 2017, 5–19.<br>
                            [6]  Shain, A.H.; Bastian, B.C.From melanocytes to melanomas. Nat. Rev. Cancer,vol16,no.6 2016, 345–358.<br>


                        </p>
                    </li>
                    <li>
                        <p><font size=4>概述:</font><br>
                            皮膚鱗狀細胞癌是在表皮中出現的角質形成細胞的惡性腫瘤，具有皮膚侵襲的組織學證據。發病率因環境，膚色和從事戶外的活動及行為而異，皮膚白皙或曬黑很少的人，患有免疫抑制的人以及長期受紫外線照射的工作者最容易患鱗狀細胞癌 [39] 。<br>
                            皮膚鱗狀細胞癌可以出現在皮膚的任何一個地方，而其表面往往會有潰傷，若沒能及時發現，會形成難以控制的皮膚腫瘤，一開始並不會產生鱗狀上皮細胞癌，而是先發生日光性角化症，如果當時沒有發現，仍長期持續暴露在強烈紫外線或是燒燙傷所留下的疤痕，都有機會惡化形成鱗狀細胞癌 [40] 。<br>
                        </p><br>
                        <p><font size=4>病徵:</font><br>
                            外觀會出現紅色的斑塊，通常發生在太陽曝曬部位(如面部、手背、頭皮)，斑塊表面會粗糙不平且有破皮潰傷，偶爾會少量出血，早期因為鱗狀上皮細胞腫瘤生長相較其他惡性皮膚腫瘤緩慢，很難在早期發現，因此往往發現時已成惡性腫瘤 [41] 。<br>
                        </p><br>
                        <p><font size=4>風險因素:</font><br>
                            罹患鱗狀上皮細胞癌的主要原因是由於長時間的紫外線強烈照射，使腫瘤惡化，另一個主要因素是遺傳所帶來的基因疾病，會有很高機率藉由遺傳疾病而出現鱗狀細胞癌 [42] 。<br>
                            而輻射汙染與服用免疫抑制藥物的病人，也是產生鱗狀惡性腫瘤的高危險族群 [43] 。<br>
                        </p><br>
                        <p><font size=4>治療方式:</font><br>
                            依據患者的年齡、鱗狀細胞癌的細胞大小、病變部位、以及是否產生移轉，去判斷使用哪種治療方式 [39] 。<br>
                            目前透過手術切除腫瘤，仍然是最直接根除癌細胞的方法，常見的治療方法有三種 [42] :<br>
                            冷凍治療 : 透過局部冷凍使其表層組織壞死而脫落。治療時局部會有不等程度的疼痛感，術後有時會形成水泡，須照顧傷口。<br>
                            放射治療 : 適用於老年人，透過病變對射線敏感，做切除療程。<br>
                            電燒治療 : 利用電燒的方式清除腫瘤與癌細胞。<br>
                        </p><br>
                        <p><font size=4>術後恢復:</font><br>
                           一、飲食照顧：術後進食營養豐富的流質、半流質食物，避免咀嚼較硬的食物，可能會導致傷口癒合的速度減慢或使手術部位疼痛加劇。<br>
                           二、術後追蹤觀察：術後會因為傷口還沒癒合而出現少量出血或疼痛感等症狀，需根據疼痛原因及時調整繃帶或服用止痛藥物以緩解疼痛，而皮膚癌患者手術後復發機率提高，需長期配合追蹤以及檢測 [40] 。
                        </p><br>

                        <p><font size=4>引用資料 :</font><br>
                            [39]     Graham, G.F.; Tuchayi, S.M.Squamous cell carcinoma. In Dermatological Cryosurgery and Cryotherapy; 2016 ISBN 9781447167655.<br>
                            [40]     Alam, M.; Ratner, D.Cutaneous squamous-cell carcinoma. N. Engl. J. Med. 2001, 344, 975–983.<br>
                            [41]     Network, C.G.A.R.; othersComprehensive genomic characterization of squamous cell lung cancers. Nature 2012, 489, 519.<br>
                            [42]     Madan, V.; Lear, J.T.; Szeimies, R.-M.Non-melanoma skin cancer. Lancet 2010, 375, 673–685.<br>
                            [43]     Findlay, M.; Ally, M.S.Non-Melanoma Skin Cancers. In Plastic and Reconstructive Surgery: Approaches and Techniques; 2015 ISBN 9781118655412.<br>

                        </p>
                    </li>
                    <li>
                        <p><font size=4>概述:</font><br>
                            由於皮膚下的血管異常增生，發育失常，所生成的良性腫瘤，並不會有立即性的危險，生長速度較其他腫瘤緩慢，生成在身體各個部位組織，如果發生於面部，會有美觀上的阻礙，於孩童時期較容易出現，可能會因為傷口、摩擦而少量出血，應要審慎處理，避免傷口遭受感染 [33] 。<br>
                        </p><br>
                        <p><font size=4>病徵:</font><br>
                            顏色多呈暗紅色，位於真皮層內，大小不一，有時腫瘤的大小會因為身體的增長而放大，腫瘤面積並不會因此而增大，依照腫瘤生成位置而有不同特徵以及症狀，雖然是良性腫瘤，但如果生成部位在於血管分布密集的部位，可能會導致生命危險，需要盡早治療 [34] 。<br>
                        </p><br>
                        <p><font size=4>風險因素:</font><br>
                            先天性血管病變多為遺傳基因所導致或是皮膚異常增生，造成發育失常，後天性則與賀爾蒙和相關血管疾病有關，主要生長在身體各部位，並不會造成危險 [35] 。<br>
                        </p><br>
                        <p><font size=4>治療方式:</font><br>
                            由於屬於良性腫瘤，病不會有特別症狀，但需要注意良性腫瘤生長的位置和腫瘤大小，可能會壓迫神經或影響美觀，必要時可透過手術切除異常增生部位 [36] 。
                            目前常見的方式有四種 [37] :<br>
                            冷凍治療 : 透過局部冷凍使其表層組織壞死而脫落。治療時局部會有不等程度的疼痛感，術後有時會形成水泡，須照顧傷口。 <br>
                            局部治療 : 透過局部麻醉並進行切除治療。 <br>
                            放射治療 : 適用於老年人，透過病變對射線敏感，做切除療程。 <br>
                            微創雷射治療 : 透過雷射方式將腫瘤病變部位或靜脈曲張的壞死組織切除 [38]。<br>
                        </p><br>
                        <p><font size=4>術後恢復:</font><br>
                            一、飲食護理及飲食習慣控管：術後應在恢復期間補充高蛋白質、纖維質的流質食物，盡量少吃太重味道的刺激性食物，如過辣、過鹹或油膩食品，會導致傷口復原速度增長，且可能會導致傷口加劇。<br>
                           二、傷口護理：術後予繃帶加壓包紮，預防切口裂開，要保持繃帶固定良好及傷口周圍清潔乾燥，以防止細菌感染 [37] 。<br>
                           三、疼痛情況評估以及病情追蹤：術後因手術創傷，早期可能會出現嘔吐、噁心等症狀，根據疼痛的原因適時緩解疼痛。如術後四肢疼痛加劇或傷口復原效率不彰，要警惕併發症的發生，應及時報告醫生及時處理。
                        </p><br>

                        <p><font size=4>引用資料 :</font><br>
                            [33]     Maclellan, R.A.; Greene, A.K.Vascular Tumors. In Pathobiology of Human Disease: A Dynamic Encyclopedia of Disease Mechanisms; 2014 ISBN 9780123864567.<br>
                            [34]     Argenziano, G.; Zalaudek, I.; Corona, R.; Sera, F.; Cicale, L.; Petrillo, G.; Ruocco, E.; Hofmann-Wellenhof, R.; Soyer, H.P.Vascular structures in skin tumors: A dermoscopy study. Arch. Dermatol. 2004.<br>
                            [35]     Kim, E.H.; Kim, Y.C.; Lee, E.S.; Kang, H.Y.The vascular characteristics of melasma. J. Dermatological Sci. 2007, 111–116.<br>
                            [36]     Sontheimer, D.L.Peripheral vascular disease: Diagnosis and treatment. Am. Fam. Physician 2006.<br>
                            [37]     Darrow, D.H.; Greene, A.K.; Mancini, A.J.; Nopper, A.J.Diagnosis and Management of Infantile Hemangioma. Pediatrics 2015.<br>
                            [38]     Stier, M.F.; Glick, S.A.; Hirsch, R.J.Laser treatment of pediatric vascular lesions: Port wine stains and hemangiomas. J. Am. Acad. Dermatol. 2008.<br>
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <script>
            $(function () {
                var $tabPanel = $('#tab-panel'),
                    $tabs = $tabPanel.find('.tabs'),
                    $tab = $tabs.find('a'),
                    $tabContent = $tabPanel.find('.tab-content'),
                    $content = $tabContent.find('> li');

                $tab.eq(0).addClass('active');
                $content.eq(0).show();

                $tab.on('click', function () {
                    var $tabIndex = $(this).index();
                    $(this).addClass('active').siblings().removeClass('active');
                    $content.eq($tabIndex).show().siblings().hide();
                });
            });
        </script>

                <div class="inforTitle">
                        <h2><font face="Noto Sans TC">你不可不知道的皮膚癌小常識</font></h2>
                </div>
                <div class="inforBoard">
                    <div class="infor1">
                        <div class="inforImg">
                        <img src="https://image1.thenewslens.com/2019/4/frfna777ao9txaj9uy8sh9fhui0adu.jpg?auto=compress&h=648&q=80&w=1080" alt="">
                        </div>
                        <h2><font face="Noto Sans TC">惡性黑色素瘤五特徵，發現應儘速就醫</font></h2>
                        <p><font face="Noto Sans TC">惡性的黑色素瘤通常具有5項明顯特徵，一旦任一情況發生，應盡速就診，尋求皮膚科醫師確認：<br>
                                                      1.身體上的斑塊或黑痣出現上下左右不對稱性<br>
                                                      2.邊緣呈現不平滑甚至鋸齒狀<br>
                                                      3.顏色出現變化或深淺不一<br>
                                                      4.大小突然變大且大於6毫米，或突然快速隆起<br>
                                                      5.伴隨滲液、脫屑或潰爛</font></p>
                    </div>
                    <div class="infor2">
                        <div class="inforImg">
                        <img src="https://cdn.prod-carehubs.net/n1/802899ec472ea3d8/uploads/2018/07/a-medical-illustration-of-normal-skin-and-three-types-of-skin-cancer-squamous-cell-carcinoma-basal-cell-carcinoma-and-melanoma-original.jpg" alt="">
                        </div>
                        <h2><font face="Noto Sans TC">不可輕忽之皮膚癌</font></h2>
                        <p><font face="Noto Sans TC">皮膚癌所指的是皮膚表層上的惡性腫瘤，最常發生在臉部、脖子跟手臂這三個最常被陽光照射的地方。而皮膚癌也是最常見的癌症，超過了肺癌、乳房、結腸直腸癌，前列腺癌。</font></p>
                    </div>
                </div>
            
                <div class="content1" id="content1">
                    <h2><font face="Noto Sans TC">Sign In</font></h2>
                    <form action="login.php" method="POST">
                        <input type="text" name="userid" placeholder="USERNAME">
                        <input type="password" name="pwd" placeholder="PASSWORD">
                        <div class="button-row">
                            <input type="submit" class="sign-in" value="Sign In">
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
                <div class="content2">
                    <h2><font face="Noto Sans TC">Sign Up</font></h2>
                    <form action="register.php" method="POST">
                        <input type="email" name="email" placeholder="Enter your email address">
                        <!-- <input type="text" name="userid" placeholder="这里输入文字"> -->
                        <input type="text" name="username" placeholder="Enter User Name">
                        <input type="password" name="pwd1" placeholder="Enter Password">
                        <input type="password" name="pwd2" placeholder="Enter Password again">
                        <input type="submit" name="submit" class="register" value="Register">
                    </form>
                </div>  
            </div>          



          
          <div class="clear"></div>
          
          <div class="location">
            <div class="ourlocation">
              <h2><font face="Noto Sans TC">OUR LOCATION</font></h2>
            </div>
            <!-- <img src="http://fakeimg.pl/1280x250" alt=""> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.8410600253987!2d120.28272561478035!3d22.734148232751163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0f114a51d53b%3A0xe6e681ecaffe55f2!2z5ZyL56uL6auY6ZuE5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1576274636387!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
          <div class="clear"></div>
          <div class="contact">
          <div class="c1">
            <h2><font face="Noto Sans TC">CONTACT US</font></h2>
            <p1><font face="Noto Sans TC">高雄市楠梓區高雄大學700號</font></p1>
            <p2><font face="Noto Sans TC">TEL : 0987654321</font></p2>
            <p3><font face="Noto Sans TC">EMAIL : skinaidentifier@gmail.com</font></p3>
          </div>
          <div class="c2">
              <h3><font face="Noto Sans TC">DONATE US</font></h3>
              <a href=""><font face="Noto Sans TC">We need your help!!!</font></a>
            </div>
            <div class="c3">
                    <div class="message">
                    <p><font face="Noto Sans TC">Leave message to us...</font></p>
                    <input id="message" type="text" name="message">
                    </div>
                    <div class="submit">
                    <input type="submit" value="Sumbit">
                    </div>
                </div>              
          </div>

          <div class="clear"></div>
          <div class="footer">
              <div class="footllist">
              <ul>
                <li><font face="Noto Sans TC">MADE BY NUKIM</font></li>
                <li><a href=""><font face="Noto Sans TC">使用說明</font></a></li>
                <li><a href=""><font face="Noto Sans TC">最新消息</font></a></li>
              </ul>
             </div>
             <div class="footrlist">
              <ul>
                <li><a href=""><font face="Noto Sans TC">網站使用條款</font></a></li>
                <li><a href=""><font face="Noto Sans TC">隱私權政策</font></a></li>
                <li><a href=""><font face="Noto Sans TC">免責聲明</font></a></li>
                <li id="webname"><font face="Noto Sans TC">© 2019 Skin AIdentifier</font></li>
              </ul>
             </div>
        </div>
</body>
</html>