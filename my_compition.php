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
					<div class="col-md-12">

						<table class="table table-hover">
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Last Date</th>
								<th>Winner Price</th>
								<th>Compition Date</th>
							</tr>
							<?php 
							$i=1;
							$cnon=array('partner_id' => $session_value);
							$fet=$fun->select_data("compition",$cnon);
							 ?>
							 <?php foreach ($fet as $val): ?>
							 	<tr>
							 		<th><?php echo $i++; ?></th>
							 		<th><a href="driver.php?c_id=<?php echo $val['id']; ?>"><?php echo $val['title'] ?></a></th>
							 		<th><?php echo $val['last_date'] ?></th>
							 		<th><?php echo $val['winner_price'] ?></th>
							 		<th><?php echo $val['compition_date'] ?></th>
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