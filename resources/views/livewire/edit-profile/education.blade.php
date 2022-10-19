<div class="box_general padding_bottom">

    <form wire:submit.prevent="save" method="POST">
        @csrf
    <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>Education</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div wire:ignore class="form-group">
                <label>Add School/University</label>
                <select wire:model="education" class="form-control education_select" multiple="multiple">
                    @foreach(json_decode($doctor->education) as $education)
                        <option selected value="{{$education}}">{{$education}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <!-- /row-->

    <!-- /row-->
        <p><button type="submit" class="btn_1 medium">Save</button></p>
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
