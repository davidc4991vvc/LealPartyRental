<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang = "en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style>
			#top_words
			{
				/*color:white;*/
			    font-family: 'Chicle', cursive;
				font-size:100px;
			}
			body
			{
				background-image: url("assets/pictures/background.jpg");
				background-size: 100% 100%;
				background-repeat: no-repeat;
				height: 100%;
			}

		</style>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<link href="<?php echo base_url('assets/css/bootstrap-theme.css');?>" rel="stylesheet" media="screen" />
		<link href="<?php echo base_url('assets/css/bootstrap-theme.min.css');?>" rel="stylesheet" media="screen" />
		<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" media="screen" />
		<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" media="screen" />
		<script src="<?php echo base_url('assets/js/bootstrap.js');?>" type="text/javascript" > </script> 
		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" type="text/javascript" > </script> 
		<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet"> 
		<meta charset="utf-8">
		<title> Leal's Party Rentals</title>
	</head>

	<body>
		<div id="top">
			<center>
				<h1 id="top_words"> LEAL'S PARTY RENTALS </h1>
			</center>
		</div>
		<!--- ========================================== DIV ======================================== -->
		<div id=pageWrapper>

			<!-- ====================================== LEFT SIDE ======================================= -->
			<div id="left_panel" style="float:left;border:solid;width:50%">
				<!-- ====================================== CAROUSEL ======================================== -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<?php
						$fi = new FilesystemIterator('assets/pictures', FilesystemIterator::SKIP_DOTS);
						for ($x = 0; $x <= iterator_count($fi); $x++)
						{
							if ($x == 0)
							{
							?>
								<li data-target="#myCarousel" data-slide-to="<?php echo $x ?>" class="active"> </li>
								<?php
							}
							else
							{
							?>
								<li data-target="#myCarousel" data-slide-to="<?php echo $x ?>"> </li>
								<?php
							}
							}
						?>
				  </ol>
				<!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<?php
						$images = scandir("assets/pictures/slideshow/");
						
						for($x = 2; $x < count($images); $x++) {
							if ($x ==2 )
							{
							?>
								<div class="item active">
									<center>
										<img src="<?php echo base_url("assets/pictures/slideshow/").$images[$x] ?>" alt="picture" width="528" height="628">
								</center>
							</div>
							<?php
							}
							
							else
							{
							?>
							<div class="item">
								<center>
									<img src="<?php echo base_url("assets/pictures/slideshow/").$images[$x] ?>" alt="picture" width="528" height="628">
								</center>
							</div>
						<?php
							}
						}
					?>
					</div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				<!-- ====================================== END CAROUSEL ======================================== -->
			</div>
			<!-- ====================================== END LEFT SIDE ========================================== -->
			
			<!-- ====================================== RIGHT SIDE ======================================== -->
			<div id="right_column" style="float:right;border:solid;width:50%">
				<h2> CONTACT INFORMATION </h2>
			</div>
			<!-- ====================================== END RIGHT SIDE ======================================== -->
			

	</body>
</html>
