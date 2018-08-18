<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>UKK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=base_url();?>assets/images/listrik.jpg">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- sweetsalert-css -->
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
<!-- //sweetsalert-css -->
<!-- Custom CSS -->
<link href="<?=base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->

<!-- font-awesome icons -->
<link rel="stylesheet" href="<?=base_url();?>assets/css/font.css" type="text/css"/>
<link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?=base_url();?>assets/js/jquery2.0.3.min.js"></script>
<script src="<?=base_url();?>assets/js/modernizr.js"></script>
<script src="<?=base_url();?>assets/js/jquery.cookie.js"></script>
<script src="<?=base_url();?>assets/js/screenfull.js"></script>	

		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/basictable.css" />
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.basictable.min.js"></script>
<!-- charts -->
<script src="<?=base_url();?>assets/js/raphael-min.js"></script>
<script src="<?=base_url();?>assets/js/morris.js"></script>
<link rel="stylesheet" href="<?=base_url();?>assets/css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="<?=base_url();?>assets/js/skycons.js"></script>
<!--//skycons-icons-->
<style type="text/css">
	.oioi
	{
		background-image: url(<?=base_url();?>assets/images/g6.jpg);
		background-repeat: no-repeat;
		background-size: 100%;
	}
</style>
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="<?=base_url();?>home/index">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					
				<i class="fa fa-money nav_icon" ></i>
					
				<span class="nav-text">
				Tarif
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="<?=base_url();?>tarif/index">View</a>
					</li>
					<li>
						<a class="subnav-text" href="<?=base_url();?>tarif/add">Add Data</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-users nav_icon" aria-hidden="true"></i>
				<span class="nav-text">
					Pelanggan
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="<?=base_url();?>pelanggan/index">
					View
					</a>
					</li>
					<li>
					<a href="<?=base_url();?>pelanggan/add" class="subnav-text">
					Add Data
					</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-bar-chart nav_icon"></i>
				<span class="nav-text">
				Tagihan
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="<?=base_url();?>tagihan/index">View</a>
					</li>
					<li>
						<a class="subnav-text" href="<?=base_url();?>tagihan/add">Add Data</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Pembayaran
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="<?=base_url();?>pembayaran/index">View</a>
					</li>
					
				</ul>
			</li>
			
			
		</ul>
		<ul class="logout">
			<li>
			<a href="<?=base_url();?>login/logout">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><img src="<?=base_url();?>assets/images/logo.png" alt="" />UKK</h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						
								
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<b>Hallo !</b> <?php echo $this->session->userdata('class'); ?>
									<?php if($this->session->userdata('class')=='admin' or $this->session->userdata('class')=='admin1'): ?>
									<li> <a href="<?=base_url();?>admin/index"><i class="fa fa-cog"></i> Settings</a> </li> 
								<?php endif?>
									<li> <a href="<?php echo site_url('admin/profile/'.$this->session->userdata('id')); ?>"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="<?=base_url();?>login/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			 <?php
                $announce = $this->session->flashdata('announce');
                if(!empty($announce)){
                  echo '
                    <div class="alert alert-info">

                    '.$announce.' 
                    </div>
                  ';
                }
              ?>

			
				 <?php $this->load->view($main_view); ?>
				
			
		</div>
		<!-- footer -->
		
		<!-- //footer -->
	</section>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/lsb.css">
	<script src="<?=base_url();?>assets/js/lsb.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?=base_url();?>assets/js/proton.js"></script>
</body>
</html>
