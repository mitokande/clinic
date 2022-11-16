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
        <div id="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Hakkımızda</a></li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- /breadcrumb -->

        <div class="bg_color_1">
            <div class="container margin_120_95">
                <div class="main_title">
                    <h1>Hakkımızda</h1>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <figure class="add_bottom_30">
                            <img src="/img/about_1.jpg" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-5">
                    <p>Doktoradanis.net web sitesi internet üzerinde hastalık, tedavi yöntemleri, hastane ve
                    doktorlar hakkında bilgi almanızı, uzmanlarla iletişim kurmanız kolaylaştırmak amacıyla
                    kurulmuş bağımsız bir dijital sağlık platformudur.</p>
                    <p>Doktoradanis.net web sitesi, hastalık ve tedavi yöntemleri ile ilgili doktor ve uzmanlara soru
                    sorup bu kişilerle iletişim kurmanızı, onlarla doğrudan veya dolaylı olarak haberleşmenizi
                    sağlamak amacıyla kurulmuş bir internet sitesidir.</p>
                    <p>Doktoradanis.net web sitesi, hastalık ve tedavi yöntemleri ile ilgili doktor ve uzmanlara soru
                    sorup bu kişilerle iletişim kurmanızı, onlarla doğrudan veya dolaylı olarak haberleşmenizi
                    sağlamak amacıyla kurulmuş bir internet sitesidir.</p>
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </div>
        <!--/bg_color_1-->
                
        <!-- <div class="container margin_120_95">
            <div class="main_title">
                <h2>Our founders</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div id="staff" class="owl-carousel owl-theme">
                <div class="item">
                    <a href="detail-page.html">
                        <div class="title">
                            <h4>Julia Holmes<em>CEO</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="title">
                            <h4>Lucas Smith<em>Marketing</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="title">
                            <h4>Paul Stephens<em>Business strategist</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="title">
                            <h4>Pablo Himenez<em>Customer Service</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="detail-page.html">
                        <div class="title">
                            <h4>Andrew Stuttgart<em>Admissions</em></h4>
                        </div><img src="http://via.placeholder.com/350x500.jpg" alt="">
                    </a>
                </div>
            </div>
        </div> -->
                
        <div class="bg_color_1">
            <div class="container margin_120_95">
                <div class="main_title">
                    <h2>KULLANICI HAKKIMIZDA NE DİYOR</h2>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                </div>
                
            <!-- /row -->
            <div class="row">
                @foreach ($reviews as $review)
                <div class="col-md-4">
                    <div class="about-review">
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <strong>Satisfied!</strong>
                        </div>
                        <p>"{{$review->content}}"</p>
                        <div class="user_review">
                            <figure><img src="http://via.placeholder.com/160x160.jpg"></figure>
                            <h4>{{$review->title}}<span>{{$review->user_type}}</span></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /row -->
            </div>
            <!--/container-->
        </div>
        <!--/bg_color_1-->
                
        <div class="container margin_120_95">
            <div class="main_title">
                <h2>NEDEN DOKTORA DANIŞ' I SEÇMELİSİNİZ</h2>
                <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat_about" href="#0">
                        <i class="pe-7s-id"></i>
                        <h3>+ 5575 Doctors</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat_about" href="#0">
                        <i class="pe-7s-help2"></i>
                        <h3>H24 Support</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat_about" href="#0">
                        <i class="pe-7s-date"></i>
                        <h3>Instant Booking</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat_about" href="#0">
                        <i class="pe-7s-headphones"></i>
                        <h3>Help Direct Line</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat_about" href="#0">
                        <i class="pe-7s-credit"></i>
                        <h3>Secure Payments</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat_about" href="#0">
                        <i class="pe-7s-chat"></i>
                        <h3>Support via Chat</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
                    </a>
                </div>
            </div>
            <!--/row-->
        </div>
        <!-- /container -->
    </main>

    <x-home.footer></x-home.footer>

    <!-- COMMON SCRIPTS -->
    <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{URL::asset('js/common_scripts.min.js')}}"></script>
    <script src="{{URL::asset('js/functions.js')}}"></script>
    <!-- Modernizr -->
    <script src="{{URL::asset('js/modernizr.js')}}"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="{{URL::asset('js/video_header.js')}}"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script>
        'use strict';
        HeaderVideo.init({
            container: $('.header-video'),
            header: $('.header-video--media'),
            videoTrigger: $("#video-trigger"),
            autoPlayVideo: true
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
</body>
</html>
