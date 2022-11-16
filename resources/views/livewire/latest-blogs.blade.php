<div class="bg_color_1">
    <style>
        .blog-sec-container {
           
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            gap: 0px 0px;
            grid-auto-flow: row;
            grid-template-areas:
                "last-blog last-blog last-blog"
                "last-blog last-blog last-blog"
                "second-b third-b fourth-b"
                "fifth-b sixth-b seventh-b";
            gap: 20px 20px; 
        }
        .last-blog { grid-area: last-blog; }
        .second-b { grid-area: second-b; }
        .third-b { grid-area: third-b; }
        .fourth-b { grid-area: fourth-b; }
        .fifth-b { grid-area: fifth-b; }
        .sixth-b { grid-area: sixth-b; }
        .seventh-b { grid-area: seventh-b; }

        .last-blog{
            display: grid;
            grid-template-columns: 3.3fr 6.7fr;
            gap: 20px;
        }
        .last-blog .latest-bright{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-bottom: 6.6%;
        }
        .last-blog button{
            cursor: pointer;
            border: none;
            padding: 10px 0;
            width: 12.5%;
            background: hsla(214, 80%, 43%, 0.9);
            color: white;
            font-weight: bold;
        }
        .last-blog .b-title{
            font-weight: bold;
            font-size: 1.75rem;
            margin-bottom: 10px;
        }
        .last-blog .b-content{
            margin: 0;
        }
        .last-blog img{
            height: 275px;
            object-fit: cover;
            width: 100%;
        }
        .mini-blog-wrapper{
            height: max-content;
        }
        .mini-blog-div{
            display: grid;
            grid-template-columns: 4fr 6fr;
            gap: 20px;
        }
        .mini-blog-div p{
            font-weight: bold;
            font-size: .95rem;
        }
        .mini-blog-div img{
            width: 100%;
            object-fit: cover;
        }
    </style>
    <div class="blog-sec-container container margin_120_95">
        <div class="last-blog">
            <div>
                <a href="/{{$blogs[0]->slug}}"><img src="{{URL::asset('images/blogs/thumbnails/'.$blogs[0]->thumbnail_url)}}" alt=""></a>
            </div>
            <div class="latest-bright">
                <div>
                    <a href="{{$blogs[0]->slug}}"><p class="b-title">{{$blogs[0]->title}}</p></a>
                    <p class="b-content">{{substr($blogs[0]->title,0,350)}}</p>
                </div>
                <a href="/{{$blogs[0]->slug}}"><button>DEVAMI</button></a>
            </div>
        </div>
        @for ($i = 1;$i < 7 ; $i++)
        <a class="mini-blog-wrapper" href="/{{$blogs[$i]->slug}}"><div class="mini-blog-div {{$i}}-b">
                <img src="{{URL::asset('images/blogs/thumbnails/'.$blogs[$i]->thumbnail_url)}}" alt="">
                <p>{{$blogs[$i]->title}}</p>
            </div></a>
        @endfor
        <!-- <div class="mini-blog-div third-b">
            <img src="https://www.doktoradanis.net/wp-content/uploads/2022/10/besin-gida-yemek-43.jpg" alt="">
            <p>Tansiyon neden yükselir, nasıl düşürülür? İyi gelen yiyecekler</p>
        </div>
        <div class="mini-blog-div fourth-b">
            <img src="https://www.doktoradanis.net/wp-content/uploads/2022/10/besin-gida-yemek-43.jpg" alt="">
            <p>Tansiyon neden yükselir, nasıl düşürülür? İyi gelen yiyecekler</p>
        </div>
        <div class="mini-blog-div fifth-b">
            <img src="https://www.doktoradanis.net/wp-content/uploads/2022/10/besin-gida-yemek-43.jpg" alt="">
            <p>Tansiyon neden yükselir, nasıl düşürülür? İyi gelen yiyecekler</p>
        </div>
        <div class="mini-blog-div sixth-b">
            <img src="https://www.doktoradanis.net/wp-content/uploads/2022/10/besin-gida-yemek-43.jpg" alt="">
            <p>Tansiyon neden yükselir, nasıl düşürülür? İyi gelen yiyecekler</p>
        </div>
        <div class="mini-blog-div seventh-b">
            <img src="https://www.doktoradanis.net/wp-content/uploads/2022/10/besin-gida-yemek-43.jpg" alt="">
            <p>Tansiyon neden yükselir, nasıl düşürülür? İyi gelen yiyecekler</p>
        </div> -->
    </div>
</div>
