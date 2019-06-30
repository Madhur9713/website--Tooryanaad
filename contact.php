<?php
    define("TITLE", "सम्पर्क");
    include('includes/header.php');
    
    
?>
<!--header php -->

<br><br><br><br><br><br><br><br><br><br>



<div id="map" style="width: 100%; height: 400px; background-color: grey;"></div>
<div style="background-color: white;">
<br><br><br>

<div class="container" >
    <div class="row">
        <div class="col-md-6" id="contact">
            <div class="content">
                <br>
                <h1>सम्पर्क</h1><br>
                <div id="slant">
                    <p id="slantpara"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><span class="sr-only">(current)</span>
                        <?php echo $contact[0][mob]; ?> <?php echo $contact[0][name]; ?></p>
                </div>

                <div id="slant">
                    <p id="slantpara"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><span class="sr-only">(current)</span>
                        <?php echo $contact[1][mob]; ?> <?php echo $contact[1][name]; ?></p>
                </div>

                <div id="slant">
                    <p id="slantpara"><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:tooryanaad@gmail.com"><span class="sr-only">(current)</span> tooryanaad@gmail.com</a></p>
                </div>

                <div id="slant">
                    <p style="font-size:12px;"><span class="fa fa-map-marker" aria-hidden="true"></span><a href="http://web.manit.ac.in/"><span class="sr-only">(current)</span> राजभाषा कार्यान्वयन समिति, मौलाना आज़ाद राष्ट्रीय प्रौद्योगिकी संस्थान, भोपाल</a></p>
                </div>

            </div>
            </div>
        <div class="image-box col-md-6">
            <div class="content">
                <br>
            <h1 style="color:black;">सम्पर्क पत्रक</h1><br>
            <form class="form row">
                <div class="col-sm-4 col-xs-4">
                    <input type="text" id="name" required="" class="form-control form-opacity" placeholder="नाम*"></div>
                <div class="col-sm-4 col-xs-4">
                    <input type="text" id="email" required="" class="form-control form-opacity" placeholder="अणुडाक*">
                </div>
                <div class="col-sm-4 col-xs-4">
                    <input type="text" id="phone" required="" class="form-control form-opacity" placeholder="संपर्क सूत्र ">
                </div>
                <div class="col-sm-12 col-xs-12">
                    <input type="text" id="place" required="" class="form-control form-opacity" placeholder="स्थान ">
                </div>
                <div class="col-sm-12 col-xs-12">
                   <textarea type="text" placeholder="सन्देश" required="" id="message" rows="4" cols="48" class="form-control form-opacity"></textarea>
                </div>
                <div class="col-sm-3 col-xs-3">
                <button type="submit" class="submitb form-control" id="contact_submit" value="भेजें">भेजें</button>
            </div>
            </form>
            </div>
        </div>

    </div>
</div>

<br><br><br><br><br><br><br><br><br><br>
</div>
<?php
    include('includes/footer.php');
?>
<!-- footer -->

<script>
    // Initialize and add the map
    function initMap() {
        // The location of MANIT
        var manit = {
            lat: 23.216398,
            lng: 77.405664
        };
        // The map, centered at MANIT
        var map = new google.maps.Map(
            document.getElementById('map'), {
                zoom: 4,
                center: manit
            });
        // The marker, positioned at MANIT
        var marker = new google.maps.Marker({
            position: manit,
            map: map
        });
    }

</script>

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
  type="text/javascript"></script>>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/resize.js"></script>
<script type="text/javascript" src="js/maps.js"></script>


<script type="text/javascript">
    function addCss(fileName) {

        var head = document.head;
        var link = document.createElement("link");

        link.type = "text/css";
        link.rel = "stylesheet";
        link.href = fileName;

        head.appendChild(link);
    }

    addCss('css/contact.css');

</script>



</body>


</html>
