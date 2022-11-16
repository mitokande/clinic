<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">

    <a class="navbar-brand" href="/"><img src="{{URL::asset('/logo1.png')}}" data-retina="true" alt="" width="126" height="37.5" style="margin-left: 15px;"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="justify-content: flex-end; margin-right: 10px;">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="/doctor/dashboard">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Panel</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="/doctor/dashboard/messages">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">Mesajlar</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
                <a class="nav-link" href="/doctor/dashboard/bookings">
                    <i class="fa fa-fw fa-calendar-check-o"></i>
                    <span class="nav-link-text">Randevu <span class="badge badge-pill badge-primary">X Yeni</span></span>
                </a>
            </li>
            <?php 
            if(true){ ?>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
                    <a class="nav-link" href="/doctor/dashboard/blogs">
                        <i class="fa fa-fw fa-pencil"></i>
                        <span class="nav-link-text">Blogs <span class="badge badge-pill badge-primary">X Yeni</span></span>
                    </a>
                </li>
            <?php } ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
                <a class="nav-link" href="/doctor/dashboard/reviews">
                    <i class="fa fa-fw fa-star"></i>
                    <span class="nav-link-text">Değerlendirmeler</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="/doctor/dashboard/edit-profile" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Profilim</span>
                </a>
            </li>
            
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                </a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('doctor.logout') }}">
                    @csrf
                    <a onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>