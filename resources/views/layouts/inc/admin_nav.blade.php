<style>
	.logged-in {
		color: green;
	}

	.logged-out {
		color: red;
	}
</style>

<div class="container-scroller">
	<!-- partial:partials/_horizontal-navbar.html -->
	<div class="horizontal-menu">
		<nav class="navbar top-navbar col-lg-12 col-12 p-0">
			<div class="container">
				<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
					<a class="navbar-brand brand-logo" href="index.html">
						<!-- <img src="https://www.bootstrapdash.com/demo/plus-staging/template/assets/images/logo.svg" alt="logo" /> -->
						<img src="https://static.vecteezy.com/system/resources/thumbnails/000/565/396/small/07022019-15.jpg" alt="x">
						<span class="font-12 d-block font-weight-light">Admin Dashboard </span>
					</a>
					<a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://www.bootstrapdash.com/demo/plus-staging/template/assets/images/logo-mini.svg" alt="logo" /></a>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
					<ul class="navbar-nav mr-lg-2">
						<li class="nav-item nav-search d-none d-lg-block">
							<div class="input-group">
								<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
									<span class="input-group-text" id="search">
										<i class="mdi mdi-magnify"></i>
									</span>
								</div>
								<input type="text" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search">
							</div>
						</li>
					</ul>
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item nav-profile dropdown">
							<a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
								<div class="nav-profile-img">
									<img src="../../assets/images/dashboard/hospital/Doc_3.jpg" alt="image">
								</div>
								<div class="nav-profile-text">
									<p class="text-black font-weight-semibold m-0">Dr. Nwoye</p>
									<span class="logged-in">●</span>
									<span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
									<!-- <span class="logged-out">●</span> -->
								</div>
							</a>
							<div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
								<a class="dropdown-item" href="#">
									<i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">
									<i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</div>
		</nav>
		<nav class="bottom-navbar">
			<div class="container">
				<ul class="nav page-navigation">
					<li class="nav-item">
						<a class="nav-link" href="{{route('index')}}">
							<i class="mdi mdi-compass-outline menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="mdi mdi-stethoscope menu-icon"></i>
							<span class="menu-title">Doctor</span>
							<i class="menu-arrow"></i></a>
						<div class="submenu">
							<ul class="submenu-item">
								<li class="nav-item"><a class="nav-link" href="#">Add Doctor</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Doctor List</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="mdi mdi-monitor-dashboard menu-icon"></i>
							<span class="menu-title">Patient</span>
							<i class="menu-arrow"></i></a>
						<div class="submenu">
							<ul class="submenu-item">
								<li class="nav-item"><a class="nav-link" href="#">Add Patient</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Patient List</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="mdi mdi-clipboard-text menu-icon"></i>
							<span class="menu-title">Department</span>
							<i class="menu-arrow"></i></a>
						<div class="submenu">
							<ul class="submenu-item">
								<li class="nav-item"><a class="nav-link" href="#">gynaecology</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Cardiology</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Orthopedic</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Pediatric</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="mdi mdi-chart-bar menu-icon"></i>
							<span class="menu-title">Schedule</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="mdi mdi-content-copy menu-icon"></i>
							<span class="menu-title">Appointment</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="mdi mdi-webpack menu-icon"></i>
							<span class="menu-title">Report</span>
							<i class="menu-arrow"></i></a>
						<div class="submenu">
							<ul class="submenu-item">
								<li class="nav-item"><a class="nav-link" href="#">Patient wise Report</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Doctor wise Report</a></li>
								<li class="nav-item"><a class="nav-link" href="#">Total Report</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<div class=" nav-link d-flex">
							<button class="btn btn-sm bg-danger text-white">Online Booking</button>
							<div class="nav-item dropdown">
								<a class="nav-link count-indicator dropdown-toggle text-white font-weight-semibold" id="notificationDropdown" href="#" data-toggle="dropdown"> English </a>
								<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
									<a class="dropdown-item" href="#">
										<i class="flag-icon flag-icon-bl mr-3"></i> French </a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">
										<i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">
										<i class="flag-icon flag-icon-de mr-3"></i> German </a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">
										<i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
								</div>
							</div>
							<a class="text-white" href="{{route('index')}}"><i class="mdi mdi-home-circle"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>