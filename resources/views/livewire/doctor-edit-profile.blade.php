<div class="content-wrapper">

    <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/doctor/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Profili Düzenle</li>
            </ol>
            <x-admin.basic-info :doctor="$doctor"></x-admin-basic-info >
            <!-- -->

            @livewire('edit-profile.address',['doctor'=>$doctor])

            @livewire('edit-profile.education',['doctor'=>$doctor])

            @livewire('edit-profile.about-me',['doctor'=>$doctor])

            @livewire('edit-profile.services',['doctor'=>$doctor])
{{--            <p><button type="submit" class="btn_1 medium">Save</button></p>--}}

    </div>
    <!-- /.container-fluid-->
</div>
