<?php 
session_start();
error_reporting('E_ALL');
include './super/lib/db.php';
include './navigation.php';
if (isset($_POST['logout']))
{
	session_destroy();
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meduli</title>

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/block.css">
    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/header-default.css">
    <link rel="stylesheet" href="assets/css/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/default.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>
<body style="font-family: 'Titillium Web', sans-serif;">
<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="?page=home" style="padding-top:30px;">
                    <!-- <img src="assets/img/logo1-default.png" alt="Logo"> -->
                    <h1 class="color-green">MEDULI</h1>
				</a>
				<!-- End Logo -->

				<!-- Topbar -->
				<div class="topbar">
					<ul class="loginbar pull-right">
						<?php 
							if($_SESSION){
						?>  
						<li class="hoverSelector">
							
							<a class="btn btn-primary" style="color:#fff;"><i class="fa fa-user" style="color:#fff;"></i> <?php echo  strtoupper($_SESSION['myname'])  ?></a>
							<ul class="languages hoverSelectorBlock">
								<li class="active">
								<form method="post">
									<button type="submit" name="logout" class="btn btn-danger btn-block text-white">
											Logout
									</button>
								</form>	
								</li>
							</ul>
						</li>
						<li class="topbar-devider"></li>
						<li>
							<a class="btn btn-primary" href="http://localhost/meduli/super/" target="blank" style="color:#fff;">
								Dashboard
							</a>		

						</li>
						<li class="topbar-devider"></li>
						<li><a href="#">Bantuan</a></li>
						
						<?php 
							}
							else {
						?>
						<li><a class="btn btn-u" href="?page=account" style="color:#fff;">Daftar / Login</a></li>
						<?php	}
						?>
						<li><a href="#">Bantuan</a></li>
					</ul>
				</div>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
                        <!--Main Block-->
                        <li><a href="?page=home">Beranda</a></li>
                        <!-- <li><a href="#">Tentang Kami</a></li> -->
                        <li><a href="?page=kontak">Kontak Kami</a></li>
					    
						<!-- Search Block -->
						<li>
							<i class="search fa fa-search search-btn"></i>
							<div class="search-open">
								<div class="input-group animated fadeInDown">
									<input type="text" class="form-control" placeholder="Masukan Kode Laporan">
									<span class="input-group-btn">
										<button class="btn-u" type="button">Go</button>
									</span>
								</div>
							</div>
						</li>
						<!-- End Search Block -->
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>
		<!--=== End Header ===-->

		

		<!--=== Content Part ===-->
		<div class="content-sm">
			<?php echo $content; ?>
		</div><!--/container-->
		<!-- End Content Part -->

		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
                            <h1 class="color-green">MEDULI</h1>
							<!-- <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a> -->
							<p>
							    Media bagi masyarakat (khususnya Generasi Milenial) untuk melaporkan segala permasalahan kesejahteraan sosial yang perlu segera mendapatkan penanganan.
							</p>
							
						</div><!--/col-md-3-->
						<!-- End About -->

						

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								Jl.Rumpin <br />
								Kabupaten Bogor <br />
								Phone: 123456 <br />
								Fax: 123456 <br />
								Email: <a href="mailto:info@anybiz.com" class="">info@milenialpeduli.com</a>
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2019 &copy; All Rights Reserved.
								
							</p>
						</div>

						
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
		

    <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="assets/js/back-to-top.js"></script>
	<script type="text/javascript" src="assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.js"></script>

    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/owl-carousel.js"></script>
	<script type="text/javascript" src="assets/js/parallax-slider.js"></script>
	<script type="text/javascript" src="assets/js/masking.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mask.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    

    <script>
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        $('#data-laporan').slimScroll({
            height: '700px'
        });

		$('#date').mask('00/00/0000');

    </script>
    <script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			OwlCarousel.initOwlCarousel();
			ParallaxSlider.initParallaxSlider();
            
		});
	</script>
	
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://http-techinfo-id.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
    </script>
</body>
</html>