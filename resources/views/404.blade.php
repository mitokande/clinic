<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <x-home.header></x-home.header>
    <main>
    <div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<h2>404 <i class="icon_error-triangle_alt"></i></h2>
						<p>We're sorry, but the page you were looking for doesn't exist.</p>
						<form>
							<div class="search_bar_error">
								<input type="text" class="form-control" placeholder="What are you looking for?">
								<input type="submit" value="Search">
							</div>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
    </main>

    <x-home.footer></x-home.footer>

    <!-- COMMON SCRIPTS -->
    <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{URL::asset('js/common_scripts.min.js')}}"></script>
    <script src="{{URL::asset('js/functions.js')}}"></script>
    <!-- Modernizr -->
    <script src="{{URL::asset('js/modernizr.js')}}"></script>
</body>
</html>
