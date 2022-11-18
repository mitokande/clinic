<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hasta olarak Kayıt Ol</title>
    @livewireStyles
    <!-- Favicons-->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
@php
    $fields = \App\Models\MedicineField::all();
    $titles = \App\Models\DoctorTitle::all();
@endphp
<x-home.header></x-home.header>

<!-- /Header -->

<main>
    <div id="hero_register">
        <div class="container margin_120_95">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Seni bulma zamanı!</h1>
                    <p class="lead">Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                    <div class="box_feat_2">
                        <i class="pe-7s-map-2"></i>
                        <h3>Bırakın hastalar sizi bulsun!</h3>
                        <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                    </div>
                    <div class="box_feat_2">
                        <i class="pe-7s-date"></i>
                        <h3>Rezervasyonları kolayca yönetin</h3>
                        <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                    </div>
                    <div class="box_feat_2">
                        <i class="pe-7s-phone"></i>
                        <h3>Mobil üzerinden anında</h3>
                        <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                    </div>
                </div>
                <!-- /col -->
                <div class="col-lg-5 ml-auto">
                <form method="post" action="{{ route('patient.register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="box_form">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Adınız</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Your first name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Soyadınız</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Your last name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your email address">
                                </div>
                                <div class="form-group">
                                    <label>Şifre</label>
                                    <input type="password" class="form-control" id="password1" name="password" placeholder="Your password">
                                </div>
                                <div class="form-group">
                                    <label>Şifrenizi Onaylayın</label>
                                    <input type="password" class="form-control" id="password2" name="password_confirmation" placeholder="Confirm password">
                                </div>
                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="number" class="form-control"  name="telephone" placeholder="Telephone Number">
                                </div>
                                <div class="form-group">
                                    <label>Profil Resmi</label>
                                    <input type="file" required class="form-control"  name="profile_picture" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    <img style="width: 100%;" id="pic" />

                                </div>
                                <div id="pass-info" class="clearfix"></div>
                                <div class="checkbox-holder text-left">
                                    <div class="checkbox_2">
                                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
                                        <label for="check_2"><span>Şartlar ve Koşulları Kabul Ediyorum</strong></span></label>
                                    </div>
                                </div>
                                <div class="form-group text-center add_top_30">
                                    <input class="btn_1" type="submit" value="Kayıt Ol">
                                </div>
                            </div>
                            <a href="/patient/login" style="display: block; color: white;" class="text-center">Hesabınız var mı? Hasta girişi yapın!</a>
                    <!-- /box_form -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /hero_register -->
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
