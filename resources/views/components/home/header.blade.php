<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <a href="/"><img src="/logo1.png" alt="Doktora Danış" width="133px"></a>
                </div>
            </div>
            <nav class="header-nav col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>

                <div class="main-menu">
                    <ul>
                        <li class="submenu">
                            <a href="/hakkimizda" class="show-submenu">Hakkımızda</a>
                        </li>
                        <li class="submenu">
                            <a href="/blogs" class="show-submenu">Keşfet</a>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::guard(session('guard'))->check())
                            <li><a href="doctor/login"><!-- HTML !-->
                                    <a href="/{{rtrim(session('guard'),'s')}}/dashboard" role="button">{{\Illuminate\Support\Facades\Auth::guard(session('guard'))->user()->getFullName()}}</a>
                                </a></li>

                    </ul> </div>
                        @else
                            </ul> </div>
                            <ul id="top_access">
                                <li><a href="/doctor/login"><!-- HTML !-->
                                        <button class="button-13" role="button">Doctor</button>
                                    </a></li>
                                <li><a href="/patient/login"><!-- HTML !-->
                                        <button class="button-13" style="background-color: #bc0536;" role="button">Patient</button>
                                    </a></li>
                            </ul>
                        @endif


            </nav>
        </div>
    </div>
</header>
