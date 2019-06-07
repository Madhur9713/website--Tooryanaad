<?php
    define("TITLE", "Register | Tooryanaad 2019");
    include('includes/header.php');
    
    
?>
<!--header php -->


<div class="container containerReg text-center">
    <h1>पंजीयन</h1>
    <br>
    <hr>


    <form>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="नाम" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                <input type="text" class="form-control" name="college" placeholder="महाविद्यालय" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="अणुडाक" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" name="phone" pattern="[0-9]{10}" class="form-control" placeholder="संपर्क सूत्र (मोबाइल नंबर)" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">पंजीयन करें</button>
    </form>
    <br>
    <hr>

</div>
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

addCss('css/styleReg1.css');
$('.main-nav').addClass('navbar-fixed-top');
</script>



</body>


</html>
