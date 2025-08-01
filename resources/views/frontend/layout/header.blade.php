<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ahmad Collection</title>
	<link rel="icon" href="{{ asset('frontend/img/d8ff10cd-fa61-425f-9cd9-553548395382.png') }}" type="image/x-icon">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

	<!-- ✅ Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

	<!-- ✅ Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

	<!-- ✅ Custom Ready CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/ready.css') }}">

	<!-- ✅ Demo CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/demo.css') }}">


	<style>

	</style>

</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="#" class="logo">
					Ahmad Collection
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">

					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						{{-- <li class="nav-item dropdown hidden-caret">--}}
						{{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
						{{-- <i class="la la-envelope"></i>--}}
						{{-- </a>--}}
						{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
						{{-- <a class="dropdown-item" href="#">Action</a>--}}
						{{-- <a class="dropdown-item" href="#">Another action</a>--}}
						{{-- <div class="dropdown-divider"></div>--}}
						{{-- <a class="dropdown-item" href="#">Something else here</a>--}}
						{{-- </div>--}}
						{{-- </li>--}}
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span>
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span>
											</div>
										</a>
										<a href="#">
											<div class="notif-img">
												<img src="{{ asset('frontend/img/profile2.jpg') }}" alt="Img Profile">

											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span>
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span>
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{ asset('frontend/img/profile2.jpg') }}" alt="user-img" width="36" class="img-circle"><span>{{ Auth::user()->name }}</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="{{ asset('frontend/img/profile2.jpg') }}" alt="user"></div>
										<div class="u-text">
											<h4>{{ Auth::user()->name }}</h4>
											<p class="text-muted">{{ Auth::user()->email }}</p><a href="{{route('profile.edit')}}" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								<button class="d-flex align-items-center" style="color: red; border: none; padding: 10px 20px; background: none; font-size: 16px;">
									<i class="la la-sign-out mr-2"></i>
									<form method="POST" action="{{ route('logout') }}" class="mb-0">
										@csrf

										<x-dropdown-link style="padding-left: 0px !important;" class="text-danger p-0 px-0 " :href="route('logout')"
											onclick="event.preventDefault();
                                                this.closest('form').submit();">
											{{ __('Log out') }}
										</x-dropdown-link>
									</form>
								</button>
							</ul>
							<!-- /.dropdown-user -->
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar">
			<div class="scrollbar-inner sidebar-wrapper">

				<ul class="nav">
					<li class="nav-item {{ request()->is('frontend/dashboard') ? 'active' : '' }}">
						<a href="{{ url('frontend/dashboard') }}">
							<i class="la la-dashboard"></i>
							<p>Dashboard</p>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#productDropdown" role="button" aria-expanded="false" aria-controls="productDropdown">
							<span><i class="la la-shopping-cart me-2 "></i> Product</span>
							<i class="la la-angle-down" style="font-size: 18px;"></i>
						</a>

						<div class="collapse ps-3 {{ request()->is('frontend/products*') ? 'show' : '' }}" id="productDropdown">
							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link {{ request()->is('frontend/products') ? 'active' : '' }}" href="{{ url('frontend/products') }}">
										<i class="la la-edit me-2"></i>
										Create Product
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link {{ request()->routeIs('products.listing') ? 'active' : '' }}" href="{{ route('products.listing') }}">
										<i class="la la-list-alt me-2"></i>
										Product Listing
									</a>
								</li>
							</ul>
						</div>
					</li>



					<li class="nav-item">
						<a data-bs-toggle="collapse" href="#blogDropdown" role="button" aria-expanded="false" aria-controls="blogDropdown">
							<i class="la la-shopping-cart"></i>
							<p>Blogs</p>
							<i class="la la-angle-down" style="font-size: 18px;margin-left: 86px;"></i>
						</a>
						<div class="collapse" id="blogDropdown">
							<ul class="nav flex-column ms-3">
								<li class="nav-item">
									<a class="nav-link" href="{{ route('posts.create') }}"><i class="la la-edit me-2"></i> Create Blog</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('posts.index') }}"><i class="la la-list-alt me-2"></i>
										Blogs listing</a>
								</li>
							</ul>
						</div>
					</li>




					<div class="position-absolute d-flex align-items-center" style="bottom: 15%; padding: 0 15px;">
						<button class="d-flex align-items-center" style="color: red; border: none; padding: 10px 20px; background: none; font-size: 16px;">
							<i class="la la-sign-out mr-2"></i>
							<form method="POST" action="{{ route('logout') }}" class="mb-0">
								@csrf

								<x-dropdown-link style="padding-left: 0px !important;" class="text-danger p-0 px-0" :href="route('logout')"
									onclick="event.preventDefault();
                                                this.closest('form').submit();">
									{{ __('Log out') }}
								</x-dropdown-link>
							</form>
						</button>
					</div>

				</ul>
			</div>
		</div>
		<!-- ✅ Bootstrap JS (v5) -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>