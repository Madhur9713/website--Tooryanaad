<?php
    define("TITLE", "Founders | Tooryanaad Founders");
    include('includes/header.php');
    
    
?>
<!--header php -->




<br><br><br><br><br><br><br><br><br><br><br><br>


<div class="container text-center">
    <h1>संस्थापक मण्डल</h1>
    <br><br>

    <div class="row">
        <div class="col-md-3">
            <a href='<?php echo $founder[0][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[0][image]; ?>'>
            </a>
            <div id="mem1" class="collapse">
                <h3><?php echo $founder[0][name]; ?></h3>
                <p><?php echo $founder[0][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <a href='<?php echo $founder[1][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[1][image]; ?>'>
            </a>
            <div id="mem2" class="collapse">
                <h3><?php echo $founder[1][name]; ?></h3>
                <p><?php echo $founder[1][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

       <div class="col-md-3">
            <a href='<?php echo $founder[2][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[2][image]; ?>'>
            </a>
            <div id="mem3" class="collapse">
                <h3><?php echo $founder[2][name]; ?></h3>
                <p><?php echo $founder[2][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <a href='<?php echo $founder[3][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[3][image]; ?>'>
            </a>
            <div id="mem4" class="collapse">
                <h3><?php echo $founder[3][name]; ?></h3>
                <p><?php echo $founder[3][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
       <div class="col-md-3">
            <a href='<?php echo $founder[4][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[4][image]; ?>'>
            </a>
            <div id="mem5" class="collapse">
                <h3><?php echo $founder[4][name]; ?></h3>
                <p><?php echo $founder[4][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <a href='<?php echo $founder[5][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[5][image]; ?>'>
            </a>
            <div id="mem6" class="collapse">
                <h3><?php echo $founder[5][name]; ?></h3>
                <p><?php echo $founder[5][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

        <div class="col-md-3">
            <a href='<?php echo $founder[6][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[6][image]; ?>'>
            </a>
            <div id="mem7" class="collapse">
                <h3><?php echo $founder[6][name]; ?></h3>
                <p><?php echo $founder[6][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <a href='<?php echo $founder[7][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $founder[7][image]; ?>'>
            </a>
            <div id="mem8" class="collapse">
                <h3><?php echo $founder[7][name]; ?></h3>
                <p><?php echo $founder[7][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>
    </div>

    <br><br>
    <hr><br><br>

    <h1>पूर्व छात्र सदस्य</h1>
    <br><br>

    <div class="row">

        <div class="col-md-3">
            <a href='<?php echo $oldMem[0][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[0][image]; ?>'>
            </a>
            <div id="mem9" class="collapse">
                <h3><?php echo $oldMem[0][name]; ?></h3>
                <p><?php echo $oldMem[0][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

         <div class="col-md-3">
            <a href='<?php echo $oldMem[1][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[1][image]; ?>'>
            </a>
            <div id="mem10" class="collapse">
                <h3><?php echo $oldMem[1][name]; ?></h3>
                <p><?php echo $oldMem[1][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>


         <div class="col-md-3">
            <a href='<?php echo $oldMem[2][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[2][image]; ?>'>
            </a>
            <div id="mem11" class="collapse">
                <h3><?php echo $oldMem[2][name]; ?></h3>
                <p><?php echo $oldMem[2][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

         <div class="col-md-3">
            <a href='<?php echo $oldMem[3][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[3][image]; ?>'>
            </a>
            <div id="mem12" class="collapse">
                <h3><?php echo $oldMem[3][name]; ?></h3>
                <p><?php echo $oldMem[3][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>


    </div>

    <div class="row">

         <div class="col-md-3">
            <a href='<?php echo $oldMem[4][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[4][image]; ?>'>
            </a>
            <div id="mem13" class="collapse">
                <h3><?php echo $oldMem[4][name]; ?></h3>
                <p><?php echo $oldMem[4][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

         <div class="col-md-3">
            <a href='<?php echo $oldMem[5][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[5][image]; ?>'>
            </a>
            <div id="mem14" class="collapse">
                <h3><?php echo $oldMem[5][name]; ?></h3>
                <p><?php echo $oldMem[5][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>

         <div class="col-md-3">
            <a href='<?php echo $oldMem[6][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[6][image]; ?>'>
            </a>
            <div id="mem15" class="collapse">
                <h3><?php echo $oldMem[6][name]; ?></h3>
                <p><?php echo $oldMem[6][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
            </div>
        </div>
         <div class="col-md-3">
            <a href='<?php echo $oldMem[7][lin]; ?>' data-toggle="collapse">
                <img class="img-responsive img-circle person" src='<?php echo $oldMem[7][image]; ?>'>
            </a>
            <div id="mem16" class="collapse">
                <h3><?php echo $oldMem[7][name]; ?></h3>
                <p><?php echo $oldMem[7][post]; ?></p>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:30px"></i>
                </a>
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

addCss('css/styleFM1.css');
</script>



</body>


</html>




