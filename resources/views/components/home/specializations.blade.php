@php
    $categories = \App\Models\MedicineField::latest()->take(8)->get();
@endphp
<div class="container margin_120_95" style="padding-top: 90px;">
    <div class="main_title">
        <h2>Uzmanlığa Göre Bul</h2>
        <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</p>
    </div>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-lg-3 col-md-6">
                <a href="/doctors?type=all&spec={{$category->id}}" class="box_cat_home">
                    <i class="icon-info-4"></i>
                    <img src="../img/icon_cat_1.svg" width="60" height="60" alt="">
                    <h3>{{$category->name}}</h3>
                    <ul class="clearfix">
                        <li><strong>124</strong>Doctors</li>
                        <li><strong>60</strong>Clinics</li>
                    </ul>
                </a>
            </div>
        @endforeach
    </div>
    <!-- /row -->
</div>
