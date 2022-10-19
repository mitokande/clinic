<div class="box_general padding_bottom">
    <form wire:submit.prevent="save" method="POST">
        @csrf
        <div class="header_box version_2">
            <h2><i class="fa fa-map-marker"></i>Address</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" wire:model="city" placeholder="City" value="{{$doctor->city}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" wire:model="address" value="{{$doctor->address}}" placeholder="Your address">
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" wire:model="state" value="{{$doctor->state}}" placeholder="Your state">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Zip code</label>
                    <input type="text" class="form-control" wire:model="zipcode" value="{{$doctor->zipcode}}" placeholder="Your zip code">
                </div>
            </div>
        </div>
        <!-- /row-->
        <p><button type="submit" class="btn_1 medium">Save</button></p>

    </form>
</div>
<!-- /box_general-->
