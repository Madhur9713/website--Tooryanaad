<?php
    define("TITLE", "Contest | Tooryanaad Contest");
    include('includes/header.php');
    
    
?>
<!--header php -->

<br><br><br><br><br><br><br><br><br><br><br><br>

	<div class="container">
		<div class="page-header text-center">
			<h2 class="he2"> प्रतियोगिता </h2>
        </div>
		<div class="row">
			<div class="col-sm-4 col-12 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[0][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[0][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[1][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[1][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[2][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[2][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[3][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[3][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[4][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[4][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[5][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[5][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[6][image];?>' style="background:cover;">
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[6][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[7][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[7][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[8][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[8][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[9][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[9][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[10][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[10][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col">
				<div class="thumbnail section">
					<a href='<?php echo "BharatManthan.php"; ?>'>
						<img src='<?php echo $slidItems[11][image]; ?>'>
						<div class="caption text-center">
							<b><span class="compName"><?php echo $slidItems[11][title]; ?></span></b>
						</div>
					</a>
				</div>
			</div>
		</div>
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

    addCss('css/styleSh.css');

</script>



</body>


</html>
