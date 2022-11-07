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
    <link href="{{URL::asset('css/blog.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-post.css')}}" rel="stylesheet">

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
                <li><a href="/doctors?spec={{$blog->Categories()[0]->id}}">{{json_decode($blog->category)[0]}}</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-3">
                <div class="kutu">
                    <!--<div id="search-2" class="widget widget_search"><form role="search" method="get" id="searchform" >
    <div class="search_box">
    <input class="search_box_input" placeholder="Arama Kriterleriniz" type="text" value="" name="s" id="s">
    <input type="submit" id="searchsubmit" value="Arama yap" class="search_box_submit btn alt-button">
    </div>
    </form></div>-->
                    <!-- arama son -->
                    <!-- START OF AUTHOR INFO col-12 col-sm-6 col-md-4 col-lg-3 -->
                    <div class="">
                        <div class="our-team">
                            <div class="picture">
                                <a href="/doctor/{{$blog->user->username}}"><img class="img-fluid" src="{{URL::asset('images/doctors/profile/'.$blog->user->profile_picture)}}"></a>
                            </div>
                            <div class="team-content">
                                <a href="/doctor/{{$blog->user->username}}"><h3 class="name">{{$blog->user->getFullName()}}</h3></a>
                                <h4 class="title">{{$blog->user->field()->name}}</h4>
                            </div>
                            <ul class="social">
{{--                                <li><a href="" class="fab fa-facebook" aria-hidden="true"></a></li>--}}
{{--                                <li><a href="" class="fab fa-twitter" aria-hidden="true"></a></li>--}}
{{--                                <li><a href="" class="fab fa-google-plus" aria-hidden="true"></a></li>--}}
{{--                                <li><a href="" class="fab fa-linkedin" aria-hidden="true"></a></li>--}}
                            </ul>
                        </div>
                    </div>

                    <!-- END OF AUTHOR INFO -->
                    <div  class="doktor-bul"><a href="/doctors"><i class="fa fa-hospital"></i>  DOKTOR BUL</a></div>
                    <!-- yarpp başlangıç -->
                    <div>
                        <div class="yarpp-related-widget" style="margin-top:25px" >

                            <h3 class="related">Benzer Yazılar</h3>
                            <ul class ="rel-ul" style="display: flex; flex-direction: column;" >





                            </ul>
                        </div>
                    </div>
                    <!-- end of yarpp -->

                </div>
            </div>
            <!-- /aside -->
            <div class="col-lg-6">
                <div class="bloglist singlepost">
                    <p><img alt="" style="height: max-content" class="img-fluid" src="{{URL::asset('/images/blogs/thumbnails/'.$blog->thumbnail_url)}}"></p>
                    <h1>{{$blog->title}}</h1>
                    <div class="postmeta">
                        <ul>
                            <li><a href="#"><i class="icon_folder-alt"></i> {{json_decode($blog->category)[0]}}</a></li>
                            <li><a href="#"><i class="icon_clock_alt"></i>{{$blog->created_at}}</a></li>
                            <li><a href="#"><i class="icon_pencil-edit"></i> {{$blog->user->getFullName()}}</a></li>
                            <li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li>
                        </ul>
                    </div>
                    <!-- /post meta -->
                    <div class="post-content">
                        {!! $blog->content !!}
                    </div>
                    <!-- /post -->
                </div>
                <!-- /single-post -->

                <div id="comments">
                    <h5>Comments</h5>
                    <ul>
                        <li>
                            <div class="avatar">
                                <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                </div>
                                <p>
                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                </p>
                            </div>
                            <ul class="replied-to">
                                <li>
                                    <div class="avatar">
                                        <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="comment_right clearfix">
                                        <div class="comment_info">
                                            By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                        </p>
                                        <p>
                                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                        </p>
                                    </div>
                                    <ul class="replied-to">
                                        <li>
                                            <div class="avatar">
                                                <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="comment_right clearfix">
                                                <div class="comment_info">
                                                    By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                                </div>
                                                <p>
                                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                                </p>
                                                <p>
                                                    Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="avatar">
                                <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                </a>
                            </div>

                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                </div>
                                <p>
                                    Cursus tellus quis magna porta adipiscin
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <hr>

                <h5>Leave a Comment</h5>
                <form>
                    <div class="form-group">
                        <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Message Below"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit2" class="btn_1"> Submit</button>
                    </div>
                </form>
            </div>
            <!-- /col -->
            <aside class="col-lg-3">
                <div class="widget">
                    <form>
                        <div class="form-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                        </div>
                        <button type="submit" id="submit" class="btn_1"> Search</button>
                    </form>
                </div>
                <!-- /widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Posts</h4>
                    </div>
                    <ul class="comments-list">
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="http://via.placeholder.com/160x160.jpg" alt=""></a>
                            </div>
                            <small>11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="http://via.placeholder.com/160x160.jpg" alt=""></a>
                            </div>
                            <small>11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="http://via.placeholder.com/160x160.jpg" alt=""></a>
                            </div>
                            <small>11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                    </ul>
                </div>
                <!-- /widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Blog Categories</h4>
                    </div>
                    <ul class="cats">
                        <li><a href="#">Treatments <span>(12)</span></a></li>
                        <li><a href="#">News <span>(21)</span></a></li>
                        <li><a href="#">Events <span>(44)</span></a></li>
                        <li><a href="#">New treatments <span>(09)</span></a></li>
                        <li><a href="#">Focus in the lab <span>(31)</span></a></li>
                    </ul>
                </div>
                <!-- /widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Popular Tags</h4>
                    </div>
                    <div class="tags">
                        <a href="#">Medicine</a>
                        <a href="#">Treatments</a>
                        <a href="#">Events</a>
                        <a href="#">Specialist</a>
                        <a href="#">Pills</a>
                        <a href="#">Cancer</a>
                    </div>
                </div>
                <!-- /widget -->

            </aside>
            <!-- /aside -->

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
