<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mesajlar - Doktora Danış</title>

    <!-- Bootstrap core CSS-->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/messages.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    @livewireStyles
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <link href="{{URL::asset('vendor/dropzone.css')}}" rel="stylesheet">
    <!-- Main styles -->
    <link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
    <!-- Your custom styles -->
    <!-- WYSIWYG Editor -->
    <link rel="stylesheet" href="{{URL::asset('js/editor/summernote-bs4.css')}}">

</head>

<body class="fixed-nav sticky-footer" id="page-top">
<!-- Navigation-->
@livewire('patient-navbar')

<!-- /Navigation-->
<div class="content-wrapper">

    <div class="container-fluid">
    <div class="box_general" style="padding: 15px;">
			<h4 style="margin: 0;">Inbox</h4>
			<div class="list_general">
				<ul>
                    @foreach($inboxes as $inbox)
                        <?php
                            $lastMessage = \App\Models\Message::query()->where('inbox_id','=',$inbox->id)->latest()->firstOrFail();
                            $partipicents = $inbox->GetInboxPartipicients();
                            if(in_array($patient,$partipicents)){
                                unset($partipicents[array_search($patient,$inbox->GetInboxPartipicients())]);
                                $messengee = array_values($partipicents);
                        ?>
                            <li>
                                <span>2 hours ago</span>
                                <figure><img src="{{URL::asset('images/doctors/profile/'.$messengee[0]->profile_picture)}}" alt=""></figure>
                                <h4><a href="/patient/dashboard/message/{{$inbox->id}}"><div class="name">{{$messengee[0]->first_name . " " . $messengee[0]->last_name}}</div></a><i class="unread">Unread</i></h4>
                                <p>{{$lastMessage->message . ' - '. $lastMessage->created_at}}</p>
                            </li>
                        <?php } ?>
                    @endforeach
                    <!-- <li>
						<span>2 hours ago</span>
						<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt=""></figure>
						<h4>Enzo Ferrari <i class="unread">Unread</i></h4>
						<p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
					</li>
                    <li>
						<span>2 hours ago</span>
						<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt=""></figure>
						<h4>Enzo Ferrari <i class="unread">Unread</i></h4>
						<p>In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
					</li> -->
                </ul>
			</div>
		</div>
        
    </div>
    <!-- /.container-fluid-->
</div>
<!-- /.container-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Doktora Danış 2022</small>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>

<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}]"></script>
<!-- Core plugin JavaScript-->
<script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{URL::asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{URL::asset('vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('vendor/jquery.selectbox-0.2.js')}}"></script>
<script src="{{URL::asset('vendor/retina-replace.min.js')}}"></script>
<script src="{{URL::asset('vendor/jquery.magnific-popup.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{URL::asset('js/admin.js')}}"></script>
<!-- Custom scripts for this page-->
<script src="{{URL::asset('vendor/dropzone.min.js')}}"></script>
<!-- WYSIWYG Editor -->
<script src="{{URL::asset('js/editor/summernote-bs4.min.js')}}"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.editor').summernote({
        fontSizes: ['10', '14'],
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']]
        ],
        placeholder: 'Write here your description....',
        tabsize: 2,
        height: 200
    });
</script>


<script>
    $(document).ready(function() {
        $('.education_select').select2({
            tags: true,
            placeholder: "Add every education information",
            allowClear: true,
            multiple: true,
        });

        $('.specialization_select').select2({
            tags: true,
            placeholder: "Ex: Piscologist, Pediatrician...",
            allowClear: true,
            multiple: true,
        });
    });


    function addService(){

        document.getElementById('pricing-list-container').insertAdjacentHTML('beforeend','<tr class="pricing-list-item"><td><div class="row"><div class="col-md-6">' +
            '<div class="form-group"><input name="service[]" type="text" class="form-control" placeholder="Title"></div></div>' +
            '<div class="col-md-4"><div class="form-group">' +
            '<input name="service_price[]" type="text" class="form-control"  placeholder="Price"></div></div>' +
            '<div class="col-md-2"><div class="form-group">' +
            '<a onclick="delService()" class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a></div></div></div></td></tr>');
    }


</script>


@livewireScripts
</body>
</html>
