<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/bootstrap/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/font-awesome/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/linearicons/style.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/chartist/css/chartist-custom.css'?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/css/main.css'?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/backend/img/apple-icon.png'?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url().'assets/backend/img/favicon.png'?>">
	<link href="<?php echo base_url().'assets/backend/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css'?>" rel="stylesheet">
	<script src="<?php echo base_url().'assets/backend/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js'?>"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="">
					<img src="<?php echo base_url().'assets/logo2.png'?>" alt="Klorofil Logo" class="img-responsive logo">			
				</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search in dasboard">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<!-- <div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div> -->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger"></span>
							</a>
							<ul class="dropdown-menu notifications">					
								<!-- <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Contoh Notifikasi 1</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Contoh Notifikasi 2</a></li>
								<li><a href="#" class="more">All Notification</a></li> -->
								<li><a href="#" class="more">Nothing Notification</a></li>
							</ul>
						</li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li> -->
						<li>
							<a target="_blank" href="<?php echo base_url()?>">Show Blog</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url().'assets/backend/img/user.png'?>" class="img-circle" alt="Avatar"> <span><?php echo $this->session->userdata('name');?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profil</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Massage</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Setting</span></a></li>
								<li><a href="<?php echo site_url('backend/login/logout');?>"><i class="lnr lnr-exit"></i> <span>Log Out</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo site_url('dashboard');?>" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-tag"></i> <span>Additional</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('backend/category');?>" class="">Category</a></li>
									<li><a href="<?php echo site_url('backend/tag');?>" class="">Tag</a></li>
								</ul>
							</div> 
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-book"></i> <span>Article</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('backend/article');?>" class="">New Article</a></li>
									<li><a href="<?php echo site_url('backend/article/listing');?>" class="">List Article</a></li>
								</ul>
							</div>
						</li>
						<li><a href="#" class=""><i class="lnr lnr-inbox"></i> <span>Inbox</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-bubble"></i> <span>Comment</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-users"></i> <span>Subscriber</span></a></li>
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Setting</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('backend/article');?>" class="">Website</a></li>
									<li><a href="<?php echo site_url('backend/article/listing');?>" class="">Information</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<?php if (isset($isi)) echo $isi; else echo"";?>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019 <a href="https://www.themeineed.com" target="_blank">DAZELPRO</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo base_url().'assets/backend/vendor/jquery/jquery.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/backend/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/backend/vendor/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/backend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/backend/scripts/klorofil-common.js'?>"></script>

</body>

</html>
<style>
  ::-webkit-scrollbar {
    width: 3px;
    height: 3px;
  } 
  ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);     
    background: white;
  } 
  ::-webkit-scrollbar-thumb {
    background: #35A9DB;
  }
</style>