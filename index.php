<?php include 'api/functions/static-globals.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="Organizr - Accept no others" name="description">
	<meta content="CauseFX" name="author">
	<link href="plugins/images/favicon.png" rel="icon" sizes="16x16" type="image/png">
	<title>Organizr v2</title>
	<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
	<link href="plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
	<link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<link href="plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css" rel="stylesheet">
	<link href="plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
	<link href="plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
	<link href="plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
	<link href="css/style.css?v=<?php echo $GLOBALS['installedVersion']; ?>" rel="stylesheet">
	<link href="css/colors/blue-dark.css?v=<?php echo $GLOBALS['installedVersion']; ?>" id="theme" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="fix-header">
	<!-- ============================================================== -->
	<!-- Preloader -->
	<!-- ============================================================== -->
	<div id="preloader" class="preloader">
		<svg class="circular" viewbox="25 25 50 50">
			<circle class="path" cx="50" cy="50" fill="none" r="20" stroke-miterlimit="10" stroke-width="5"></circle>
		</svg>
	</div>
	<!-- ============================================================== -->
	<!-- Wrapper -->
	<!-- ============================================================== -->
	<div id="wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<nav class="navbar navbar-default navbar-static-top m-b-0">
			<div class="navbar-header">
				<div class="top-left-part hidden-xs">
					<!-- Logo -->
					 <a class="logo" href="#"><!-- Logo text image you can use text also -->
						 <span class="hidden-xs"><!--This is dark logo text-->
							<img alt="home" class="dark-logo" height="60px" src="https://sonflix.com/images/newsonflixlogo.png"> <!--This is light logo text-->
						 </span>
					 </a>
				</div><!-- /Logo -->
				<!-- Search input and Toggle icon -->
				<ul class="nav navbar-top-links navbar-left">
					<li><a class="open-close waves-effect waves-light visible-xs" href="javascript:void(0)"><i class="ti-close ti-menu fa-fw"></i></a></li>
					<li class=""><a class="dropdown-toggle waves-effect waves-light" onclick="reloadCurrentTab();"> <i class="fa fa-refresh fa-fw"></i></a></li>
					<li class=""><a class="dropdown-toggle waves-effect waves-light" onclick="closeCurrentTab();"> <i class="mdi mdi-close fa-fw"></i></a></li>
				</ul>
				<ul class="nav navbar-top-links navbar-right pull-right"></ul>
			</div><!-- /.navbar-header -->
			<!-- /.navbar-top-links -->
			<!-- /.navbar-static-side -->
		</nav><!-- End Top Navigation -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav slimscrollsidebar">
				<div class="sidebar-head">
					<h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span>
					<span class="hide-menu hidden-xs" lang="en">Navigation</span>
					<span class="hide-menu hidden-sm hidden-md hidden-lg"><!--This is dark logo text-->
							<img alt="home" height="35px" src="https://sonflix.com/images/newsonflixlogo.png"> <!--This is light logo text-->
						 </span>
					</h3>
				</div>
				<ul class="nav" id="side-menu"></ul>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Left Sidebar -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page Content -->
		<!-- ============================================================== -->
		<div class="login-area hidden"></div>
		<div class="p-0" id="page-wrapper">
			<div class="organizr-area"></div>
			<div class="internal-listing p-0 hidden"></div>
			<div class="iFrame-listing p-0 hidden"></div>
		</div>
		<!-- ============================================================== -->
		<!-- End Page Content -->
		<!-- ============================================================== -->
	</div><!-- /#wrapper -->
	<!-- jQuery -->
	<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.js"></script>
	<script src="js/jquery.slimscroll.js"></script>
	<script src="js/waves.js"></script>
	<script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
	<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
	<script src="plugins/bower_components/moment/moment.js"></script>
	<script src="plugins/bower_components/moment/moment-timezone.js"></script>
	<script src="plugins/bower_components/jquery-wizard-master/dist/jquery-wizard.min.js"></script>
	<script src="plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.js"></script>
	<script src="plugins/bower_components/jquery-wizard-master/libs/formvalidation/bootstrap.min.js"></script>
	<script src="js/bowser.min.js"></script>
	<script src="js/jasny-bootstrap.js"></script>
	<script src="js/cbpFWTabs.js"></script>
	<script src="js/js.cookie.js"></script>
	<script src="js/jquery-lang.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.serializeToJSON.js"></script>
	<script src="plugins/bower_components/blockUI/jquery.blockUI.js"></script>
	<script src="plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
	<script src="plugins\bower_components\datatables-plugins\sorting\datetime-moment.js"></script>
	<script src="plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
	<script src="plugins/bower_components/sweetalert/sweetalert.min.js"></script>
	<script src="plugins/bower_components/switchery/dist/switchery.min.js"></script>
	<script src="js/functions.js?v=<?php echo $GLOBALS['installedVersion']; ?>"></script>
	<script src="js/custom.js?v=<?php echo $GLOBALS['installedVersion']; ?>"></script>
</body>
</html>