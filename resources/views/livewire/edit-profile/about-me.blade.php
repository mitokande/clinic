<div class="box_general padding_bottom">
    <form wire:submit.prevent="save" method="POST">
        @csrf
    <div class="header_box version_2">
        <h2><i class="fa fa-file-text"></i>About Me</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Who am I</label>
                <textarea wire:model="about" class="form-control">{{$doctor->about}}</textarea>
            </div>
        </div>
    </div>
    <!-- /row-->
    <div class="row">
        <div class="col-md-12">
            <div wire:ignore class="form-group">
                <label>Specialization <a href="#0" data-toggle="tooltip" data-placement="top" title="Separated by commas"><i class="fa fa-fw fa-question-circle"></i></a></label>
                <select wire:model="specialization" class="form-control specialization_select" multiple="multiple">
                    @if(!empty($doctor->specialization))
                        @foreach(json_decode($doctor->specialization) as $specialization)
                            <option selected value="{{$specialization}}">{{$specialization}}</option>
                        @endforeach
                    @endif
                </select>
                {{--                        <input type="text" class="form-control" placeholder="Ex: Piscologist, Pediatrician...">--}}
            </div>
        </div>
    </div>
    <!-- /row-->
        <p><button type="submit" class="btn_1 medium">Save</button></p>
    </form>
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.specialization_select').on('change', function (e) {
                var data = $('.specialization_select').select2("val");
            @this.set('specialization', data);
            });
        });

    </script>

</div>
<!-- /box_general-->
