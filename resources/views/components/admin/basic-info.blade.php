<div class="box_general padding_bottom">
    <form  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="header_box version_2">
            <h2><i class="fa fa-file"></i>Basic info</h2>
        </div>
        <div class="row" style="margin-bottom: 14px;">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input  type="text" class="form-control" name="first_name"  value="{{$doctor->first_name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" name="last_name" class="form-control" value="{{$doctor->last_name}}">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row" style="margin-bottom: 14px;">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" class="form-control" name="telephone" value="{{$doctor->telephone}}" placeholder="Your telephone number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$doctor->email}}">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row" style="margin-bottom: 14px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Profile picture</label>
                    <br>
                    <div style="display: flex; flex-direction: column; gap: 5px;">
                        <input name="profile_picture" type="file" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                        <img src="{{ URL::asset('images/doctors/profile/'.$doctor->profile_picture) }}" id="pic" style="width: 200px"/> 
                    </div>

                    {{--                        <form action="/file-upload" class="dropzone" ></form>--}}
                </div>
            </div>
        </div>
        <!-- /row-->
        <button style="width: 100%; border-radius: 8px;" type="submit" class="btn_1 medium">Save</button>
    </form>
</div>
<!-- /box_general-->
