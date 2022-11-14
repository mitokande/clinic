<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">


    <style>
        header.header_sticky{
            position: initial !important;
        }
    </style>

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>

<x-home.header></x-home.header>
<main>
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container margin_60">

        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <nav id="secondary_nav">
                    <div class="container">
                        <ul class="clearfix">
                            <li><a href="#section_1" class="active">General info</a></li>
                            <li><a href="#section_2">Reviews</a></li>
                            <li><a href="#sidebar">Booking</a></li>
                        </ul>
                    </div>
                </nav>
                <div id="section_1">
                    <div class="box_general_3">
                        <div class="profile">
                            <div class="row">
                                <div class="col-lg-5 col-md-4">
                                    <figure>
                                        <img src="{{URL::asset('images/doctors/profile/'.$doctor->profile_picture)}}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="col-lg-7 col-md-8">
                                    <small>{{$doctor->field()->name}}</small>
                                    <h1>{{$doctor->first_name.' '.$doctor->last_name}}</h1>

                                    @livewire('doctor-stats',['doctor'=>$doctor])
                                    <button onclick="Livewire.emit('openModal','send-message-modal',{{ json_encode(["doctorID" => $doctor->id]) }})" class="msger-send-btn">Send Message</button>
                                    <ul class="contacts">
                                        <li>
                                            <h6>Address</h6>
                                            {{$doctor->address}} -
                                            <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"> <strong>View on map</strong></a>
                                        </li>
                                        <li>
                                            <h6>Phone</h6> <a href="tel://{{$doctor->telephone}}">{{$doctor->telephone}}</a> </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <hr>

                        <!-- /profile -->
                        <div class="indent_title_in">
                            <i class="pe-7s-user"></i>
                            <h3>Professional statement</h3>
                            <p>Hakkında</p>
                        </div>
                        <div class="wrapper_indent">
                            <p>{{$doctor->about}}</p>
                            <h6>Specializations</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="bullets">
                                        @if(!empty($doctor->specialization))
                                            @foreach(json_decode($doctor->specialization) as $specialization)
                                                <li><strong></strong> - {{$specialization}}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
{{--                                <div class="col-lg-6">--}}
{{--                                    <ul class="bullets">--}}
{{--                                        <li>Abdominal Radiology</li>--}}
{{--                                        <li>Addiction Psychiatry</li>--}}
{{--                                        <li>Adolescent Medicine</li>--}}
{{--                                        <li>Cardiothoracic Radiology </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                            <!-- /row-->
                        </div>
                        <!-- /wrapper indent -->

                        <hr>

                        <div class="indent_title_in">
                            <i class="pe-7s-news-paper"></i>
                            <h3>Education</h3>
{{--                            <p>Mussum ipsum cacilds, vidis litro abertis.</p>--}}
                        </div>
                        <div class="wrapper_indent">

                            <h6>Curriculum</h6>
                            <ul class="list_edu">
                                @if(!empty($doctor->education))
                                    @foreach(json_decode($doctor->education) as $education)
                                        <li><strong></strong> - {{$education}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <!--  End wrapper indent -->

                        <hr>

                        <div class="indent_title_in">
                            <i class="pe-7s-cash"></i>
                            <h3>Prices &amp; Payments</h3>
                            <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                        </div>
                        <div class="wrapper_indent">
                            <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Service - Visit</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($doctor->service))
                                        @foreach(json_decode($doctor->service) as $service=>$price)
                                            <tr>
                                                <td>{{$service}}</td>
                                                <td>${{$price}}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--  /wrapper_indent -->
                    </div>
                    <!-- /section_1 -->
                </div>
                <!-- /box_general -->

                @livewire('doctor-reviews',['doctor'=>$doctor])
                <!-- /section_2 -->
            </div>
            <!-- /col -->
            <aside class="col-xl-4 col-lg-4" id="sidebar">
                <div class="box_general_3 booking">
                    <form method="POST" action="{{$doctor->username}}/book">
                        @csrf
                        <div class="title">
                            <h3>Book a Visit</h3>
                            <small>Monday to Friday 09.00am-06.00pm</small>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" name="year" type="text" id="booking_date" data-lang="en" data-min-year="2020" data-max-year="2024" data-disabled-days="10/17/2017,11/18/2017">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" name="time" type="text" id="booking_time" value="9:00 am">
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input   value="Face to Face" type="radio" name="type" id="f2f">
                                    <label for="f2f">Face to Face</label>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input  value="Online" type="radio" name="type" id="online">
                                    <label for="online">Online</label>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <ul class="treatments clearfix">
                            @if(isset($doctor->service))
                                @foreach(json_decode($doctor->service) as $service=>$price)
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" class="css-checkbox" id="{{$service}}" value="Back Pain visit" name="subject[]">
                                            <label for="{{$service}}" class="css-label">{{$service}}<strong>${{$price}}</strong></label>
                                        </div>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                        <hr>
                        <?php 
                        if(Auth::guard('patients')->check()){?>
                            
                        
                        <input type="submit" class="btn_1 full-width" value="Book Now" >
                        </form>
                        <?php }else{
                            ?></form>
                            <button onclick="Livewire.emit('openModal','booking-login-modal',{{ json_encode(["doctorID" => $doctor->id]) }})"  class="btn_1 full-width">Book Now*</button>
                            <?php
                        } ?> 
                    
                </div>
                <!-- /box_general -->
            </aside>
            <!-- /asdide -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
@livewire('livewire-ui-modal')

<x-home.footer></x-home.footer>
<div id="toTop"></div>
<!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{URL::asset('js/common_scripts.min.js')}}"></script>
<script src="{{URL::asset('js/functions.js')}}"></script>
<!-- Modernizr -->
<script src="{{URL::asset('js/modernizr.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{URL::asset('js/video_header.js')}}"></script>
@livewireScripts

</body>
</html>
