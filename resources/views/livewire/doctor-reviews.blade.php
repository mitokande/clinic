<div id="section_2">
    <div class="box_general_3">
        <div class="reviews-container">
            <div class="row">
                <div class="col-lg-3">
                    <div id="review_summary">
                        <strong>4.7</strong>
                        <div class="rating">
                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>
                        <small>Based on 4 reviews</small>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-lg-10 col-9">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /row -->

            <div>
                <span class="rating">
                    @for($i = 1;$i<6;$i++)
                        @if($star >= $i)
                            <i class="icon_star" wire:click="$set('star', {{$i}})" style="color: #FFC107 !important;"></i>
                        @else
                            <i class="icon_star" wire:click="$set('star', {{$i}})"></i>
                        @endif
                    @endfor

                 </span>
                <p>Write Your Review:{{$star}}</p>
                <textarea class="form-control " wire:model="comment"></textarea>
                <button class="" wire:click="starsComment({{$star}},'{{$comment}}')">Send Review</button>
            </div>

            <hr>


            @foreach($ratings as $rating)

                <div class="review-box clearfix">
                    <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                    </figure>
                    <div class="rev-content">

                        <div class="rating">
                            @for($i = 0;$i<5;$i++)
                                @if($rating->rating > $i)
                                    <i class="icon_star" style="color: #FFC107 !important;"></i>
                                @else
                                    <i class="icon_star" ></i>
                                @endif


                            @endfor
                        </div>
                        <div class="rev-info">
                            Admin – {{$rating->rating}} April 03, 2016:
                        </div>
                        <div class="rev-text">
                            <p>
                                {{$rating->comment}}
                            </p>
                        </div>
                    </div>
                </div>



            @endforeach
            <!-- End review-box -->

            {{--                            <div class="review-box clearfix">--}}
            {{--                                <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg" alt="">--}}
            {{--                                </figure>--}}
            {{--                                <div class="rev-content">--}}
            {{--                                    <div class="rating">--}}
            {{--                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>--}}
            {{--                                    </div>--}}
            {{--                                    <div class="rev-info">--}}
            {{--                                        Ahsan – April 01, 2016--}}
            {{--                                    </div>--}}
            {{--                                    <div class="rev-text">--}}
            {{--                                        <p>--}}
            {{--                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis--}}
            {{--                                        </p>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            <!-- End review-box -->

        </div>
        <!-- End review-container -->
        <hr>
        <div class="text-end"><a href="submit-review.html" class="btn_1">Submit review</a></div>
    </div>
</div>
