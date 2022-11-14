<div class="bg_color_1">
  <div class="container margin_120_95">
    <div class="main_title">
      <h2>Doktor Ekibimiz</h2>
      <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
    </div>
    <div id="reccomended" class="owl-carousel owl-theme">
      @foreach ($doctors as $doctor)
        <div class="item" style="height: 400px; box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px; border: 2px solid #ddd; border-radius: 5px;">
          <a href="/doctor/{{$doctor->username}}" style="display: flex; flex-direction: column-reverse; justify-content: space-between; height: 100%;">
            <div class="views"><i class="icon-eye-7"></i>140</div>
            <div class="title" style="position: initial !important;">
              <h4 style="font-size: 1.33rem; font-weight: bold;">{{$doctor->getFullName()}}</h4>
              <p style="padding: 0 5px; font-size: .95rem;">{{$doctor->field()->name}}</p>
            </div><img src="{{URL::asset('images/doctors/profile/'.$doctor->profile_picture)}}" style="width: 350px; height: 400px; object-fit: contain; padding-right: 37px;">
          </a>
        </div>
      @endforeach
    </div>
    <!-- /carousel -->
  </div>
  <!-- /container -->
</div>