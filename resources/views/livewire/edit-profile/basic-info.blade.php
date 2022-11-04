<div class="box_general padding_bottom">
    <form wire:submit.prevent="save" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>Basic info</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input  type="text" class="form-control" wire:model="first_name"  value="{{$doctor->first_name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" wire:model="last_name" class="form-control" value="{{$doctor->last_name}}">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" class="form-control" wire:model="telephone" value="{{$doctor->telephone}}" placeholder="Your telephone number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" wire:model="email" value="{{$doctor->email}}">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Profile picture</label>
                    <br>
                    <input wire::model="profile_picture" type="file" oninput="pic.src=window.URL.createObjectURL(this.files[0])">

                    <img src="{{ URL::asset('images/doctors/profile/'.$doctor->profile_picture) }}" id="pic" style="width: 200px"/>

                    {{--                        <form action="/file-upload" class="dropzone" ></form>--}}
                </div>
            </div>
        </div>
        <!-- /row-->
        <p><button type="submit" class="btn_1 medium">Save</button></p>
    </form>
</div>
<!-- /box_general-->
