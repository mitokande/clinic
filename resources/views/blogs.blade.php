<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/blog.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <x-home.header></x-home.header>
    <main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="/">Anasayfa</a></li>
					<li><a href="/blogs">Makaleler</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-9">
					@foreach ($blogs as $blog)
                        <article class="blog wow fadeIn">
                            <div class="row g-0">
                                <div class="col-lg-7">
                                    <figure>
                                        <a <a href="{{$blog->slug}}">><img src="{{URL::asset('images/blogs/thumbnails/'.$blog->thumbnail_url)}}" alt=""><div class="preview"><span>Read more</span></div></a>
                                    </figure>
                                </div>
                                <div class="col-lg-5">
                                    <div class="post_info">
                                        <small>{{$blog->created_at}}</small>
                                        <h3><a href="{{$blog->slug}}">{{$blog->title}}</a></h3>
                                        <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                        <ul>
                                            <li>
                                                <div class="thumb"><img src="{{URL::asset('images/doctors/profile/'.$blog->user->profile_picture)}}" alt=""></div> {{$blog->user->getFullName()}}
                                            </li>
                                            <li><i class="icon_comment_alt"></i>2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
					<!-- /article -->

					
					<nav aria-label="...">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				
				<aside class="col-lg-3" style="position: relative;">

					<!-- /widget 
					<div class="widget">
						<form>
							<div class="form-group">
								<input type="text" name="search" id="search" class="form-control" placeholder="Search...">
							</div>
							<button type="submit" id="submit" class="btn_1"> Search</button>
						</form>
					</div>
-->

					<div class="widget">
						<div class="widget-title">
							<h4>Kategoriler</h4>
						</div>
						<ul class="cats">
							@foreach (\App\Models\MedicineField::latest()->take(10)->get() as $categpry)
								<li><a href="#">{{$categpry->name}} <span>(X)</span></a></li>
							@endforeach
						</ul>
					</div>
					
					<div class="widget" style="position: sticky; top: 70px;">
						<div class="widget-title">
							<h4>En Son Eklenenler</h4>
						</div>
						<ul class="comments-list">
							@foreach (\App\Models\Blog::latest()->take(3)->get() as $blog)
								<li>
									<div class="alignleft">
										<a href="#0"><img src="{{URL::asset('images/blogs/thumbnails/'.$blog->thumbnail_url)}}" alt=""></a>
									</div>
									<small>{{$blog->created_at}}<</small>
									<h3><a href="#" title="">{{$blog->title}}</a></h3>
								</li>
							@endforeach
						</ul>
					</div>
					
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>

    <x-home.footer></x-home.footer>

    <!-- COMMON SCRIPTS -->
    <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{URL::asset('js/common_scripts.min.js')}}"></script>
    <script src="{{URL::asset('js/functions.js')}}"></script>
    <!-- Modernizr -->
    <script src="{{URL::asset('js/modernizr.js')}}"></script>
</body>
</html>