<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Aplikasi Ekspedisi BMN</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/elevate/css/base.css"> 
   <link rel="stylesheet" href="<?php echo base_url()?>assets/elevate/css/vendor.css"> 
   <link rel="stylesheet" href="<?php echo base_url()?>assets/elevate/css/main.css">    

   	<link rel="stylesheet" href="<?php echo base_url()?>assets/elevate/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/elevate/css/style.css?v=o1"> <!-- Resource style -->
   <!-- script
   ================================================== -->
	<script src="<?php echo base_url()?>assets/elevate/js/modernizr.js"></script>
	<script src="<?php echo base_url()?>assets/elevate/js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/imigrasi/logoIMIFIX.png">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

</head>

<body id="top">
	
	<!-- header 
   ================================================== -->
   <header class="main-header">
   	
   	<div class="logo">
	      <a href="index.html">Elevate</a>
	   </div> 

	   <a class="menu-toggle" href="#"><span>Menu</span></a>   	

   </header>

   <!-- main navigation 
   ================================================== -->
   <nav id="menu-nav-wrap">

   	<h3>Navigation</h3>   	
		<ul class="nav-list">
			<li><a class="smoothscroll" href="#intro" title="">Home</a></li>
			<li><a class="smoothscroll" href="#features" title="">Features</a></li>
			<li><a class="smoothscroll" href="#infos" title="">Product Info</a></li>
			<li><a class="smoothscroll" href="#stats" title="">Stats</a></li>
			<li><a class="smoothscroll" href="#pricing" title="">Pricing</a></li>					
			<li><a class="smoothscroll" href="#testimonials" title="">Testimonials</a></li>	
			<li><a class="smoothscroll" href="#download" title="">Download</a></li>	
			<li><a class="smoothscroll" href="#subscribe" title="">Newsletter</a></li>			
		</ul>

		<h3>We Recommend Dreamhost</h3>  
		<p class="sponsor-text">
			Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">DreamHost</a>.
			Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
			<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
		</p>

		<div class="action">
			<a class="button" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
		</div>

	</nav> <!-- /menu-nav-wrap -->


	<!-- main content wrap
   ================================================== -->
   <div id="main-content-wrap">


		<!-- main content wrap
   	================================================== -->
   	<section id="intro">

		   <!-- <div class="shadow-overlay"></div> -->
		   
		   <div class="row intro-content">
		   	<div class="col-twelve">

		   		<h3 class="animate-intro" style="margin-top: -65px;">Aplikasi Ekspedisi BMN</h3>
			  		
					<div class="cd-tabs">
						<nav>
							<ul class="cd-tabs-navigation">
								<li><a data-content="new" class="selected" href="#0">Buat Kode Baru</a></li>
								<li><a data-content="received" href="#0">Barang Diterima</a></li>
								<li><a data-content="out" href="#0">Barang Keluar</a></li>
								<li><a data-content="search" href="#0">Cari Barang</a></li>
							</ul> <!-- cd-tabs-navigation -->
						</nav>

						<ul class="cd-tabs-content">
							<li data-content="new" class="selected">
								<form id="mc-form" class="group" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-twelve tab-full left animate-this" data-animate="fadeInRight">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Nama Barang</label>
							   				<input style="width: 100%;" type="text" value="" name="kode" class="email" id="mce-EMAIL" placeholder="Masukkan Nama Barang..." required="">
							   			</div>
				               		</div> <!-- /row -->										
				               		<div class="row">
					               		<div class="col-twelve tab-full left animate-this" data-animate="fadeInRight">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Tipe Barang</label>
							   				<select style="width: 100%">
							   					<option>Berkas</option>
							   					<option>Lemari</option>
							   					<option>Komputer</option>
							   					<option>Kursi</option>
							   				</select>
							   				
							   			</div>
				               		</div> <!-- /row -->										
				               		<div class="row">
					               		<div class="col-twelve tab-full left animate-this" data-animate="fadeInRight">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Lokasi</label>
							   				<select style="width: 100%">
							   					<option>Ruang 1</option>
							   					<option>Ruang 2</option>
							   					<option>Ruang 3</option>
							   					<option>Ruang 4</option>
							   				</select>
							   				<select style="width: 100%">
							   					<option>Rak 1</option>
							   					<option>Rak 2</option>
							   					<option>Rak 3</option>
							   					<option>Rak 4</option>
							   				</select>
							   			</div>
				               		</div> <!-- /row -->										
				               		<div class="row">
				               			<div class="col-four tab-full left animate-this"  data-animate="fadeInRight">
								   			<input type="submit" value="Buat Baru" name="subscribe" class="button">
								   		</div>				   		
				               		</div>
								</form>
							</li>

							<li data-content="received">
								<form id="mc-form" class="group" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
							   				<input style="width: 100%;" type="text" value="" name="kode" class="email" id="mce-EMAIL" placeholder="Masukkan Kode Barcode..." required="">
							   			</div>

								   		<div class="col-four tab-full right animate-this"  data-animate="fadeInLeft">
								   			<input type="submit" value="Terima" class="button large">
								   		</div>				   		
				               		</div> <!-- /row -->										
								</form>
							</li>

							<li data-content="out">
								<form id="mc-form" class="group" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-eight tab-full left animate-this" data-animate="fadeInRight">					
							   				<input style="width: 100%;" type="text" value="" name="kode" class="email" id="mce-EMAIL" placeholder="Masukkan Kode Barcode..." required="">
							   			</div>

								   		<div class="col-four tab-full right animate-this"  data-animate="fadeInRight">
								   			<input type="submit" value="Keluarkan" class="button large">
								   		</div>				   		
				               		</div> <!-- /row -->										
								</form>
							</li>

							<li data-content="search">
								<form id="mc-form" class="group" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
							   				<input style="width: 100%;" type="text" value="" name="kode" class="email" id="mce-EMAIL" placeholder="Masukkan Kode Barcode..." required="">
							   			</div>

								   		<div class="col-four tab-full right animate-this"  data-animate="fadeInLeft">
								   			<input type="submit" value="Cari &#x1F50D;" name="subscribe" class="button large">
								   		</div>				   		
				               		</div> <!-- /row -->										
								</form>
							</li>
						</ul> <!-- cd-tabs-content -->
					</div> <!-- cd-tabs -->
			  	</div> <!-- /twelve --> 		   			
		   </div> <!-- /row -->   

		</section> <!-- /intro -->	   
   
   </div> <!-- /main-content-wrap -->


   <!-- footer
	================================================== -->
	<footer id="main-footer">

	   <div class="footer-info-wrap">

	   	<div class="row footer-info">

	  		<div class="col-four tab-full">
	  			<h4><i class="icon-location-map-1"></i> Address</h4><br>
	  			<p style="color:white;"> 
	         		Jl. H. R. Rasuna Said Kav.X-6 Nomor 8<br>
	         		Kuningan, Jakarta Selatan<br>
	         		12940  Jakarta
	         	</p>
	  		</div>

		   	<div class="col-four tab-full collapse">
	   			<h4><i class="icon-phone-incoming"></i> Contacts</h4><br>
	   			<p style="color:white;">Call Center : (021) 5225029/ 5225028<br>
				   	Telefax : - <br>
				   	Email : humas@imigrasi.go.id			     
				   </p>
	   		</div>

	   		<div class="col-four tab-full">
	   			<h4><i class="icon-organization-hierarchy-3"></i> External Links</h4>

				   <ul class="footer-link-list">
				   	<li><a href="#"></a></li>
				   	<li><a href="#"></a></li>
				   	<li><a href="#"></a></li>
				   </ul>
	   		</div>
		   		
		  	</div>
	   </div> <!-- /footer-info-wrap -->
	   	
	   <div class="footer-bottom"> 

	   	<div class="copyright">
		     	<span>© Copyright Pengelolahan BMN dan Layanan Pengadaan 2017.</span> 
		   </div>  		
   	</div>
	   	
   </footer>   

   <div id="go-top">
		<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
	</div>

   <!-- preloader
   ================================================== -->
   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="<?php echo base_url()?>assets/elevate/js/jquery-2.1.3.min.js"></script>
   <script src="<?php echo base_url()?>assets/elevate/js/tab_pane.js"></script> <!-- Resource jQuery -->
   <script src="<?php echo base_url()?>assets/elevate/js/plugins.js"></script>
   <script src="<?php echo base_url()?>assets/elevate/js/main.js"></script>

</body>

</html>