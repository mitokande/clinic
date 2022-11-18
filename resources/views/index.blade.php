<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doktora Danış</title>
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

    <x-home.hero></x-home.hero>

    @livewire('doctor-slider',['doctors'=>$doctors])

    <x-home.specializations ></x-home.specializations >
    
    @livewire('latest-blogs')

    <x-home.appointment></x-home.appointment>
    
    {{-- @livewire('about-us') --}}

    <x-home.areyouquestion></x-home.areyouquestion>

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
