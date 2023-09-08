<div class="row">
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-primary text-white">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-pie-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Total Company</span>
														<?php 
														$par_c=$fun->row_count("partner");
														 ?>
														<h2 class="text-white mb-0"><?php echo $par_c; ?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-cyan text-white ">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-people-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Total Driver</span>
														<?php 
														$log_c=$fun->row_count("login");
														 ?>
														<h2 class="text-white mb-0"><?php echo $log_c ?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-warning text-white">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-people-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Total Car</span>
														<?php 
														$car_c=$fun->row_count("apply_compition");
														 ?>
														<h2 class="text-white mb-0"><?php echo $car_c; ?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-3 col-md-6 col-12">
									<div class="card bg-success text-white">
										<div class="card-body">
											<div class="row">
												<div class="col-6">
													<div class="icon1 text-center">
														<i class="ion-ios-people-outline"></i>
													</div>
												</div>
												<div class="col-6">
													<div class="mt-3 text-center">
														<span class="text-white">Toal Compition</span>
														<?php 
														$com_c=$fun->row_count("compition");
														 ?>
														<h2 class="text-white mb-0"><?php echo $com_c; ?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>