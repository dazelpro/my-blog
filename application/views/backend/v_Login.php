<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>DAZELPRO | Administrator</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/font-awesome/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/vendor/linearicons/style.css'?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/backend/css/main.css'?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/backend/img/apple-icon.png'?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url().'assets/backend/img/favicon.png'?>">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo base_url().'assets/logo.png'?>" style="width:70%" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
								<?php echo $this->session->flashdata('msg');?>
							<form class="form-auth-small" action="<?php echo site_url('backend/login/auth');?>" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="signin-email" name="email" placeholder="Your Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="password" id="signin-password" placeholder="Your Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading"><b>Welcome,</b></h1>
							<p>People can be clever as high as the sky, but as long as they don't write, they will disappear in society and from history. Writing is work for eternity.</p>
                            <p><strong>-Pramoedya Ananta Toer-</strong></p><hr>
                            <p>Copyright © 2019 All Rights Reserved | <a href="https://www.dazelpro.com" class="linkfoo" target="_blank">www.dazelpro.com</a></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
<script src="<?php echo base_url().'assets/backend/vendor/jquery/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/backend/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/backend/vendor/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/backend/scripts/klorofil-common.js'?>"></script>
<style type="text/css">
    .auth-box .right {
        background: url(<?php echo base_url().'assets/backend/img/login-bg.jpg' ?>);
    }
    .linkfoo{
        color: white;
    }
    .linkfoo:hover{
        color: grey;
    }
</style>