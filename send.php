<?php include "inc/programming.php" ?>
<?php 
if (isset($_POST['send_aap'])) {
	$file_name=$_FILES['file_name']['name'];
	$file_tmp_name=$_FILES['file_name']['tmp_name'];
	$rand=time();
	$file=$rand."_".$file_name;
	move_uploaded_file($file_tmp_name, "upload/cars/$file");
	
	$dd=array(
		'compition_id' => $_GET['c_id'],
		'track_id' => $rand,
		'car_img' => $file,
		'car_no' => $_POST['car_no']
	);
	$sen=array(
		'name' => $_POST['name'],
		'mobile' => $_POST['mobile'],
		'age' => $_POST['age'],
		'city' => $_POST['city'],
		'address' => $_POST['address'],
		'track_id' => $rand
	);
	$ins=$fun->insert_data("apply_compition",$dd);
	$ins1=$fun->insert_data("login",$sen);
	if ($ins1) {
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
							<h1>Participant</h1>
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
							<h2 class="rn-title">Participant</h2>
							<span class="rn-title-bg">New Participant</span>
						</div>

					</div>
				</div>
				<div class="row mb-30">
					<div class="col-md-6 col-md-offset-3">

						<form action="" method="post" enctype="multipart/form-data">
							<label for="">Car No</label>
							<input type="text" name="car_no" class="form-control" required="">
							<label for="">Car Picture</label>
							<input type="file" name="file_name" class="form-control" required="">
							<label for="">Driver Name</label>
							<input type="text" name="name" class="form-control" required="">
							<label for="">City</label>
							<input type="text" name="city" class="form-control" required="">
							<label for="">Mobile</label>
							<input type="text" name="mobile" class="form-control" required="">
							<label for="">Age</label>
							<input type="number" name="age" class="form-control" required="">
							<label for="">Address</label>
							<textarea name="address" id="" cols="30" rows="2" class="form-control"></textarea>
							<br>
							<input type="submit" name="send_aap" class="btn btn-info" value="Send New">
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