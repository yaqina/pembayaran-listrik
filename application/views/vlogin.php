<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>UKK</title>
<link rel="icon" href="<?=base_url();?>assets/images/listrik.jpg" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?=base_url();?>/assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?=base_url();?>assets/css/font.css" type="text/css"/>
<link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
	 
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<br>
				<?php
                $announce = $this->session->flashdata('announce');
                if(!empty($announce)){
                  echo '
                  
                  <div class="alert alert-warning">
                    '.$announce.' 
                   </div>
                  ';
                }
              ?>
				<form action="<?=base_url();?>login/dologin" method="post">

					<input type="text" name="uname" placeholder="Masukkan Username" required="required">
					<input type="password" name="pass" placeholder="Masukkan Password" required="required">
					<input type="hidden" class="form-control" value="active" name="status" placeholder="Password" />
					<input type="submit" class="register" value="Login" name="login">
					
				</form>
				
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2018 UKK . All Rights Reserved . Design by <a href="http://w3layouts.com/">AKU</a></p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="<?=base_url();?>assets/js/proton.js"></script>
</body>
</html>
