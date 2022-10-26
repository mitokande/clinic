<div class="content-wrapper">
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        @if(!$isFullyRegistered)
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-bar-chart"></i>Personal Biologycal Information</h2>
                </div>
                <form wire:submit.prevent="save()" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" name="age" value="{{$patient->age}}" placeholder="Your Age">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            @if($patient->gender != null)
                                <option value="{{$patient->gender}}">{{$patient->gender}}</option>
                            @else
                                <option value="none" selected disabled>Choose Your Gender</option>
                            @endif
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="secret">I would like to not say.</option>
                            <option value="other">Other / (Non-Binary)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Weight</label>
                        <input type="number" class="form-control" name="weight" value="{{$patient->weight}}" placeholder="Your Weight">
                    </div>
                    <div class="form-group">
                        <label>Height</label>
                        <input type="number" class="form-control" name="height" value="{{$patient->height}}" placeholder="Your Height">
                    </div>
                    <div class="form-group text-center add_top_30">
                        <p><button type="submit" class="btn_1 medium">Save</button></p>
                    </div>
                </form>
            </div>
        @else
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-envelope-open"></i>
                        </div>
                        <div class="mr-5"><h5>26 New Messages!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="messages.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-star"></i>
                        </div>
                        <div class="mr-5"><h5>11 New Reviews!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-calendar-check-o"></i>
                        </div>
                        <div class="mr-5"><h5>10 New Bookings!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="bookings.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-heart"></i>
                        </div>
                        <div class="mr-5"><h5>10 New Bookmarks!</h5></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /cards -->
        <h2></h2>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-bar-chart"></i>Statistic</h2>
            </div>
            <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
        </div>
        @endif
    </div>
    <!-- /.container-fluid-->
</div>
