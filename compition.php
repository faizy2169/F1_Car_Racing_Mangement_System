<?php include "inc/programming.php" ?>
<?php 
include "inc/session_secure.php";
if (isset($_POST['add_comp'])) {
	$dd=array(
		'partner_id' => $session_value,
		'title' => $_POST['title'],
		'last_date' => $_POST['last_date'],
		'winner_price' => $_POST['winner_price'],
		'compition_date' => $_POST['compition_date']
	);
	$ins=$fun->insert_data("compition",$dd);
	if ($ins) {
		header("Location: compition.php");
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
							<h1>Compition</h1>
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
							<h2 class="rn-title">Add Compition</h2>
							<span class="rn-title-bg">New Compition</span>
						</div>

					</div>
				</div>
				<div class="row mb-30">
					<div class="col-md-6 col-md-offset-3">

						<form action="" method="post" enctype="multipart/form-data">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control" placeholder="Title" required="">
							<label for="">Apply Last Date</label>
							<input type="date" name="last_date" class="form-control"  required="">
							<label for="">Winner Price</label>
							<input type="number" class="form-control" name="winner_price" required="">
							<label for="">Competition Date</label>
							<input type="date" name="compition_date" class="form-control" required="" >
							<br>
							<input type="submit" name="add_comp" class="btn btn-info" value=" New Compition">
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