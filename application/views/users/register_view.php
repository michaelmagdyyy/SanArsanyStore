<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
	


</head>
<body>
<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="<?php echo base_url();?>/assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign up</h4>
                        
                    <form action="<?php echo site_url('Users/insert_user');?>" method="post">
						<div class="form-group mb-3">
							<label class="floating-label" for="full_name">Full Name</label>
							<input name="full_name" type="text" class="form-control" id="full_name" placeholder="Full Name" required>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="e_mail">Email address</label>
							<input type="email" name="e_mail" class="form-control" id="e_mail" placeholder="E-mail" required>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="user_name">User Name</label>
							<input name="user_name" type="text" class="form-control" id="user_name" placeholder="User Name" required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input name="password" type="password" class="form-control" id="Password" placeholder="Password" required>
						</div>
                        
                        
						<button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                            
                            
                            
                            
                        </form>
						<p class="mb-2">Already have an account? <a href="<?php echo site_url('Users/login')?>" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="<?php echo base_url();?>/assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/ripple.js"></script>
<script src="<?php echo base_url();?>/assets/js/pcoded.min.js"></script>
</body>
</html>