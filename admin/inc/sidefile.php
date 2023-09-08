

<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index.php">
							<h3 class="text-white m-0">Admin Panel</h3>
<!-- 						<img src="assets/img/brand" class="header-brand-img" alt="admin">
 -->					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-navicon"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
						</ul>
                        <div class=" form-inline mr-auto horizontal" id="headerMenuCollapse">
							<div class="d-none d-lg-block">
								<ul class="nav">
									
									
								</ul>
						    </div>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					    
						
						
						<li class="dropdown dropdown-list-toggle">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand"  id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
							<img src="../assets/img/developer/faizan.jpeg" alt="profile-user" class="rounded-circle w-32">
							<div class="d-sm-none d-lg-inline-block"><?php echo $value['name']; ?></div></a>
								
							<div class="dropdown-menu dropdown-menu-right">
								
								
								<a href="logout.php" class="dropdown-item has-icon">
									<i class="ion-ios-redo"></i> Logout
								</a>
							</div>
						</li>
					</ul>
	</nav>

				<aside class="app-sidebar">
					<div class="app-sidebar__user">
					    <div class="dropdown">
							<a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
								<img alt="image" src="../assets/img/developer/faizan.jpeg" class=" avatar-md rounded-circle">
								<span class="ml-2 d-lg-block">
									<span class="text-dark app-sidebar__user-name mt-5"><?php echo $value['name']; ?></span><br>
									<span class="text-muted app-sidebar__user-name text-sm"><?php echo $value['designation']; ?></span>
								</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
					
							<li>
							<a class="side-menu__item" href="dashboard.php"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span></a>
						   </li>
						   
						<li>
							<a class="side-menu__item" href="driver.php"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">Drivers</span></a>
							<a class="side-menu__item" href="cars.php"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">Cars</span></a>
							<a class="side-menu__item" href="compition.php"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">Compition</span></a>
							<a class="side-menu__item" href="contact.php"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">Contact</span></a>
							<!-- <a class="side-menu__item" href="accident.php"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">Accident</span></a> -->
						   </li>
						<li>
							<a class="side-menu__item" href="logout.php"><i class="side-menu__icon fe fe-server"></i><span class="side-menu__label">Logout</span></a>
						   </li>
						
						
					</ul>
				</aside> 