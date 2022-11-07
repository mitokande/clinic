<div class="box_general padding_bottom">
    <form  method="POST">
        @csrf
    <div class="header_box version_2">
        <h2><i class="fa fa-folder"></i>Services - Pricing</h2>
    </div>
    <div class="row" style="margin-bottom: 14px;">
        <div class="col-md-12">
            <h6>Treatments</h6>
            <table id="pricing-list-container" style="width:100%;">

                @if(isset($doctor->service))
                    @foreach(json_decode($doctor->service) as $service=>$price)
                        <tr class="pricing-list-item">
                            <td>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="service[]" value="{{$service}}" type="text" class="form-control"  placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input name="service_price[]" value="{{$price}}" type="text"  class="form-control"  placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button  wire:click.prevent="delService('{{$service}}')" class="delete" ><i class="fa fa-fw fa-remove"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
            <a href="#0" onclick="addService()" class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Add Item</a>
        </div>
    </div>
    <!-- /row-->
    <button style="width: 100%; border-radius: 8px;" type="submit" class="btn_1 medium">Save</button>
    </form>
</div>
<!-- /box_general-->
