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
		<title>@yield('title')</title>
	</head>
	<body>
		<!--=== Start Main Content Area ===-->
		<div class="main-content-area ps-0">
			<div class="container">
				<!--=== Start Login Area ===-->
				<div class="login-area">
					<div class="text-center mb-4">
						<a href="{{ route('home') }}">
						<img src="/assets/images/logo-tbni.png" alt="logo">
						</a>
					</div>
					<div class="card rounded-3 border-0 mb-24 mw-560 m-auto">
						<div class="card-body p-30">
							<div class="card-title mb-20 pb-20 border-color text-center">
								<h4 class="mb-0 mb-2 fs-20">@yield('title')</h4>
							</div>
							@yield('content')
						</div>
					</div>
				</div>
				<!--=== End Login Area ===-->
			</div>
		</div>
		<!--=== End Main Content Area ===-->
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
		<script src="/assets/js/custom.js"></script>
	</body>
</html>