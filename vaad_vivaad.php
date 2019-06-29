<?php
    define("TITLE", "वाद-विवाद");
    include('includes/header.php');
    
    
?>
<!--header php -->


<img src="images/demoposter.jpg">
<div class="container">
    <div id="aboutNN">
        <span class="headingAbout">
            वाद-विवाद क्या है ?
        </span>
        <span class="descriptionAbout">
            इस तयोगता का उदेय तभागय मताकक मता, वषय ान और वपरत परिथतय मतक
            देकर समझाना और साथ ह साथ समहू मकायकरनेक मता को भांपनेऔर उसेऔर ोसाहत करना है
            ।

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

                    ऋचा सोनी<a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
                    शिवम मिश्रा <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
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
        </ul>

        <div class="tab-content">
            <div id="topics" class="tab-pane fade in active contentOfVivran">
                <br>
                <ul>
                    <li> ऑफलाइन मायम। </li>
                    <li>समहू के चार सदय के नाम व उनका पद जो इस कार है-</li>
                    <li> मु य वता- वषय को पट करेगा और प या वप मतक देगा।</li>
                    <li> वता- मु य वता के तक को बल देगा।</li>
                    <li> सचेतक- दसू रेवता के तक क आलोचना करेगा।</li>
                    <li> अधनणायक- परूेववाद का सार ततु करेगा और नप फैसला सनु ाएगा। </li>
                </ul>
            </div>
            <div id="menu1" class="tab-pane fade contentOfVivran">
                <br>
                <ul>
                    <li> थम चरण को पार करनेपर ह वतीय चरण मवेश मलेगा। यह चरण ऑफलाइन(नव शण
                        खडं ) होगा।</li>
                    <li>वषय का चनु ाव पच के मायम सेहोगा।</li>
                    <li>येक वता को 5 मनट का समय दान कया जायेगा।</li>
                    <li> प या वप का चयन वता अपनेअनसु ार कर सकतेह।</li>
                    <li>‘बेट ऑफ़ ी’ सेपास होनेपर ह ततृ ीय चरण मवेश मलेगा।</li>
                </ul>

            </div>
            <div id="menu2" class="tab-pane fade contentOfVivran">
                <br>
                <ul>
                    <li> यह चरण सवप ल राधाकृणन सभागार मआयोिजत कया जायेगा।</li>
                    <li>वजेता का चनु ाव नणायक वारा कया जायेगा। कुछ इस कार से-</li>
                    <li>वजेता टम</li>
                    <li> उपवजेता टम</li>
                    <li> सव ेठ वता</li>
                    <li>सव ेठ अधनणायक</li>
                </ul>
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
