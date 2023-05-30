<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php

	$ket_filter = "";

	if ($ket_filter != "") {
		$fbr = str_replace('%20', ' ', $ket_filter);
	} else {
		$fbr = $inisial;
	}
	?>

	<title>
		<?= $aplikasi->singkatan_unit ?> - <?= $fbr ?>
	</title>


	<meta name="keywords" content="Belanja , beli , Dekorasi , Rumah , HomeDepo , Homedepo , homedepo , Home , Depo , Marketplace , marketplace , Market , Place , place , Home Depo" />
	<meta name="description" content="Home Depo belanja puas - <?=$inisial?>">
	<meta name="author" content="aom.my.id">

	<meta name="google-site-verification" content="XRPMwVOkzLmV_Al_Szjam0g_LgW52iLAux6wDkn3_sM" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.jpg" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/homedepo_icon.jpg">

	<!-- Mobile Metas -->
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-elements.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-blog.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/skin-shop-8.css">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demos/style-shop.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demos/demo-shop-8.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

	<!-- Head Libs -->
	<script src="<?php echo base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>

	<!-- Head Libs -->
	<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>



	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

	<!-- Head Libs -->
	<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>
	<!-- <script src="<?php echo base_url() ?>assets/js/bootstraps/bootbox.min.js" type="text/javascript"></script> -->

	<script src="<?= base_url() ?>_assets\theme\js\script-tb.js"></script>
	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>";
	</script>
	<script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script>
</head>


