<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Booking Management System | About Us :: Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>

</head>
<body>
		<!--header-->
			<div class="header head-top">
				<div class="container">
	<?php include_once('includes/header.php');?>
		</div>
</div>
<!--header-->
		<div class="content">
			<div class="about-section">
			<div class="container">
				<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
<br>
                <p><h2> You can have world class experience and we offer some best food and services as we value your money.<h2><p>
				<br>
				<h2>Facilities</h2>
				<img src="images/2.png" class="img-responsive" alt="/">
				<br>
				<div>
				<p> <h3>These are few facilities provided in our hotel and there few more such as 24 by 7 Wifi, food and bevarages and laundry and hoping you enjoy them.</h3></p>
				<?php $cnt=$cnt+1;}} ?>
			</div>
		</div>
			</div>			
					<?php include_once('includes/footer.php');?>
</body>
</html>
