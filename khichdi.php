<?php
    define("TITLE", "खिचड़ी");
    include('includes/header.php');
    
    
?>
<!--header php -->


<img src="images/demoposter.jpg">
<div class="container">
    <div id="aboutNN">
        <span class="headingAbout">
            खिचड़ी क्या है ?
        </span>
        <span class="descriptionAbout">
            इस प्रतियोगिता का मुख्य उद्देश्य हिंदी सीखने की दिशा में हिन्दीतर भाषियों के मन में हिंदी भाषा के प्रति रूचि पैदा करना है। यह लक्ष्य एवं संवादात्मक चरणों द्वारा प्राप्त किया जायेगा।
        </span>
    </div>

    <div class="cards-list">

        <div class="card card1">
            <div class="card_image">

            </div>
            <div class="card_title title-white">
                <span class="span1">

                    अधिक जानकारी
                </span>
                <span class="span2">
                    दिनांक - 14/09/19<br>
                    समय - 10:00 am<br>
                    स्थान - NTB<br>
                </span>
            </div>
        </div>

        <div class="card 2">
            <div class="card_image">

            </div>
            <div class="card_title title-white">
                <span class="span1">
                    समन्वयक
                </span>
                <span class="span2">
                    आदर्शा <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    भार्गवी <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    योगेश शर्मा <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                </span>
            </div>
        </div>

        <div class="card 3">
            <div class="card_image">

            </div>
            <div class="card_title">
                <span class="span1">

                    पुरस्कार
                </span>
                <span class="span2">
                    प्रथम पुरस्कार - 2500<br>
                    द्वितीय पुरस्कार - 1500<br>
                    तृतीया पुरस्कार - 800
                </span>
            </div>
        </div>

    </div>

    <div class="vivran">
        <ul class="nav nav-tabs menu">
            <li class="active"><a data-toggle="tab" href="#topics">प्रथम चरण</a></li>
            <li><a data-toggle="tab" href="#menu1">द्वितीय चरण</a></li>
            <li><a data-toggle="tab" href="#menu2">तृतीय चरण</a></li>
            <li><a data-toggle="tab" href="#menu3">नियमावली</a></li>
        </ul>

        <div class="tab-content">
            <div id="topics" class="tab-pane fade in active contentOfVivran">
                <br>
                <ul>
                    <li>दिए गये डिब्बे से एक अक्षर को चुने व दिए गये समय के अंदर उस अक्षर से प्रारम्भ होने वाले ३ स्थान/वास्तु/पशु का नाम बताएं व अगला अक्षर चुनें।</li>
                    <li>चित्र में दिखाई गयी वस्तुओं का नाम हिंदी में बताएं।</li>
                    <li>दिए गये शब्दों को सही क्रम में लगाकर सही वाक्य बनाएं।</li>
                </ul>

            </div>
            <div id="menu1" class="tab-pane fade contentOfVivran">
                <br>
                <ul>
                    <li>प्रश्न में दिए गये संकेत की सहायता से पहेली को हल करना है।</li>
                    <li>दी गई वर्ग तालिका से छुपे हुए हिंदी शब्दों को खोजना है। शब्द बाएं से दाएं, ऊपर से नीचे या विकर्ण में हो सकते हैं।</li>
                    <li>रिक्त स्थानों में उपयुक्त शब्द भरें।</li>
                </ul>
            </div>
            <div id="menu2" class="tab-pane fade contentOfVivran">
                <br>
                <ul>
                    <li>दिए गये चित्र की सहायता से भारतीय शहरों या फिल्मों के नाम बताएं।</li>
                    <li>भाषाई भ्रामक शब्द/वाक्य।</li>
                    <li>प्रतिभागी को हिंदी समझना चाहिए और हिंदी में लिखने में सक्षम होना चाहिए। उसे हिंदी भाषी राज्यों से नहीं होना चाहिए। </li>
                </ul>
            </div>

            <div id="menu3" class="tab-pane fade contentOfVivran">
                <br>
                प्रतिभागी को हिंदी समझना चाहिए और हिंदी में लिखने में सक्षम होना चाहिए। उसे हिंदी भाषी राज्यों से नहीं होना चाहिए।
            </div>
        </div>
    </div>
</div>
<br><br><br>
<?php
    include('includes/footer.php');
?>
<!-- footer -->



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/resize.js"></script>

<script type="text/javascript">
    function addCss(fileName) {

        var head = document.head;
        var link = document.createElement("link");

        link.type = "text/css";
        link.rel = "stylesheet";
        link.href = fileName;

        head.appendChild(link);
    }

    addCss('css/NNstyle.css');

</script>



</body>


</html>
