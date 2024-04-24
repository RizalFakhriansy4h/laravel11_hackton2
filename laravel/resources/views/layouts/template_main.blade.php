<!doctype html>
<html lang="zxx">
	<head>
		<!--=== Required meta tags ===-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--=== CSS Link ===--> 
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="/assets/css/remixicon.css">
		<link rel="stylesheet" href="/assets/css/font-awesome-pro.css">
		<link rel="stylesheet" href="/assets/css/metisMenu.min.css">
		<link rel="stylesheet" href="/assets/css/simplebar.min.css">
		<link rel="stylesheet" href="/assets/css/prism.css">
		<link rel="stylesheet" href="/assets/css/jquery.dataTables.css">
		<link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
		<link rel="stylesheet" href="/assets/css/sweetalert2.min.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		
		<!--=== Favicon ===-->
		<link rel="icon" type="image/ico" href="/assets/images/tbni.ico">
		<!--=== Title ===-->
		<title>{{$title}}</title>
		
		<!-- timeee -->
		<style>
			.timer-container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 10vh;
			font-size: 32px;
			font-weight: bold;
			}
			.event-info {
			text-align: center;
			margin-bottom: 20px;
			}
			.btn-soldout {
			background-color: #cdb400;
			color: white;
			}
		</style>
	</head>
	<body>
		<!--=== Start Sidebar Menu Area ===-->
		<div class="sidebar-menu-area" id="metismenu" data-simplebar>
			<div class="d-flex justify-content-between align-items-center border-bottom border-color bg-white position-sticky top-0 z-1 main-logo-wrap">
				<a href="{{ route('home') }}" class="main-logo d-flex align-items-center text-decoration-none">
				<img class="logo" src="/assets/images/logo2.png" alt="logo">
				<span class="ms-3 logo-text">tbni</span>
				</a>
				<div class="responsive-burger-menu d-block d-xl-none">
					<span class="top-bar"></span>
					<span class="middle-bar"></span>
					<span class="bottom-bar"></span>
				</div>
			</div>
			<ul class="sidebar-menu o-sortable">
				<li><span class="cat">HOME</span></li>
				<li>
					<a href="{{ route('home') }}" class="menu-title" aria-expanded="true">
					<span class="icon"><i data-feather="globe"></i></span>
					<span class="title">Homepage</span>
					</a>
				</li>
				<li class="{{ $title == 'Dashboard' || $title == 'Edit Profile' || $title == 'Change Password' ? 'mm-active' : ''}}">
					<a class="has-arrow menu-title" aria-expanded="true" style="cursor:pointer;">
					<span class="icon"><i data-feather="home"></i></span>
					<span class="title">Dashboard</span>
					</a>
					<ul class="sidemenu-second-level">
						<li><a href="{{ route('dashboard') }}" class="{{ $title == 'Dashboard' ? 'active' : '' }}">Home</a></li>
						<li><a href="{{ route('editProfile') }}" class="{{ $title == 'Edit Profile' ? 'active' : '' }}">Edit Profile</a></li>
						<li><a href="{{ route('changePass') }}" class="{{ $title == 'Change Password' ? 'active' : '' }}">Change Password</a></li>
					</ul>
				</li>
				@if($role == 1)
				<li><span class="cat">APPS</span></li>
				<li class="{{ $title == 'Members' ? 'mm-active' : ''}}">
					<a href="{{ route('members') }}" class="menu-title">
					<span class="icon"><i data-feather="user"></i></span>
					<span class="title">Members</span>
					</a>

				</li>
                <li class="{{ $title == 'All Events' || $title == 'All Speakers' || $title == 'cscs' ? 'mm-active' : ''}}">
                    <a class="has-arrow menu-title" aria-expanded="true" style="cursor:pointer;">
                        <span class="icon"><i data-feather="calendar"></i></span>
                        <span class="title">Events</span>
                    </a>
                    <ul class="sidemenu-second-level">
                        <li><a href="{{ route('events') }}" class="{{ $title == 'All Events' ? 'active' : '' }}">Events</a></li>
                        <li><a href="{{ route('speakers') }}" class="{{ $title == 'All Speakers' ? 'active' : '' }}">Speakers</a></li>
                    </ul>
                </li>
				@endif
			</ul>
		</div>
		<!--=== End Sidebar Menu Area ===-->
		<!--=== Start Main Content Area ===-->
		<div class="main-content-area">
			<div class="container-fluid">
				<!--=== Start Header Area ===-->
				<header class="header-area bg-white mb-24">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<div class="header-left-content">
								<ul class="list-unstyled ps-0 mb-0 d-flex justify-content-center justify-content-lg-start justify-content-md-start align-items-center">
									<li>
										<div class="burger-menu d-none d-lg-block">
											<span class="top-bar"></span>
											<span class="middle-bar"></span>
											<span class="bottom-bar"></span>
										</div>
										<div class="responsive-burger-menu d-block d-lg-none">
											<span class="top-bar"></span>
											<span class="middle-bar"></span>
											<span class="bottom-bar"></span>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="header-right-content float-lg-end float-md-end">
								<ul class="list-unstyled ps-0 mb-0 d-flex justify-content-center justify-content-lg-end justify-content-md-end align-items-center">
									<li class="ms-lg-4 ms-md-4 ms-2">
										<div class="dropdown mail">
											<button class="btn btn-secondary fullscreen-btn border-0 p-0 position-relative" id="fullscreen-button">
											<span class="maximize">
											<i data-feather="maximize"></i>
											</span>
											<span class="minimize top-50 start-50 translate-middle position-absolute">
											<i data-feather="minimize"></i>
											</span>
											</button>
										</div>
									</li>
									<li class="ms-lg-4 ms-md-4 ms-2">
										<div class="dropdown user-profile">
											<div class="btn border-0 p-0 d-flex align-items-center text-start" data-bs-toggle="dropdown">
												<div class="flex-shrink-0">
													<img class="rounded-circle user" src="{{$photo_profile}}" alt="user">
												</div>
												<div class="flex-grow-1 ms-2 d-none d-xxl-block">
													<h3 class="fs-14 mb-0">{{$name}}</h3>
													<span class="fs-13 text-body">{{ $role == 0 ? 'Member' : 'Admin' }}</span>
												</div>
											</div>
											<ul class="dropdown-menu border-0 rounded box-shadow">
												<li>
													<a class="dropdown-item d-flex align-items-center text-primary bg-primary-transparent" href="{{ route('dashboard') }}">
													<i data-feather="user"></i>
													<span class="ms-2 fs-14">Profile</span>
													</a>
												</li>
												<li>
													<a class="dropdown-item d-flex align-items-center text-body" href="">
													<i data-feather="command"></i>
													<span class="ms-2 fs-14">User Profile</span>
													</a>
												</li>
												<li>
												<li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" style="background-color: #007bff; color: #fff; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">Logout</button>
                                                </form>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</header>
				<!--=== End Header Area ===-->
				<!--=== Start Section Title Area ===-->
				<div class="section-title d-sm-flex justify-content-between align-items-center mb-24 text-center">
					<h4 class="text-dark mb-0">{{$title}}</h4>
				</div>
                @if(session('message'))
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-primary" role="alert">
                                <i data-feather="alert-circle" class="me-2" style="width: 20px;"></i>
                                {{ session('message') }}
                            </div>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

				<!--=== End Section Title Area ===-->
				<!-- YIELDDD -->
                @yield('content')
				<!-- END YIELDD -->
			</div>
			<div class="flex-grow-1"></div>
			<!--=== Start CopyRight Area ===-->
			<div class="footer-area bg-white">
				<div class="footer-content text-center p-4">
					<p>Copyright © <span class="fw-medium text-primary">Hackton Team 10</span></p>
				</div>
			</div>
			<!--=== End CopyRight Area ===-->
		</div>
		<!--=== End Main Content Area ===-->
		<!--=== Start Theme Setting Area ===-->
		<button class="setting-btn position-fixed bottom-0 end-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
		<i data-feather="settings"></i>
		</button>
		<div class="offcanvas offcanvas-end them-setting-content border-0" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
			<div class="offcanvas-header switcher-head">
				<h5 class="offcanvas-title fs-16" id="offcanvasScrollingLabel">Theme System</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<ul class="ps-0 mb-0 list-unstyled option-list">
					<li>
						<h4 class="fs-15 fw-medium">Theme Light And Dark</h4>
						<button class="option-btn dark-light-btn active">
						<span class="dark-themes">Light</span>
						<span class="light-theme">Dark</span>
						</button>
					</li>
					<li>
						<h4 class="fs-15 fw-medium">Header Light And Dark</h4>
						<button class="option-btn header-dark-light-btn active">
						<span class="dark-themes">Light</span>
						<span class="light-theme">Dark</span>
						</button>
					</li>
					<li>
						<h4 class="fs-15 fw-medium">Sidebar Light And Dark</h4>
						<button class="option-btn sidebar-dark-light-btn active">
						<span class="dark-themes">Light</span>
						<span class="light-theme">Dark</span>
						</button>
					</li>
					<li>
						<h4 class="fs-15 fw-medium">Card Style Without Border And Border</h4>
						<button class="option-btn card-style-border-btn active">
						<span class="dark-themes">Without Border</span>
						<span class="light-theme">Border</span>
						</button>
					</li>
				</ul>
			</div>
		</div>
		<!--=== End Theme Setting Area ===-->
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-line"></i>
		</div>
		<!-- End Go Top Area -->
		<!--=== JS Link ===-->
		<script src="/assets/js/jquery.min.js"></script> 
		<script src="/assets/js/bootstrap.bundle.min.js"></script>
		<script src="/assets/js/owl.carousel.min.js"></script>
		<script src="/assets/js/metisMenu.min.js"></script>
		<script src="/assets/js/countdown.min.js"></script>
		<script src="/assets/js/feather.min.js"></script>
		<script src="/assets/js/simplebar.min.js"></script>
		<script src="/assets/js/prism.js"></script>
		<script src="/assets/js/html5sortable.js"></script>
		<script src="/assets/js/members-list.js"></script>
		<script src="/assets/js/jquery-ui.min.js"></script>
		<script src="/assets/js/jquery.dataTables.js"></script>  
		<script src="/assets/js/magnific-popup.min.js"></script>  
		<script src="/assets/js/sweetalert2.all.min.js"></script>  
		<script src="/assets/js/kanban-board.js"></script> 
		<!--=== Apex Charts ===-->
		<script src="/assets/js/apex/apexcharts.js"></script>
		<script src="/assets/js/apex/user-profile-chart.js"></script>
		<script src="/assets/js/custom.js"></script>
	</body>
</html>