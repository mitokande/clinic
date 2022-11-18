<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Makale Ekle - Doktora Danış</title>

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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .submit-btn{
            width: 100%;
            background: #1a73e8 !important;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .select2-selection{
            padding: 8px !important;
        }
        .custom-input{
            width: 100%;
            border: 1px solid #aaa !important;
            border-radius: 5px !important;
            padding: 8px !important;
        }
        .d-flex{
            display: flex;
        }
        .flex-column{
            flex-direction: column;
        }
        .g-20{
            gap: 20px;
        }
        .g-5{
            gap: 5px;
        }
        label h2{
            color: #1a73e8 !important;
            font-size: 1.44rem;
        }
        #container {
            width: 1000px;
            margin: 20px auto;
        }
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
<!-- Navigation-->
{{--dd($doctor->is_admin)--}}
@livewire('doctor-navbar')
@php
    $fields = \App\Models\MedicineField::all();

@endphp
<!-- /Navigation-->
<div class="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Messages</li>
        </ol>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column g-20 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="d-flex flex-column g-5 p-6 bg-white border-b border-gray-200">
                        <label for="bTitle"><h2>Blog Başlığı</h2></label>
                        <input required class="custom-input" id="bTitle" name="bTitle" type="text">
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="d-flex flex-column g-5 p-6 bg-white border-b border-gray-200">
                        <label for="bCategories"><h2>Blog Kategorisi</h2></label>
                        <select  class="custom-input js-example-basic-multiple" id="bCategories" name="bCategories[]" multiple="multiple">
                            @foreach($fields as $field)
                                <option value="{{$field->name}}">{{$field->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex flex-column g-5 p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <label for=""><h2>Blog Büyük Resmi</h2></label>
                    <div>
                        <input required name="bImg" type="file" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                        <img id="pic" />
                    </div>
                </div>
                <div class="d-flex flex-column g-5 p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <label for="editor"><h2>Blog Metni</h2></label>
                    <textarea  name="bContent" id="editor"></textarea>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <input class="submit-btn" type="submit">
                    </div>
                </div>
            </div>
        </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/super-build/ckeditor.js"></script>
<script>
    CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
        toolbar: {
            items: [
                'exportPDF','exportWord', '|',
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                'textPartLanguage', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        },
        placeholder: 'Welcome to CKEditor 5!',
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        fontSize: {
            options: [ 10, 12, 14, 'default', 18, 20, 22 ],
            supportAllValues: true
        },
        htmlSupport: {
            allow: [
                {
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }
            ]
        },
        htmlEmbed: {
            showPreviews: true
        },
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        mention: {
            feeds: [
                {
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }
            ]
        },
        removePlugins: [
            'CKBox',
            'CKFinder',
            'EasyImage',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            'MathType'
        ]
    });
</script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            tags: true,
            placeholder: "Add every education information",
            allowClear: true,
            multiple: true,
        });
    });
</script>
</body>
</html>
