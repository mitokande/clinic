<div class="box_general padding_bottom">

    <form wire:submit.prevent="save" method="POST">
        @csrf
    <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>Education</h2>
    </div>
    <div class="row" style="margin-bottom: 14px;">
        <div class="col-md-12">
            <div wire:ignore class="form-group">
                <label>Add School/University</label>
                <select wire:model="education" class="form-control education_select" multiple="multiple">
                    @if(!empty($doctor->education))
                        @foreach(json_decode($doctor->education) as $education)
                            <option selected value="{{$education}}">{{$education}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>
    <!-- /row-->

    <!-- /row-->
    <button style="width: 100%; border-radius: 8px;" type="submit" class="btn_1 medium">Save</button>
    </form>
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.education_select').on('change', function (e) {
                var data = $('.education_select').select2("val");
                @this.set('education', data);
            });
        });

    </script>
</div>
<!-- /box_general-->
