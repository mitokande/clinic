<style>
    .select2-container .select2-selection--single{
        height: 50px !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .g-6{
        gap: 7px !important;
    }
    .pos-initial{
        position: initial !important;
    }
    .b-001010{
        border-radius: 0 0 10px 10px !important;
    }
    .w-100{
        width: 100% !important;
    }
    .header-video{
        height: 69vh !important;
    }
</style>
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
                    <div class="input-group g-6">
                        <div style="display: grid; grid-template-columns: 7fr 3fr;" class="g-6">
                            <input type="text" class=" search-query" name="search" placeholder="Ex. Name, Specialization ....">
                            <select class="custom-input js-example-basic-multiple"  name="spec">
                                <option value="">Select a Field</option>
                                @foreach($fields as $field)
                                    <option value="{{$field->id}}">{{$field->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn_search pos-initial w-100 b-001010" value="Search">
                    </div>
                    <ul>
                        <li>
                            <input type="radio" id="doctor" name="radio_search" value="doctor">
                            <label for="doctor">Doctor</label>
                        </li>
                        <li>
                            <input type="radio" id="clinic" name="radio_search" value="clinic">
                            <label for="clinic">Blog</label>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
    <img src="{{URL::asset('img/video_fix.png')}}" alt="" class="header-video--media" data-video-src="{{URL::asset('video/intro')}}" data-teaser-source="{{URL::asset('video/intro')}}" data-provider="" data-video-width="1920" data-video-height="750">
</div>
