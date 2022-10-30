<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="/" title="Findoctor">Findoctor</a></h1>
                </div>
            </div>
            <nav class="header-nav col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>

                <div class="main-menu">
                    <ul>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Home
{{--                                <i class="icon-down-open-mini"></i>--}}
                            </a>
{{--                            <ul>--}}
{{--                                <li><a href="index.html">Home Default</a></li>--}}
{{--                                <li><a href="index-2.html">Home Version 2</a></li>--}}
{{--                                <li><a href="index-3.html">Home Version 3</a></li>--}}
{{--                                <li><a href="index-4.html">Home Version 4</a></li>--}}
{{--                                <li><a href="index-7.html">Home with Map</a></li>--}}
{{--                                <li><a href="index-6.html">Revolution Slider</a></li>--}}
{{--                                <li><a href="index-5.html">With Cookie Bar (EU law)</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Blog</a>

                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">About Us</a>

                        </li>
                        @if(\Illuminate\Support\Facades\Auth::guard(session('guard'))->check())
                            <li><a href="doctor/login"><!-- HTML !-->
                                    <a href="/{{rtrim(session('guard'),'s')}}/dashboard" role="button">{{\Illuminate\Support\Facades\Auth::guard(session('guard'))->user()->getFullName()}}</a>
                                </a></li>

                    </ul> </div>
                        @else
                            </ul> </div>
                            <ul id="top_access">
                                <li><a href="doctor/login"><!-- HTML !-->
                                        <button class="button-13" role="button">Doctor</button>
                                    </a></li>
                                <li><a href="patient/login"><!-- HTML !-->
                                        <button class="button-13" style="background-color: #bc0536;" role="button">Patient</button>
                                    </a></li>
                            </ul>
                        @endif


            </nav>
        </div>
    </div>
</header>
