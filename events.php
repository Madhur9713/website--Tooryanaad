<?php
    define("TITLE", "प्रतियोगिताएं");
    include('includes/header.php');
    
    
?>
<!--header php -->

<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container-fluid">
    <div class="heading">
        <h3>प्रतियोगिताएं</h3>
    </div>

    <div class="cards-list">

        <div class="card 1">
            <div class="card_image"> <a href="kavi_sammelan.php"><img src="images/kavi_sammelan.jpg" /></a> </div>
            <div class="card_title title-white">
                <p>कवि सम्मलेन</p>
            </div>
        </div>

        <div class="card 2">
            <div class="card_image">
                <a href="nukkad_natak.php"><img src="images/nukkad_natak.jpg" /></a>
            </div>
            <div class="card_title title-white">
                <p>नुक्कड़ नाटक</p>
            </div>
        </div>

        <div class="card 3">
            <div class="card_image">
                <a href="khichdi.php"><img src="images/khichdi.jpg" /></a>
            </div>
            <div class="card_title">
                <p>खिचड़ी</p>
            </div>
        </div>

        <div class="card 4">
            <div class="card_image">
                <a href="paridhanika.php"><img src="images/paridhanika.jpg" /></a>
            </div>
            <div class="card_title title-black">
                <p>भारतीय परिधानिका</p>
            </div>
        </div>

    </div>

    <div class="cards-list">

        <div class="card 1">
            <div class="card_image"> <a href="rachnatmak_lekhan.php"><img src="images/rachnatmak_lekhan.jpg" /> </a></div>
            <div class="card_title title-white">
                <p>रचनात्मक लेखन </p>
            </div>
        </div>

        <div class="card 2">
            <div class="card_image">
                <a href="bharat_manthan.php"><img src="images/bharat_manthan.jpg" /></a>
            </div>
            <div class="card_title title-white">
                <p>भारत मंथन</p>
            </div>
        </div>

        <div class="card 3">
            <div class="card_image">
                <a href="srajan.php"> <img src="images/srajan.jpg" /></a>
            </div>
            <div class="card_title">
                <p>सृजन</p>
            </div>
        </div>

        <div class="card 4">
            <div class="card_image">
                <a href="samooh_nritya.php"><img src="images/samooh_nritya.jpg" /></a>
            </div>
            <div class="card_title title-black">
                <p>नृत्य नाटिका</p>
            </div>
        </div>

    </div>

    <div class="cards-list">

        <div class="card 1">
            <div class="card_image"> <a href="chatra_sansad.php"><img src="images/chatra_sansad.jpg" /></a> </div>
            <div class="card_title title-white">
                <p>छात्र संसद</p>
            </div>
        </div>

        <div class="card 2">
            <div class="card_image">
                <a href="chakravyuh.php"><img src="images/chakravyuh.jpg" /></a>
            </div>
            <div class="card_title title-white">
                <p>चक्रव्यूह</p>
            </div>
        </div>

        <div class="card 3">
            <div class="card_image">
                <a href="vaad_vivaad.php"><img src="images/vaad_vivaad.jpg" /></a>
            </div>
            <div class="card_title">
                <p>वाद विवाद</p>
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

    addCss('css/event.css');

</script>



</body>


</html>
