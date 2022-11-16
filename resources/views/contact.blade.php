<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/vendors.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <x-home.header></x-home.header>
    <main>
        <div id="map_contact">
		<div style="width: 100%; height: 100%;"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=19%20May%C4%B1s,%20Hrant%20Dink%20Sok.%20No:61,%2034360%20%C5%9Ei%C5%9Fli/%C4%B0stanbul+(Doktora%20Dan%C4%B1%C5%9F)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe></div>
		</div>
		<!-- /map -->

        <div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3 col-md-4">
					<div id="contact_info">
						<h3>Contacts info</h3>
						<p>
							<b>WhatsApp:</b> <a href="">0 530 782 83 94</a><br><b>Mail:</b> <a href="">doktoradanis.724@gmail.com</a><br>
						</p>
						<p>
							<b>İlan teklifi almak için::</b> <a href="">0 530 782 83 94</a><br><b>Mail:</b> <a href="">doktoradanis.724@gmail.com</a><br>
						</p>
						<p>
							<b>İlan teklifi almak için::</b> <a href="">0 530 782 83 94</a><br><b>Mail:</b> <a href="">info@doktoradanis.net</a><br>
						</p>
					</div>
				</aside>
				<!--/aside -->
				<div class=" col-lg-8 col-md-8 ml-auto">
					<div class="box_general">
						<p>Doktoradanis.net web sitesi sağlıklı yaşam, hastalıklar, tedavi yöntemleri, hastaneler ve doktorlar hakkında doğru bilgiler almanızı, uzmanlarla iletişim kurmanız kolaylaştırmak için kurulmuş bağımsız bir dijital sağlık platformudur.</p>
						<p style="margin: 0;">Web sitemizden, hastalıklar ve tedavi yöntemleri ile ilgili doktorlar ve uzmanlara soru sorup iletişim kurabilir, onlarla doğrudan haberleşebilir faydalı bilgiler edinebilirsiniz.</p>
					</div>
					<div class="box_general">
						<h3>İletişim</h3>
						<div>
							<div id="message-contact"></div>
							<form method="post" id="contactform">
								@csrf
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="name_contact" name="name" placeholder="Name">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="lastname_contact" name="lastname" placeholder="Last name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="email" id="email_contact" name="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="form-group">
											<input type="text" id="phone_contact" name="telephone" class="form-control" placeholder="Phone number">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea rows="5" id="message_contact" name="message" class="form-control" style="height:100px;" placeholder="Hello world!"></textarea>
										</div>
									</div>
								</div>

								<input type="submit" value="Gönder" class="btn_1 add_top_20" id="submit-contact">
							</form>
						</div>
						<!-- /col -->
					</div>
				</div>
				<!-- /col -->
			</div>
			<!-- End row -->
		</div>
    </main>

    <x-home.footer></x-home.footer>

    <!-- COMMON SCRIPTS -->
    <script src="{{URL::asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{URL::asset('js/common_scripts.min.js')}}"></script>
    <script src="{{URL::asset('js/functions.js')}}"></script>
    <!-- Modernizr -->
    <script src="{{URL::asset('js/modernizr.js')}}"></script>
</body>
</html>