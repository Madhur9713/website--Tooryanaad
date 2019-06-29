<?php
    define("TITLE", "रचनात्मक लेखन");
    include('includes/header.php');
    
    
?>
<!--header php -->


<img src="images/demoposter.jpg">
<div class="container">
    <div id="aboutNN">
        <span class="headingAbout">
            रचनात्मक लेखन क्या है ?
        </span>
        <span class="descriptionAbout">
            लेखन वह प्रक्रिया है जिसमें हम अपने मन के विचारों को लिखित तोप में व्यक्त करते हैं। रचनात्मक लेखन के अंतर्गत प्रतिभागी को अपने विचारों को कलात्मक लेख के रूप में प्रस्तुत करना होता है।
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
                    ऋतम्भरा पटेल<a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    शिवानी अग्रवाल <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    अर्चित मिश्रा <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
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
            <li class="active"><a data-toggle="tab" href="#topics">विवरण</a></li>
            <li><a data-toggle="tab" href="#menu1">नियमावली</a></li>
        </ul>

        <div class="tab-content">
            <div id="topics" class="tab-pane fade in active contentOfVivran">
                <br>
                1. सम्पूर्ण प्रतियोगिता एक ही चरण में होगी <br>
                2. प्रतिभागी अपने अनुसार लेखन की किसी भी विधा का चयन क्र सकते हैं <br>
                3. प्रतिभागियों को विषय निम्न माध्यमों से दिए जायेंगे - <br>
                &nbsp &nbsp &nbsp 1. विशेष चित्रों के माध्यम से <br>
                &nbsp &nbsp &nbsp 2. सांकेतिक पंक्तियों द्वारा<br>
                &nbsp &nbsp &nbsp 3. मौखिक टेप द्वारा<br>
                &nbsp &nbsp &nbsp 4. चलचित्र के द्वारा <br>
                4. कुछ शब्दों, जो विषय के साथ अंकित होंगे उनका प्रयोग अनिवार्य है ।
            </div>
            <div id="menu1" class="tab-pane fade contentOfVivran">
                <br>
                अंकों का बंटन निम्न बिंदुओं के आधार पर किया जायेगा ।<br>
                1. भाषा <br>
                2. शैली <br>
                3. विषयबोध<br>
                4. व्याकरण एवं शुद्धता <br>
                5. नवीनता <br>
                अंकों के आधार पर ३ सर्वश्रेष्ठ रचनाकारों को विजेता चुना जायेगा।
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
