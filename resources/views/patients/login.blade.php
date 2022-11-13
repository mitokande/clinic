<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find easily a doctor and book online an appointment">
    <meta name="author" content="Ansonika">
    <title>FINDOCTOR - Find easily a doctor and book online an appointment</title>
    @livewireStyles
    <!-- Favicons-->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<!-- End Preload -->

<x-home.header></x-home.header>
<!-- /Header -->
@php
    $fields = \App\Models\MedicineField::all();
    $titles = \App\Models\DoctorTitle::all();
@endphp
<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login">
					<h1>Please login to Findoctor!</h1>
					<div class="box_form">
                        <form method="POST" action="{{ route('patient-login') }}">
                            @csrf
							
							<div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
							</div>
							<div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
							</div>
							<a href="#0"><small>Forgot password?</small></a>
                            <div class="flex items-center justify-end mt-4">
                    {{--                @if (Route::has('password.request'))--}}
                    {{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
                    {{--                        {{ __('Forgot your password?') }}--}}
                    {{--                    </a>--}}
                    {{--                @endif--}}
                                    
                                    
                                </div>
							<div class="form-group text-center add_top_20">
								<input class="btn_1 medium" type="submit" value="Login">
							</div>
                            
							<div class="divider"><span>Or</span></div>

							<a href="#0" class="social_bt facebook">Login with Facebook</a>
							<a href="#0" class="social_bt google">Login with Google</a>
							<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
						</form>
					</div>
					<p class="text-center link_bright">Do not have an account yet? <a href="{{ route('patient.register') }}"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
	</main>
<!-- /main -->

<x-home.footer></x-home.footer>

<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('js/common_scripts.min.js') }}"></script>
<script src="{{ URL::asset('js/functions.js') }}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ URL::asset('js/pw_strenght.js') }}"></script>
</body>
</html>
