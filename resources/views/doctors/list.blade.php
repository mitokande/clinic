<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
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

    <!-- SPECIFIC CSS -->
    <link href="../css/date_picker.css" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

</head>
<body>

<x-home.header></x-home.header>

@livewire('doctorlisting')

<x-home.footer></x-home.footer>
<div id="toTop"></div>
<!-- Back to top button -->



    <!-- SPECIFIC SCRIPTS -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/map_listing.js"></script>
<script src="js/infobox.js"></script>
@livewireScripts
</body>
</html>
