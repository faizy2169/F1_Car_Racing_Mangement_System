<div class="carousel-inner">

				<!-- Slider Item 1-->
				<?php 
				$sli_c=array('status' => 1);
				$sel=$fun->select_data("slider",$sli_c);
				 ?>
				 <?php foreach ($sel as $sel_va): ?>
				 	<div class="carousel-item beactive">
						<div class="carousel-caption">
							<h2 class="rn-fade-bottom mb-25">Welcome to F1 Racing<!--<?php echo $sel_va['title'] ?>--></h2>
							<p class="rn-fade-bottom rn-caption-item-2 mb-35"><!--<?php echo $sel_va['detail'] ?>-->Championship</p>
						</div>
						<div class="rn-slider-overlayer"></div>
						<img class="d-block w-100" src="assets/images/slide1.jpg" alt="slide">
					</div>
				 <?php endforeach ?>


			</div>
			<!-- Slider Controls -->
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="lnr lnr-chevron-left" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="lnr lnr-chevron-right" aria-hidden="true"></span>
			</a>