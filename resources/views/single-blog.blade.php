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
                        <div class="our-team" style="padding-bottom: 10px;">
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

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Son Eklenenler</h4>
                        </div>
                        <ul class="comments-list">
                            @foreach (\App\Models\Blog::latest()->take(3)->get() as $_blog)
                                <li>
                                    <div class="alignleft">
                                        <a href="/{{$_blog->slug}}"><img src="{{URL::asset('images/blogs/thumbnails/'.$_blog->thumbnail_url)}}" alt=""></a>
                                    </div>
                                    <h3 style="margin-bottom: 10px !important;"><a href="/{{$_blog->slug}}" title="">{{$_blog->title}}</a></h3>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /aside -->
            <div class="col-lg-9">
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

                <div id="disqus_thread"></div>
                <script>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://https-onlinedoctreat-com.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            </div>

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
