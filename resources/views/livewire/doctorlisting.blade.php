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
                <ul class="clearfix" style="display: flex;">
                    <li style="width: 80%;">
                        <h6>Uzmanlık Alanı</h6>
                        <select wire:model="spec" class="form-control" >
                            <option  value="">Select a category</option>
                            @foreach ($specs as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </li>    
                    <li style="width: 20%;">
                        <h6>Sort by</h6>
                        <select name="orderby" class="form-control">
                            <option value="Closest">Closest</option>
                            <option value="Best rated">Best rated</option>
                            <option value="Men">Men</option>
                            <option value="Women">Women</option>
                        </select>
                    </li>
                </ul>
                
            </div>
            <!-- /container -->
        </div>
        <!-- /filters -->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-7">
                    {{-- <livewire:doctorlisting /> --}}
                    {{-- {{ $doctors->onEachSide(1)->links() }} --}}
                    {{--$doctors->links()--}}
                    @foreach ($doctors as $doctor)
                        <div wire:key="item-{{ $doctor->id }}" class="strip_list">
                            <a href="#0" class="wish_bt"></a>
                            <figure>
                                <a href="/doctor/{{$doctor->username}}"><img src="{{URL::asset('images/doctors/profile/'.$doctor->profile_picture)}}" alt=""></a>
                            </figure>
                            <small>{{$doctor->field()->name}}</small>
                            <a href="/doctor/{{$doctor->username}}"><h3>{{$doctor->first_name.' '.$doctor->last_name}}</h3></a>
                            <p>{{substr($doctor->about,0,150)}}....</p>
                            <span class="rating">
                                @for($i = 1;$i<6;$i++)
                                    @if($i <= intval($doctor->averageRating))
                                        <i class="icon_star" style="color: #ffc107"></i>
                                    @else
                                        <i class="icon_star"></i>
                                    @endif
                                @endfor


                                <small>({{$doctor->averageRating}})</small>
                            </span>
                            <a href="badges.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Badge Level" class="badge_list_1"><img src="../img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                            <ul>
                                <li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
                                <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
                                <?php if(Auth::guard('patients')->check()){
                                        ?>
                                            <li><a href="/doctor/{{$doctor->username}}/book-now">Book now</a></li>
                                        <?php
                                    }else{
                                    ?>
                                    <li  onclick="Livewire.emit('openModal','booking-login-modal',{{ json_encode(["doctorID" => $doctor->id]) }})><a href="/doctor/{{$doctor->username}}/book-now">Book now</a></li>
<?php } ?>
                            </ul>
                        </div>
                    @endforeach
                    {{$doctors->links()}}

                    {{-- {{ $doctors->onEachSide(1)->links() }} --}}


                </div>
                <!-- /col -->

                <aside class="col-lg-5" id="sidebar" style="position: relative;">
                    <div id="map_listing" class="normal_list" style="position: sticky; top: 15px; height: 600px;">
                    <div style="width: 100%; height: 100%;"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=19%20May%C4%B1s,%20Hrant%20Dink%20Sok.%20No:61,%2034360%20%C5%9Ei%C5%9Fli/%C4%B0stanbul+(Doktora%20Dan%C4%B1%C5%9F)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe></div>
                    </div>
                </aside>
                <!-- /aside -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>



</div>
