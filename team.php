<?php
    define("TITLE", "Team | Tooryanaad Team");
    include('includes/header.php');
    
?>
<!--header php -->


<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container text-center">
    <h1>कार्यकारिणी समिति</h1>
    <br><br>
    <div class="row">
        
        <?php 
        for($i=0;$i<6;$i++)
            include('includes/row.php');
        ?>

    </div>

    <br><br>
    
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
