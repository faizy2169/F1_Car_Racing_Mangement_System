<?php 
include "inc/programming.php";
	if (isset($_GET['del'])) {
		$cc_del=array(
			'id' => $_GET['del']
		);
		$del=$fun->delete_data("partner",$cc_del);
		if ($del) {
			header("Location: dashboard.php");
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<?php include "inc/css_file.php" ?>
	</head>

	<body class="app ">

<!-- 		<div id="spinner"></div>
 -->
		<div id="app">
			<div class="main-wrapper" >
				<?php include "inc/sidefile.php" ?>

				<div class="app-content">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a hrefdas="dashboard.php" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                        </ol>

						<?php include "inc/content.php" ?>

						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>All Company List</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
										<table id="example" class="table table-striped table-bordered border-t0 w-100">
											<thead>
												<tr>
													<th class="wd-15p">Company name</th>
													<th class="wd-15p">Username</th>
													<th class="wd-20p">Email</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$i=1;
												$part=$fun->fetch_data("partner");
												 ?>
												 <?php foreach ($part as $part_val): ?>
												 	<tr>
												 		<th><?php echo $i++; ?></th>
												 		<th><?php echo $part_val['name'] ?></th>
												 		<th><?php echo $part_val['email'] ?></th>
												 		<th><img src="../upload/partner/<?php echo $part_val['file_name'] ?>" style="width: 100px; height: 100px; border-radius: 10px;" alt=""></th>
												 		<th><a href="?del=<?php echo $part_val['id']; ?>" class="btn btn-danger">Delete</a></th>
												 	</tr>
												 <?php endforeach ?>
												
											</tbody>
										</table>
									</div>
									</div>
								</div>
							</div>
						</div>
                    </section>
				</div>


				<?php include "inc/footer.php" ?>

			</div>
		</div>

      <?php include "inc/js_file.php"; ?>


	</body>
</html>