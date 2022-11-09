<div style="width: 75%; margin: auto;">
        <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        display: flex;
        flex-direction: column;
        gap: 32px 0;
        text-align: center;
        font-size: 18px;
        background: #fff;
        /*padding: 133px 0;*/

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach ($doctors as $doctor)
          <div class="swiper-slide">
            <div>
              <img src="{{URL::asset('images/doctors/profile/'.$doctor->profile_picture)}}">
            </div>
            <span>{{$doctor->getFullName()}}</span>
          </div>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        freeMode: true,
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</div>
