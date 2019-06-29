<?php
    define("TITLE", "चक्रव्यूह");
    include('includes/header.php');
    
    
?>
<!--header php -->



<img src="images/demoposter.jpg">
<div class="container">
    <div id="aboutNN">
        <span class="headingAbout">
            चक्रव्यूह क्या है ?
        </span>
        <span class="descriptionAbout">
            इस प्रतियोगिता का करना प्रतिभागी की मानसिक एवं शारीरिक क्षमता को परखना है। जो प्रतिभागी प्रतिकूल परिस्थिति में भी अपना संयम बने रखेगा। वही इन पहेलिओं को सुलझाते हुए आगे जा सकेगा। सभी महाविद्यालयीन छात्र-छात्राएं इस प्रतियोगिता में भाग ले सकते हैं।
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
                    समीर प्रजापति <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    मनीष कुमार <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br> </span>
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
            <li class="active"><a data-toggle="tab" href="#topics">नियमावली </a></li>
            <li><a data-toggle="tab" href="#menu1">विवरण</a></li>
        </ul>

        <div class="tab-content">
            <div id="topics" class="tab-pane fade in active contentOfVivran">
                <br>
                <ul>
                    <li>इस प्रतियोगिता में केवल एक ही चरण होगा। </li>
                    <li>प्रतिभागियों को दो के समूह में अपना पंजीयन करना होगा।</li>
                    <li>जिसमे प्रत्येक पहेली को हल करते हुए दूसरा टास्क भी पूरा करना होगा।यदि पहेली अथवा टास्क हल करने में असमर्थ हुए तो दंड के रूप में जल्दी-जल्दी कहा हुआ वाक्य(टंग-ट्विस्टर) या ५ मिनट के लिए प्रतीक्षा करनी होगी।तभी नए स्थान की पहेली दी जाएगी।</li>
                    <li>हर स्थान पर पहले आओ पहले पाओ नियम लागू होगा।</li>
                    <li>कोई भी प्रतिभागी अगर अनुचित एवं गलत माध्यम का इस्तेमाल करते हुए पाया जाता है तो उसे अयोग्य घोषित किया जा सकता है।</li>
                    <li>दो पहिया एवं चार पहिया वहां का उपयोग वर्जित है।</li>
                    <li>प्रतिभागी अपने साथ अपनी कलम साथ लाएं।</li>
                    <li>अगर कोई प्रतिभागी अपना साथी नहीं ढूँढ पता है तो वह अकेले ही भाग ले सकता है।</li>
                    <li>जो भी प्रतिभागी साड़ी पहेलियों को सुलझाते हुए सबसे कम समय लेगा व्ही विजेता घोषित किया जायेगा। </li>
                </ul>
            </div>
            <div id="menu1" class="tab-pane fade contentOfVivran">
                <br>
                जीवन एक पहेली की तरह है। व्यक्ति अपनी सूझ-बूझ, म्हणत, आत्म विश्वास, उमंग और उत्साह के साथ प्रत्येक पहेली को हल करके अपनी मंजिल को प्राप्त करता है। प्रखर और प्रतिभाशाली बनने के लिए संघर्ष और चुनौतियों को हर कदम पर स्वीकार करते हुए आगे बढ़ते रहना चाहिए। इसी को आधार मानते हुए तूर्यांनद'१९ लेकर आ रहा है "चक्रव्यूह", जिसमें संस्थान के विभिन्न स्थान पर छात्रों के लिए सुराग रखा गया है, जो उन्हें अपनी योग्यता व तर्क शक्ति के आधार पर ढूंढ़ना होगा।
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
