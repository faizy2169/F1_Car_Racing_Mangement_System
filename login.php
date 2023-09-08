<?php include "inc/programming.php" ?>
<?php 
if (isset($_POST['login_btn'])) {
	$dd=array(
		'email' => $_POST['email'],
		'password' => $_POST['password']
	);
	$num=$fun->row_count_con("partner",$dd);
	if ($num > 0) {
	$one=$fun->one_value("partner",$dd);

		$_SESSION['partner_login']=$one['id'];
		header("Location: index.php");
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<?php include "inc/css_file.php" ?>
	<body class="rn-preloader">
		<?php include "inc/navigation.php" ?>
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>Login </h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title-->

		<!-- Our Vission-->
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Login</h2>
							<span class="rn-title-bg">Account Login</span>
						</div>

					</div>
				</div>
				<div class="row mb-30">
					<div class="col-md-6 col-md-offset-3">

						<form action="" method="post">
							<label for="">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email" required="">
							<label for="">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password" required="">
							<br>
							<input type="submit" name="login_btn" value="Login" class="btn btn-info">
						</form>

					</div>
				</div>
			</div>
		</section>
		<!-- End Our Vission-->

		


		<!-- Our Partners-->
		<section class="rn-section">
			<?php include "inc/partner.php" ?>
		</section>
		<!-- End Our Partners-->

		<?php include "inc/footer.php" ?>

		<?php include "inc/js_file.php" ?>
	</body>
</html>