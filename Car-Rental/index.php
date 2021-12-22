
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 490px;
  }
  body{
	  /* background-color:#d3d3d3; */
	  background-image: linear-gradient(to bottom right, white,#d3d3d3 );
	    }
		.hoverr:hover{
			box-shadow:1px 3px 5px black;
			transform:scale(1,1.06);
		}
		.fixed{height:60px;
		width:60px;
		position:fixed;
		top:38%;
		right:0px;
		z-index:999;
		border-radius:32px}

		.fixed2{height:60px;
			width:60px;
		position:fixed;
		top:52%;
		right:0px;
		z-index:999;
		border-radius:32px}
		
		.fixed3{height:60px;
			width:60px;
		position:fixed;
		top:65%;
		right:0px;
		z-index:999;
		border-radius:32px}
  </style>
</head>
<body>
<div><a href="http://facebook.com/"><img src="t_500x300.jpg" alt="face" class="fixed"></a></div>
<div><a href="https://www.instagram.com/"><img src="instagram.jpg" alt="insta" class="fixed2"></a></div>
<div><a href="https://youtube.com/"><img src="you.jpg" alt="insta" class="fixed3">      </a> </div>
	<section class="">
		<?php
			include 'header.php';
		?>

<br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="7.jpg" alt="Los Angeles" width="1100" height="80px">
    </div>
    <div class="carousel-item">
      <img src="8.jpg" alt="Chicago" width="1100" height="80px">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="New York" width="1100" height="80px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<br>

			<section class="caption">
				<h2 class="caption" style="text-align: center"><u> Find You Dream Cars For Hire</u></h2>
				<h3 class="properties" style="text-align: center"><u>Range Rovers - Mercedes Benz - Landcruisers</u></h3>
			</section>
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li style="border:2px solid white" class="hoverr">
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="100%" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
						<hr style="background-color:black;">
					</div>
				</li>
				
			<?php
		
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="aboutus.php">About Us</a></li>
						
					
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</li>

			

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php"; ?>