<?php
    define("TITLE", "सृजन");
    include('includes/header.php');
    
    
?>
<!--header php -->

<img src="images/demoposter.jpg">
<div class="container">
    <div id="aboutNN">
        <span class="headingAbout">
            सृजन क्या है ?
        </span>
        <span class="descriptionAbout">
            इस प्रतियोगिता का उद्देश्य भारतीय संस्कृति की सम्पूर्णता एवं महत्ता को आम जनता तक पहुँचाना तथा किसी प्रकार की भाषा इत्यादि जैसे पैमाने को बाध्यता रखे बिना भावनाओं को कला के माध्यम से प्रदर्शित करना है।
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
                    श्रेया प्रकाश<a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    अनुज गुर्जर <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    तोषिका चोयल <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
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
            <li><a data-toggle="tab" href="#menu2">नियमावली</a></li>
        </ul>

        <div class="tab-content">
            <div id="topics" class="tab-pane fade in active contentOfVivran">
                <br>
                यह चरण ऑनलाइन आयोजित किया जायेगा, जिसमे प्रतिभागियों को विषय पर आधारित अपनी प्रविष्टियाँ tooryanaad@gmail.com पर भेजनी होंगी। इस वर्ष की सृजन प्रतियोगिता "भारत का गौरवशाली इतिहास" विषय पर है। निर्णायकों द्वारा दोनों वर्गों से श्रेष्ठ प्रविष्टियों का चयन अगले चरण के लिए किया जायेगा। ऑनलाइन प्रविष्टियाँ भेजने की अंतिम तिथि _______ है।
            </div>
            <div id="menu1" class="tab-pane fade contentOfVivran">
                <br>
                इस चरण में चयनित प्रतिभागियों को अपनी प्रविष्टि के साथ-साथ, प्रविष्टि का विवरण कूरियर द्वारा भेजना होगा या व्यक्तिगत रूप से लानी होंगी। कलाकृतियों के लिए प्रदर्शनी का आयोजन होगा।

            </div>
            <div id="menu2" class="tab-pane fade contentOfVivran">
                <br>
                <ul>
                    <li>यह प्रतियोगिता दो चरणों में होगी।
                    <li>इसमें दो श्रेणियों में प्रविष्टियाँ भेजी जा सकती हैं।
                    <li>चित्रकला <br>
                        यह एक ऐसी कला है जिसमें भावों और विचारों को चित्र के द्वारा प्रदर्शित किया जाता है।
                    <li>छायाकारी <br>
                        यह कला वास्त विकता के बारे में बताता है। एक छायाकार एक क्षण की महत्ता को दर्शाता है।

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
