<div>
    <main>
        <div id="results">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4><strong>Showing 10</strong> of 140 results</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="search_bar_list">

                            <input type="text" class="form-control" wire:model="search" placeholder="{{ app('request')->input('search') }}">

                            <input type="submit" value="Search">

                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /results -->

        <div class="filters_listing">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <h6>Type</h6>
                        <div class="switch-field">
                            <input type="radio" id="all" name="type_patient" value="all" checked>
                            <label for="all">All</label>
                            <input type="radio" id="doctors" name="type_patient" value="doctors">
                            <label for="doctors">Doctors</label>
                            <input type="radio" id="clinics" name="type_patient" value="clinics">
                            <label for="clinics">Clinics</label>
                        </div>
                    </li>
                    <li>
                        <h6>Layout</h6>
                        <div class="layout_view">
                            <a href="grid-list.html"><i class="icon-th"></i></a>
                            <a href="#0" class="active"><i class="icon-th-list"></i></a>
                            <a href="list-map.html"><i class="icon-map-1"></i></a>
                        </div>
                    </li>
                    <li>

                        <h6>Sort by</h6>
                        <select name="orderby" class="form-control">
                            <option value="Closest">Closest</option>
                            <option value="Best rated">Best rated</option>
                            <option value="Men">Men</option>
                            <option value="Women">Women</option>
                        </select>
                    </li>

                </ul>
                <select wire:model="spec" class="form-control" >
                    <option  value="">Select a category</option>
                    @foreach ($specs as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <!-- /container -->
        </div>
        <!-- /filters -->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-7">
                    {{-- <livewire:doctorlisting /> --}}
                    {{-- {{ $doctors->onEachSide(1)->links() }} --}}
                    {{$doctors->links()}}
                    @foreach ($doctors as $doctor)
                        <div wire:key="item-{{ $doctor->id }}" class="strip_list">
                            <a href="#0" class="wish_bt"></a>
                            <figure>
                                <a href="/doctor/{{$doctor->username}}"><img src="{{$doctor->profile_picture}}" alt=""></a>
                            </figure>
                            <small>{{$doctor->field()->name}}</small>
                            <a href="/doctor/{{$doctor->username}}"><h3>{{$doctor->first_name.' '.$doctor->last_name}}</h3></a>
                            <p>{{$doctor->about}}....</p>
                            <span class="rating">
                                @for($i = 1;$i<6;$i++)
                                    @if($i <= intval($doctor->averageRating))
                                        <i class="icon_star" style="color: #ffc107"></i>
                                    @else
                                        <i class="icon_star"></i>
                                    @endif
                                @endfor


                                <small>(145)</small>
                            </span>
                            <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="../img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                            <ul>
                                <li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
                                <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
                                <li><a href="/doctor/{{$doctor->username}}/book-now">Book now</a></li>
                            </ul>
                        </div>
                    @endforeach
                    {{$doctors->links()}}

                    {{-- {{ $doctors->onEachSide(1)->links() }} --}}


                </div>
                <!-- /col -->

                <aside class="col-lg-5" id="sidebar">
                    <div id="map_listing" class="normal_list">
                    </div>
                </aside>
                <!-- /aside -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>



</div>
