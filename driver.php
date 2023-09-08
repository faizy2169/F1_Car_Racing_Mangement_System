<?php include "inc/programming.php" ?>
<?php 
include "inc/session_secure.php";

 ?>
<!DOCTYPE html>
<html lang="en">
	<?php include "inc/css_file.php" ?>
	<body class="rn-preloadr">
		<?php include "inc/navigation.php" ?>
		<div class="rn-page-title">
			<div class="rn-pt-overlayer"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-page-title-inner">
							<h1>participant</h1>
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
							<h2 class="rn-title">participant</h2>
							<span class="rn-title-bg">participant For this Compition</span>
						</div>

					</div>
				</div>
				<div class="row mb-30">
					<div class="col-md-12">

						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Car Picture</th>
								<th>Car No</th>
								<th>Driver Name</th>
								<th>City</th>
								<th>Mobile</th>
								<th>Age</th>
							</tr>
							<?php 
							$i=1;
							$cnon=array('compition_id' => $_GET['c_id']);
							$fet=$fun->select_data("apply_compition",$cnon);
							 ?>
							 <?php foreach ($fet as $val): ?>
							 	<?php 
							 	$tdri=array('track_id' => $val['track_id']);
							 	$dri=$fun->one_value("login",$tdri);
							 	 ?>
							 	<tr>
							 		<th><?php echo $i++; ?></th>
							 		<th><img src="upload/cars/<?php echo $val['car_img'] ?>" style="width: 100px; height: 100px; border-radius: 2px;" alt=""></th>
							 		<th><?php echo $val['car_no'] ?></th>
							 		<th><?php echo $dri['name'] ?></th>
							 		<th><?php echo $dri['city'] ?></th>
							 		<th><?php echo $dri['mobile'] ?></th>
							 		<th><?php echo $dri['age'] ?></th>
							 	</tr>
							 <?php endforeach ?>
						</table>

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