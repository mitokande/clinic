<div class="header-video">
    <div id="hero_video">
        <div class="content">
            <h3>Find a Doctor!</h3>
            <p>
                Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
            </p>
            @php
                $fields = \App\Models\MedicineField::all();
                $titles = \App\Models\DoctorTitle::all();
            @endphp
            <form method="get" action="/doctors">
                <div id="custom-search-input">
                    <div class="input-group">

                        <select class="custom-input js-example-basic-multiple"  name="spec">
                            <option value="">Select a Field</option>
                            @foreach($fields as $field)
                                <option value="{{$field->id}}">{{$field->name}}</option>
                            @endforeach
                        </select>
                        <input type="text" class=" search-query" name="search" placeholder="Ex. Name, Specialization ....">
                        <input type="submit" class="btn_search" value="Search">
                    </div>
                    <ul>
                        <li>
                            <input type="radio" id="all" name="type" value="all" checked>
                            <label for="all">All</label>
                        </li>
                        <li>
                            <input type="radio" id="doctor" name="radio_search" value="doctor">
                            <label for="doctor">Doctor</label>
                        </li>
                        <li>
                            <input type="radio" id="clinic" name="radio_search" value="clinic">
                            <label for="clinic">Clinic</label>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <img src="{{URL::asset('img/video_fix.png')}}" alt="" class="header-video--media" data-video-src="{{URL::asset('video/intro')}}" data-teaser-source="{{URL::asset('video/intro')}}" data-provider="" data-video-width="1920" data-video-height="750">
</div>
