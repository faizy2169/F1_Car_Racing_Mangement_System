<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Our Partners</h2>
							<span class="rn-title-bg">Our Partners</span>
						</div>

					</div>
				</div>
				<div class="row rn-partner-logos">
					<?php 
					$par=$fun->fetch_data("partner");
					 ?>
					 <?php foreach ($par as $par_va): ?>
					 	<div class="col-md-3 col-6">
							<div class="rn-partner-logo">
								<img class="img-fluid" src="upload/partner/<?php echo $par_va['file_name']; ?>" alt="partner" srcset="upload/partner/<?php echo $par_va['file_name']; ?>">
							</div>
						</div>
					 <?php endforeach ?>
					
				</div>
			</div>