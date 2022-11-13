<div>
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
        .mini-blog-div{
            display: flex;
        }
        .mini-blog-div p{
            font-weight: bold;
            font-size: .95rem;
        }
        .mini-blog-div img{
            width: 120px;
            object-fit: cover;
        }
    </style>
    <div class="blog-sec-container container margin_120_95">
        <div class="last-blog">
            <div>
                <img src="https://www.doktoradanis.net/wp-content/uploads/2022/03/Agiz-Kurulugu-Xerostomia-6.jpg" alt="">
            </div>
            <div class="latest-bright">
                <div>
                    <p class="b-title">Ağız kuruluğu neden olur? Ne iyi gelir? Belirtileri ve çözümü</p>
                    <p class="b-content">Ağız kuruluğu (kserostomi) ağzınızdaki tükürük bezleri yeterli tükürük üretmediğinde gelişir. Yemek yeme, konuşma ve yutma güçlüğü, ağız kokusu, tat duyusunda değişiklik, susuzluk hissi gibi belirtilerle kendini gösterebilir. Yaşlanma, radyasyon ya da kemoterapi, burun...</p>
                </div>
                <button>DEVAMI</button>
            </div>
        </div>
        <div class="mini-blog-div second-b">
            <img src="https://www.doktoradanis.net/wp-content/uploads/2022/10/besin-gida-yemek-43.jpg" alt="">
            <p>Tansiyon neden yükselir, nasıl düşürülür? İyi gelen yiyecekler</p>
        </div>
        <div class="mini-blog-div third-b">
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
        </div>
    </div>
</div>
