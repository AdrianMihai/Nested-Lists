<!DOCTYPE html>
<html>
	<head>
		<title>Nested Lists Demo</title>

		<!-- META TAGS -->	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- CSS -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

		<!-- Include bootstrap -->
		<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="resources/css/mine.css">

		<!-- JAVASCRIPT -->
		<script type="text/javascript" src="resources/js/jquery/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="resources/js/list_library.js"></script>
		<script type="text/javascript" src="resources/js/over_navbar.js"></script>
	</head>
	<body data-spy="scroll" data-target="#scrollspy" data-offset="62">
		<div class="over-navbar" data-opened="false">
			<div class="close">
				<span class="glyphicon glyphicon-remove"></span>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3">
						<ul class="list-unstyled navbar-list" data-list="nested" data-margin="5">
							<li class="main" data-icon="true">

								<!--List's Header -->
								<div class="list-header">
									<span class="glyphicon glyphicon-triangle-right"></span>
									<span> Upcoming events </span>
								</div>

								<!--Nested List -->
								<ul class="nested-list list-unstyled">
									<div class="sliding-line"></div>
									<li data-toggled="false">
										Meettings
									</li>
									<li data-toggled="false">
										Presentations
									</li>	
									<li data-toggled="false">
										Speeches
									</li>
									<li data-toggled="false">
										Team Building
									</li>	
								</ul>
							</li>
							<li class="main">

								<!--List's Header -->
								<div class="list-header">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span> Shop </span>
								</div>

								<!--Nested List -->
								<ul class="nested-list list-unstyled">
									<div class="sliding-line"></div>
									<li data-toggled="false">
										Clothes
									</li>
									<li data-toggled="false">
										Accessories
									</li>	
									<li data-toggled="false">
										Prints
									</li>	
								</ul>
							</li>
							<li class="main">

								<!--List's Header -->
								<div class="list-header">
									<span class="glyphicon glyphicon-info-sign"></span>
									<span> Informations </span>
								</div>

								<!--Nested List -->
								<ul class="nested-list list-unstyled">
									<div class="sliding-line"></div>
									<li data-toggled="false">
										Management
									</li>
									<li data-toggled="false">
										Our Projects
									</li>	
									<li data-toggled="false">
										Future plans
									</li>
									<li data-toggled="false">
										Contact
									</li>
								</ul>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<!-- HEADER -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" style="float:right; ">
	        			<span class="sr-only">Toggle navigation</span>
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	      			</button>
					<p class="logo">Nested Lists Demo </p>

				</div>
			</div>
		</nav>

		<div class="container-fluid main-container">
			<div class="row" id="section1">
				<nav class="col-xs-0 col-sm-3 col-lg-2" id="scrollspy">
					<ul class="nav nav-pills nav-stacked">
						<li class="active">
							<a href="#section1">
								<span class="glyphicon glyphicon-pushpin"></span>
								Profile</a>
						</li>
				        <li>
				        	<a href="#section2">
				        		<span class="glyphicon glyphicon-pushpin"></span>
				        		Section 2</a>
				        </li>
				        <li>
				        	<a href="#section3">
				        		<span class="glyphicon glyphicon-pushpin"></span>
				        		Section 3</a>
				        </li>
				        <li>
				        	<a href="#"> 
				        		<span class="glyphicon glyphicon-pushpin"></span>
				          		Section 4 
				          	</a>
				          <!--<ul class="dropdown-menu">
				            <li><a href="#section41">Section 4-1</a></li>
				            <li><a href="#section42">Section 4-2</a></li>                     
				          </ul>-->
				        </li>
					</ul>
				</nav>

				<div class="col-sm-8 col-lg-9 col-sm-offset-4 col-lg-offset-3">
					<ul class="list-unstyled profile-info" data-list="nested" data-margin="3">
						<li>

							<!--List's Header -->
							<div class="list-header  media">
								<div class="media-left">
									<img src="resources/img/mihai - logo.jpg" class="img-rounded media-object " style="width:70px">
								</div>

								<div class="media-body">
									<h5 class="media heading"> Profile Name</h5>
									<p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
									 	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</div>
							</div>

							<!--Nested List -->
							<ul class="nested-list list-unstyled">
								<div class="sliding-line"></div>
										<li data-toggled="false">
											<span class="glyphicon glyphicon-user"></span>
											Follow
										</li>
										
									<li data-toggled="false">
										<span class="glyphicon glyphicon-list-alt"></span>
										Active Projects
									</li>
									<li data-toggled="false">
										<span class="glyphicon glyphicon-stats"></span>
										Stats
									</li>
									<li data-toggled="false">
										<span class="glyphicon glyphicon-remove"></span>
										Block
									</li>	
								</ul>
						</li>
					</ul>
					
				</div>
			</div>

			<div class="row" id="section2">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 header-container">
					<div class="header">
						<h4 class="text-center"> List of products </h4>
					</div>	
				</div>
			</div>

			<div class="row" id="section3">

			</div>
		</div>

	</body>
</html>