<?php 
include "inc/programming.php";
if (isset($_GET['del'])){
           $data=array(
            'id' => $_GET['del']
    			);
           
   $del=$fun->delete_data("contact",$data);
  
   if($del){
       header("location:contact.php");
   }
}

 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "inc/css_file.php" ?>
	</head>

	<body class="app ">

 		<div id="spinner"></div>
 
		<div id="app">
			<div class="main-wrapper" >
				<?php include "inc/sidefile.php" ?>

				<div class="app-content">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Message </li>
                        </ol>

						<?php include "inc/content.php" ?>

						
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4>View Message</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
										<table  class="table table-striped table-bordered border-t0 w-100">
											<thead>
												<tr>
													<th class="wd-15p">No</th>
													<th class="wd-15p">Name</th>
													<th class="wd-15p">Email</th>
													<th class="wd-15p">Message</th>
													<th  class="wd-20p">Update</th>
												</tr>
											</thead>
											<tbody>
												<?php
								                    $no=1;
								                    $result=$fun->fetch_data("contact");
								                    foreach ($result as $value) {
								                        ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $value['name']; ?></td>
													<td><?php echo $value['email']; ?></td>
													<td><?php echo $value['msg']; ?></td>
													<td><a href="?del=<?php echo $value['id'] ?> " class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td>
													
												</tr>
												<?php 
													}
												 ?>
												
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