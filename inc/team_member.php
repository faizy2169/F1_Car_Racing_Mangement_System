
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

						<!-- Section Title-->
						<div class="rn-section-title   ">
							<h2 class="rn-title">Our Team</h2>
							<span class="rn-title-bg">Our Team</span>
						</div>

					</div>
				</div>
				<div class="row">
					<?php $team=$fun->fetch_data("team_member");  ?>
					 <?php foreach ($team as $team_val): ?>
					 	<div class="col-md-4">

						<!-- Team Member-->
						<div class="rn-team-member">
							<div class="rn-team-member-img">
								<div class="rn-overlayer"></div>
								<img class="img-fluid" src="assets/images/team-member-1.jpg" alt="Team member" srcset="assets/images/team-member-1.jpg 1x, assets/images/team-member-1@2x.jpg 2x"/>
							</div>
							<div class="rn-team-member-info">
								<div class="rn-team-member-name"><?php echo $team_val['name'] ?></div>
								<div class="rn-team-member-designation"><?php echo $team_val['position'] ?></div>
								
							</div>
						</div>
						<!-- End Team Member-->

					</div>
					 <?php endforeach ?>
					
				</div>
			</div>
