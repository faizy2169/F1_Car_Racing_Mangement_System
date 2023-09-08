<?php include "inc/programming.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php
include "inc/css_file.php";

?>
	<body class="rn-preloader">
    <?php
    include  "inc/navigation.php"
    ?>

		<div class="rn-carousel carousel slide" id="carouselExampleControls" data-ride="carousel">
			<?php include "inc/slider.php" ?>
		</div>
		<section class="rn-search-form-big rn-section">
			<?php include "inc/search.php" ?>
		</section>
		<section class="rn-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rn-section-title   ">
							<h2 class="rn-title">All Up Comming Compitition</h2>
						</div>

					</div>
				</div>
				<div class="row rn-post-list">
					<?php 
					$comp_co=$fun->fetch_data("compition");
					 ?>
					 <?php foreach ($comp_co as $com_val): ?>
					 	<?php 
					 	$compn_c=array('id' => $com_val['partner_id']);
					 	$compn=$fun->one_value("partner",$compn_c);
					 	 ?>
					 	<div class="col-md-4">
						<div class="rn-post-item rn-post-size-sm">
							<div class="rn-post-item-thumb">
								<a href="#">
									<img class="img-fluid" src="assets/images/blog-item-sm-1.jpg" alt="Expanding Your Home Network’s Reach" srcset="assets/images/blog-item-sm-1.jpg 1x, assets/images/blog-item-sm-1@2x.jpg 2x"/>
								</a>
							</div>
							<div class="rn-post-item-header">
								<div class="rn-post-date">
									<div class="rn-post-date-inner">
										<div class="rn-post-date-d"><?php echo substr($com_val['last_date'], 8,10); ?></div>
										<div class="rn-post-date-m-y"><?php echo substr($com_val['last_date'], 6,8); ?> <br><br> <?php echo substr($com_val['last_date'], 0,4); ?></div>
									</div>
								</div>
								<div class="rn-post-item-title-meta">
									<div class="rn-post-item-title-meta-inner">
										<div class="rn-post-item-meta">
											<span class="rn-post-item-categories">In
												<a href="#">Compitition</a>
											</span>
											<span class="rn-post-item-author">By
												<a href="#"><?php echo $compn['name'] ?></a>
											</span>
										</div>
										<h3 class="rn-post-item-title">
											<a href="send.php?c_id=<?php echo $com_val['id']; ?>"><?php echo $com_val['title'] ?></a>
										</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <?php endforeach ?>
					
				</div>
			</div>
		</section>
		<section class="rn-section">
			<?php include "inc/team_member.php" ?>
		</section>
    <?php include "inc/footer.php";  ?>
    <?php include "inc/js_file.php";  ?>
	</body>
</html>