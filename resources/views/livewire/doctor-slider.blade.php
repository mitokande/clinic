<div class="bg_color_1">
  <div class="container margin_120_95">
    <div class="main_title">
      <h2>Most Viewed doctors</h2>
      <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
    </div>
    <div id="reccomended" class="owl-carousel owl-theme">
      @foreach ($doctors as $doctor)
        <div class="item" style="height: 400px; box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px; border: 2px solid #ddd; border-radius: 5px;">
          <a href="detail-page.html">
            <div class="views"><i class="icon-eye-7"></i>140</div>
            <div class="title">
              <h4>{{$doctor->getFullName()}}</h4>
              <p>{{$doctor->field()->name}}</p>
            </div><img src="{{URL::asset('images/doctors/profile/'.$doctor->profile_picture)}}" style="width: 350px; height: 400px; object-fit: contain; padding-right: 37px;">
          </a>
        </div>
      @endforeach
    </div>
    <!-- /carousel -->
  </div>
  <!-- /container -->
</div>