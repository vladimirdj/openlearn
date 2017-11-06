<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Messages - OpenLearn</title>

<?php

	ini_set ('log_errors', 'on'); //Logging errors

	session_start();

	require_once '../../config.php';

	if(isset($_SESSION['inst_id'])) {

		$inst_id = $_SESSION['inst_id'];

		$getinfo = "SELECT `name`, `id`, `email`, `picture` from `instructor` where `id`='{$_SESSION['inst_id']}'";
		$query = mysqli_query($link, $getinfo);
		$row = mysqli_fetch_assoc($query);

		$inst_name = $row['name'];
		$inst_email = $row['email'];
		$inst_picture = $row['picture'];

		//Getting instructor's first name (accessible as zeroth index)
		$get_name = explode(' ',trim($inst_name));
		$inst_first_name = $get_name[0];
	}
	else
	{
		//Redirect the instructor to login page if he/she is not logged in.
		echo "
			<script type='text/javascript'>
				window.location.href = '../../login.php';
			</script>
		";
	}
?>

<link rel="shortcut icon" href="../../favicon.png" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="../admin_dashboard.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i>Course Management<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="../create-course.php"><i class="fa fa-plus nav_icon"></i>&nbsp;Add Course</a>
								</li>
								<li>
									<a href="../course-manangement.php"><i class="fa fa-pencil nav_icon"></i>Manage Exisiting Courses</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						
						<li>
							<a href="widgets.html"><i class="fa fa-question-circle nav_icon"></i>Help &amp; Support</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo" style="background-color: white;">
					<a href="../../index.php">
						<h1><font color="black">OPEN</font><font color="blue">LEARN</font></h1>
						<span><font color="black">Admin Panel</font></span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><?php echo "<img src='../../profile_pictures/".basename($inst_picture)."' class='img-circle img-responsive text-center' style='height: 50px; width: 50px; margin: auto;' alt='No image'>"; ?></span> 
									<div class="user-name">
										<p><?php echo $inst_name; ?></p>
										<span>Instructor</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<?php echo "<li><a href='../../profile.php?inst_id=$inst_id'><i class='fa fa-user'></i> Profile</a> </li>"; 
								echo "<li><a href='../../logout.php'><i class='fa fa-sign-out'></i> Logout</a> </li>"; 
								?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">Inbox</h3>
				<div class="inbox-page" style="width: 900px; margin:auto;">
					
					<div class='inbox-row widget-shadow' id='accordion' role='tablist' aria-multiselectable='true'>
						<div class='mail'> <input type='checkbox' class='checkbox'> </div>
						<div class="mail"><img src="images/user24.png" alt=""/></div>
						<div class="mail mail-name"> <h6>Janiya Marudffdfh dfYera</h6> </div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<div class="mail"><p>Enquiry Regarding Course</p></div>
						</a>
						
						<div class="mail-right"><p>30 Dec</p></div>
						<div class="clearfix"> </div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="mail-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
								<form>
									<input type="text" placeholder="Reply to sender" required="">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
					</div>

					
				
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2017, OpenLearn, Inc. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>