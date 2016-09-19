<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang = "en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style>
			#top_words
			{
			    font-family: 'Chicle', cursive;
				font-size:100px;
				color:white;
			}
			.special_words
			{
				color:white;
			    font-family: 'Chicle', cursive;
				font-size:50px;
			}
			#pageWrapper
			{
				height:100%;
			}
			body
			{
				background-image: url("assets/pictures/background.jpg");
				background-size: 100% 100%;
				background-repeat: no-repeat;
				height: 100%;
			}
			#right_panel 
			{
				background-image: url("assets/pictures/contactinfo.jpg");
				background-size: 100% 100%;
				background-repeat: no-repeat;
				width:50%;
				height:73%;
				border:solid;
				position:absolute;
				left:50%;
			}
			#left_panel
			{
				float:left;
				width:50%;
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
		<!--- ========================================== DIV ======================================== -->
		<div id=pageWrapper>
			<div id="top">
				<center>
					<h1 id="top_words"> LEAL'S PARTY RENTALS </h1>
					<h2 class="special_words" style="font-size:60px;color:black"> Rentals for all Occasions </h2>
				</center>
			</div>
			<!-- ====================================== LEFT SIDE ======================================= -->
			<div id="left_panel" >
				<div class="container" style="width:101%">
					<ul class="nav nav-tabs">
				    	<li class="active"><a data-toggle="tab" href="#home" class="special_words">Truck</a></li>
				    	<li><a data-toggle="tab" href="#menu1" class="special_words">Jumpers</a></li>
				    	<li><a data-toggle="tab" href="#menu2"class="special_words">Rockolas</a></li>
				    	<li><a data-toggle="tab" href="#menu3"class="special_words">Tables</a></li>
				  	</ul>
				
				  	<div class="tab-content">
						<!-- ----------------- ONE TAB ---------------------------------------------------------------- -->
				    	<div id="home" class="tab-pane fade in active">
							<!-- ====================================== CAROUSEL ======================================== -->
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
							  	<ol class="carousel-indicators">
								<?php
									$fi = new FilesystemIterator('assets/pictures/slideshow/Truck', FilesystemIterator::SKIP_DOTS);
									for ($x = 0; $x < iterator_count($fi); $x++)
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
									$images = scandir("assets/pictures/slideshow/Truck");
									for($x = 2; $x < count($images); $x++) 
									{
										if ($x ==2 )
										{
										?>
											<div class="item active">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Truck/").$images[$x] ?>" alt="picture" width="528" height="628">
												</center>
											</div>
										<?php
										}
										else
										{
										?>
											<div class="item">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Truck/").$images[$x] ?>" alt="picture" width="528" height="628">
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
						<!-- ---------------------------- SECOND TAB ------------------------------------------------------------ -->
				    	<div id="menu1" class="tab-pane fade">
							<!-- ====================================== CAROUSEL ======================================== -->
							<div id="myCarousel1" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
							  	<ol class="carousel-indicators">
								<?php
									$fi = new FilesystemIterator('assets/pictures/slideshow/Jumpers', FilesystemIterator::SKIP_DOTS);
									for ($x = 0; $x < iterator_count($fi); $x++)
									{
										if ($x == 0)
										{
										?>
											<li data-target="#myCarousel1" data-slide-to="<?php echo $x ?>" class="active"> </li>
											<?php
										}
										else
										{
										?>
											<li data-target="#myCarousel1" data-slide-to="<?php echo $x ?>"> </li>
											<?php
										}
									}
								?>
							  	</ol>
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
								<?php
									$images = scandir("assets/pictures/slideshow/Jumpers");
									for($x = 2; $x < count($images); $x++) 
									{
										if ($x ==2 )
										{
										?>
											<div class="item active">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Jumpers/").$images[$x] ?>" alt="picture" width="528" height="628">
												</center>
											</div>
										<?php
										}
										else
										{
										?>
											<div class="item">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Jumpers/").$images[$x] ?>" alt="picture" width="528" height="628">
												</center>
											</div>
									<?php
										}
									}
								?>
								</div>
					  			<!-- Left and right controls -->
					  			<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
					  				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  			 	<span class="sr-only">Previous</span>
					  			</a>
					  			<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
					  				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  			 	<span class="sr-only">Next</span>
					  			</a>
							</div>
							<!-- ====================================== END CAROUSEL ======================================== -->
						</div>
						<!-- ---------------------------- THIRD TAB ------------------------------------------------------------ -->
				    	<div id="menu2" class="tab-pane fade">
							<!-- ====================================== CAROUSEL ======================================== -->
							<div id="myCarousel2" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
							  	<ol class="carousel-indicators">
								<?php
									$fi = new FilesystemIterator('assets/pictures/slideshow/Rockolas', FilesystemIterator::SKIP_DOTS);
									for ($x = 0; $x < iterator_count($fi); $x++)
									{
										if ($x == 0)
										{
										?>
											<li data-target="#myCarousel2" data-slide-to="<?php echo $x ?>" class="active"> </li>
											<?php
										}
										else
										{
										?>
											<li data-target="#myCarousel2" data-slide-to="<?php echo $x ?>"> </li>
											<?php
										}
									}
								?>
							  	</ol>
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
								<?php
									$images = scandir("assets/pictures/slideshow/Rockolas");
									for($x = 2; $x < count($images); $x++) 
									{
										if ($x ==2 )
										{
										?>
											<div class="item active">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Rockolas/").$images[$x] ?>" alt="picture" width="528" height="628">
												</center>
											</div>
										<?php
										}
										else
										{
										?>
											<div class="item">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Rockolas/").$images[$x] ?>" alt="picture" width="528" height="628">
												</center>
											</div>
									<?php
										}
									}
								?>
								</div>
					  			<!-- Left and right controls -->
					  			<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
					  				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  			 	<span class="sr-only">Previous</span>
					  			</a>
					  			<a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
					  				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  			 	<span class="sr-only">Next</span>
					  			</a>
							</div>
							<!-- ====================================== END CAROUSEL ======================================== -->
						</div>
						<!-- ---------------------------- FOURTH TAB ------------------------------------------------------------ -->
				    	<div id="menu3" class="tab-pane fade">
							<!-- ====================================== CAROUSEL ======================================== -->
							<div id="myCarousel3" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
							  	<ol class="carousel-indicators">
								<?php
									$fi = new FilesystemIterator('assets/pictures/slideshow/Tables', FilesystemIterator::SKIP_DOTS);
									for ($x = 0; $x < iterator_count($fi); $x++)
									{
										if ($x == 0)
										{
										?>
											<li data-target="#myCarousel3" data-slide-to="<?php echo $x ?>" class="active"> </li>
											<?php
										}
										else
										{
										?>
											<li data-target="#myCarousel3" data-slide-to="<?php echo $x ?>"> </li>
											<?php
										}
									}
								?>
							  	</ol>
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
								<?php
									$images = scandir("assets/pictures/slideshow/Tables");
									for($x = 2; $x < count($images); $x++) 
									{
										if ($x ==2 )
										{
										?>
											<div class="item active">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Tables/").$images[$x] ?>" alt="picture" width="528" height="628">
												</center>
											</div>
										<?php
										}
										else
										{
										?>
											<div class="item">
												<center>
													<img src="<?php echo base_url("assets/pictures/slideshow/Tables/").$images[$x] ?>" alt="picture" width="528" height="628">
												</center>
											</div>
									<?php
										}
									}
								?>
								</div>
					  			<!-- Left and right controls -->
					  			<a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
					  				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  			 	<span class="sr-only">Previous</span>
					  			</a>
					  			<a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
					  				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  			 	<span class="sr-only">Next</span>
					  			</a>
							</div>
							<!-- ====================================== END CAROUSEL ======================================== -->
						</div>
				  	</div>
				</div>	
			</div>
			<!-- ====================================== END LEFT SIDE ========================================== -->
			
			<!-- ====================================== RIGHT SIDE ======================================== -->
			<div id="right_panel" >
				<div style="position:relative; top:10%;">
				<center>
					<h2 class="special_words" style="color:blue">CONTACT INFORMATION </h2>
				</center>
				</div>

				<div style="position:relative; top:10%";>

				<center>
				<table>
					<tr class="special_words" style="color:black">
						<th align="center" style="font-size:100px;">
								Mauro Leal
						</th>
					</tr>
					<tr>
						<td  align="center" class="special_words" style="color:black; font-size:60px;"> 
							(760)899-3599
						</td>
					</tr>
				</table>
				</center>

				</div>
			</div>
			<!-- ====================================== END RIGHT SIDE ======================================== -->
		</div>
	</body>
</html>
