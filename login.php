<?php
include"connect.php";
?>


<!DOCTYPE html>
<html lang="en">
	

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		<title><?php echo $row['site_name']; ?></title>
		<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Donuts Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<?php }?>
<!-- Meta tags -->
		<!-- font-awesome icons -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<!-- //font-awesome icons -->
		<!-- //88987 function -->
		<!--stylesheets-->
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' media="all">
			<!--//style sheet end here-->
			<link href="http://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
				
				</head>
				
<body>
<img src="../images/kisii.jpg">
						<div class="swm-right-w3ls">
							<form action="login2.php" method="post">
								<div class=" header-side">
									
									
								</div>
								<div class="main">
									<div class="icon-head">
										<h2>Login Here</h2>
									</div>
									<div class="form-left-w3l">
										<input type="text" name="username" placeholder="Username" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-w3ls ">
											<input type="password" name="pass" placeholder="Password" required="">
												<div class="clear"></div>
											</div>
											<div class="btnn">
												<button type="submit" name="login">Login</button>
												<br>
												
												</div>
											</div>
										</form>
									</div>
                                 </div>
								<div class="copy">
								<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
									<p>&copy;2021 <?php echo $row['site_name']; ?> | Brought To You By
										<a href="https://www.code-projects.org" target="_blank">Ambrose Otundo</a>
									</p>
	<?php } ?>
								</div>
							</body>
						
</html>