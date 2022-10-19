<div class="content-wrapper">

    <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add listing</li>
            </ol>

            @livewire('edit-profile.basic-info',['doctor'=>$doctor])

            @livewire('edit-profile.address',['doctor'=>$doctor])

            @livewire('edit-profile.education',['doctor'=>$doctor])

            @livewire('edit-profile.about-me',['doctor'=>$doctor])

            @livewire('edit-profile.services',['doctor'=>$doctor])
{{--            <p><button type="submit" class="btn_1 medium">Save</button></p>--}}

    </div>
    <!-- /.container-fluid-->
</div>
