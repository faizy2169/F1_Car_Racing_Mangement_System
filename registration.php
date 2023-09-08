<?php include "inc/programming.php" ?>
<?php 
if (isset($_POST['reg_succ'])) {
	$file_name=$_FILES['file_name']['name'];
	$file_tmp_name=$_FILES['file_name']['tmp_name'];
	$file=time()."_".$file_name;
	move_uploaded_file($file_tmp_name, "upload/partner/$file");
	$dd=array(
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'file_name' => $file,
		'password' => $_POST['password']
	);
	$ins=$fun->insert_data("partner",$dd);
	if ($ins) {
		header("Location: registration.php");
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
							<h1>Registration</h1>
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
							<h2 class="rn-title">Register New Partner</h2>
							<span class="rn-title-bg">New Partner Account</span>
						</div>

					</div>
				</div>
				<div class="row mb-30">
					<div class="col-md-6 col-md-offset-3">

						<form action="" method="post" enctype="multipart/form-data">
							<label for="">Name</label>
							<input type="text" name="name" class="form-control" placeholder="Name" required="">
							<label for="">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email" required="">
							<label for="">Photo</label>
							<input type="file" class="form-control" name="file_name" required="">
							<label for="">Password</label>
							<input type="password" name="password" class="form-control" required="" placeholder="Password">
							<br>
							<input type="submit" name="reg_succ" class="btn btn-info" value="Register New">
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