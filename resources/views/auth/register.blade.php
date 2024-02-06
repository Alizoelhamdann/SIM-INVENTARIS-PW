<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>SIM Inventarsi - Login</title>
		<meta name="description" content="" />
		<meta name="keywords" content="SIM Inevenaris,Wikrama" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<link rel="shortcut icon" href="{{asset('assets/img/th.jfif')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-cover bgi-attachment-fixed" style="background-image: url({{asset('assets/img/Gedung.jpg')}})">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form class="form w-100" action="{{route('auth.store')}}" method="POST">
                            @csrf
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">
                                    <a href="{{ route('auth.login')}}" class="mb-12">
                                        <img alt="Logo" src="{{asset('assets/img/th.jfif')}}" class="h-150px" />
                                    </a>
                                </h1>
								<div class="text-gray-400 fw-bold fs-4">SIM INVENTARIS
								<a href="{{route('auth.login')}}" class="link-primary fw-bolder">SMK Wikrama Bogor</a></div>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Name</label>
								<input class="form-control form-control-lg bg-transparant" placeholder="Masukan" type="text" name="name" autocomplete="off" />
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<input class="form-control form-control-lg bg-transparant" placeholder="Masukan" type="email" name="email" autocomplete="off" />
							</div>
							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<a href="{{ route('auth.reset')}}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
								</div>
								<input class="form-control form-control-lg bg-transparant" placeholder="Masukan" type="password" name="password" autocomplete="off" />
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Masuk</span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--end::Main-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>