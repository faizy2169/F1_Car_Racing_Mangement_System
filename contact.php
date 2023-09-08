<?php include "inc/programming.php" ?>
<?php 
if (isset($_POST['send_mess'])) {
	$dd=array(
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'msg' => $_POST['mes']
	);
	$ins=$fun->insert_data("contact",$dd);
	if ($ins) {
		header("Location: contact.php");
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
							<h1>Contact Us</h1>
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
							<h2 class="rn-title">Contact Us</h2>
							<span class="rn-title-bg">Contact Us</span>
						</div>

					</div>
				</div>
				<div class="row mb-30">
					<div class="col-md-6 col-md-offset-3">

						<form action="" method="post">
							<label for="">Name</label>
							<input type="text" name="name" class="form-control" placeholder="Name" required="">
							<label for="">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Email" required="">
							<label for="">Message</label>
							<textarea name="mes" id="" cols="30" rows="2" class="form-control" required=""></textarea>
							<br>
							<input type="submit" name="send_mess" value="Send Message" class="btn btn-info">
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