<body>

	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 153, 'stickySetTop': '-1px', 'stickyChangeLogo': false}">
			<div class="header-body stickytb">

				<?php
				// $this->load->view('templates/bootstraps/menu_atas');
				?>

				<?= $this->load->view('templates/bootstraps/menu_tengah'); ?>

				<?= $this->load->view('templates/bootstraps/menu_kategori'); ?>

			</div>
		</header>

		<?= $this->load->view('templates/bootstraps/menu_responsive'); ?>


		<!-- form flyr -->
		<!-- <div class="modal show bs-modal" role="dialog" id="myModal">
			  <div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header" style="background: #db0c13; border-bottom: 1px solid #e5e5e5;">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<b class="modal-title" style="color:#fff;"> X </b>
						</button>
				  </div>

					<hr style="margin:0; padding:0;">

				  <div class="modal-body" style="padding:25px 25px 15px 95px;">

					<div class="form-group ">
						<div class="row">
							<img class="img-responsive" src="<?= base_url() ?>assets/img/iklan/flyer-hd.jpg" alt="homedepo" style="height:85%;">
						</div>
					</div>

				  </div>

				</div>
			  </div>
			</div> -->


		<!-- form login -->
		<div class="modal fade bs-modal" role="dialog" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header" style="background: #db0c13; border-bottom: 1px solid #e5e5e5;">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<b class="modal-title" style="color:#fff;"> X </b>
						</button>
						<h4 class="modal-title">
							<b style="color:#fff;"> LOGIN </b>
						</h4>
					</div>

					<hr style="margin:0; padding:0;">

					<div class="modal-body" style="padding:0 25px 25px 25px;">

						<div class="control-label labeled-form" style="text-align: center;padding:20px 0 20px 0;border-bottom: 1px solid #e5e5e5;font-weight:bold;">
							Silahkan Masuk <i class="fa fa-arrow-down" style="color:#1c2a5f"></i> untuk mendapatkan penawaran terbaik. <br>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-12" style="padding-top:10px;">
									<label class="control-label labeled-form" for="inputUsername">Nama User</label>
								</div>
								<div class="col-xs-12 tooltip-wide">
									<div class="input-group merged">
										<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-xs"></i></span>
										<input type="text" placeholder="Email" class="form-control " aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label class="control-label labeled-form" for="inputPassword">Kata Sandi</label>
								</div>
								<div class="col-xs-12 tooltip-wide">
									<div class="input-group merged">
										<span class="input-group-addon" id="basic-addon2"><i class="fa fa-key fa-xs"></i></span>
										<input type="password" placeholder="Kata Sandi" class="form-control " aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if(event.keyCode==13) login_click();">
									</div>
								</div>
							</div>
						</div>

						<div class="control-label labeled-form pull-left" style="font-weight:bold;">
							<b> <a href="#">Lupa Kata Sandi</a> </b>
						</div>

						<div class="control-label labeled-form pull-right" style="font-weight:bold;">
							Belum punya akun <i class="fa fa-arrow-right" style="color:#1c2a5f"></i>
							<b> <a href="<?= base_url() ?>daftar-buyer">Daftar</a> </b>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal"><b style="color:#1c2a5f;">Keluar</b></button>
						<button type="button" class="btn btn-tb" id="btn-login">Masuk</button>
					</div>




					<!-- <div class="modal-footer center">
						<div class="center" style="padding-bottom:10px;font-weight:bold;color:#1c2a5f">
							Atau Masuk Dengan
						</div>

						<div class="fb-login-button" data-width="350" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"></div>
					</div> -->


				</div>
			</div>
		</div>

		<div id="status"></div>

		<script>
			function statusChangeCallback(response) {

				var status_login_fb = response.status;

				// alert(status_login_fb);

				if (response.status === 'connected') { // Masuk ke halaman web dan Facebook Anda.
					// alert('Silahkan login Kembali !!!');
					testAPI();
				}
			}

			function checkLoginState() { // Dipanggil ketika seseorang selesai dengan Tombol Login.
				FB.getLoginStatus(function(response) { // Lihat penangan saat masuk
					statusChangeCallback(response);
				});
			}

			function testAPI() { // Menguji API Grafik setelah login. Lihat statusChangeCallback() untuk mengetahui kapan panggilan ini dilakukan.
				// console.log('Welcome!  Fetching your information.... ');
				FB.api('/me', function(response) {

					// var fbStatus = response.status;

					// var fbId = response.id;
					// var fbName = response.name;
					// var replaceName = fbName.replace(/ /g,"_-_");

					// alert(fbStatus);

					// var urlAuth = "<?php echo site_url(); ?>auth_login/fb/"+fbId+"/"+replaceName;
					// var redirect_url = "<?php echo site_url(); ?>home";
					//
					// $.ajax({
					//     type: 'GET',
					//     url: urlAuth,
					//     // data: response,
					//     success: function(){
					//       window.location.href = urlAuth;
					//     }
					// });

					// console.log('Successful login for: ' + response.name);
					document.getElementById('status').innerHTML =
						'&nbsp;&nbsp;&nbsp;&nbsp;  Terima kasih <b style="color:#1c2a5f">' + response.name + ' ( ' + response.id + ' ) </b> telah masuk !';
				});
			}

			window.fbAsyncInit = function() {
				FB.init({
					appId: '3260204117569404',
					xfbml: true, // Parsing plugin sosial di halaman web ini.
					version: 'v14.0' // Gunakan versi Graph API ini untuk panggilan ini.
				});

				// FB.AppEvents.logPageView();

				FB.getLoginStatus(function(response) { // Dipanggil setelah JS SDK diinisialisasi.
					statusChangeCallback(response); // Mengembalikan status login.
				});

				// FB.logout(function(response) {
				//    // Person is now logged out
				//
				//    document.getElementById('status').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp; Silakan masuk ' +
				//      'ke halaman web ini..';
				// });
			};



			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {
					return;
				}
				js = d.createElement(s);
				js.id = id;
				// js.src = "https://connect.facebook.net/id_ID/sdk.js";
				js.src = "https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

		<!-- <script>
			  window.fbAsyncInit = function() {
			    FB.init({
			      appId      : '3260204117569404',
			      xfbml      : true,
			      version    : 'v14.0'
			    });
			    FB.AppEvents.logPageView();
			  };

			  (function(d, s, id){
			     var js, fjs = d.getElementsByTagName(s)[0];
			     if (d.getElementById(id)) {return;}
			     js = d.createElement(s); js.id = id;
			     js.src = "https://connect.facebook.net/en_US/sdk.js";
			     fjs.parentNode.insertBefore(js, fjs);
			   }(document, 'script', 'facebook-jssdk'));
			</script> -->
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0&appId=3260204117569404&autoLogAppEvents=1" nonce="abKr11wq"></script>
