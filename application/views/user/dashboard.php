<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
	<?php $this->load->library('session');
		$id = $this->session->userdata('id_login');
		if(!$id)
			redirect(base_url());
	?>
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
	      <a href="<?php echo base_url()?>/login">Ekspedisi</a>
	   </div> 

	   <!-- <a class="menu-toggle" href="#"><span>Menu</span></a>   	 -->

   </header>

   <!-- main navigation 
   ================================================== -->
   <!-- <nav id="menu-nav-wrap">

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
			<! Simply type	the promocode in the box labeled “Promo Code” when placing your order. >
		</p>

		<div class="action">
			<a class="button" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
		</div>

	</nav> --> <!-- /menu-nav-wrap -->


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
			  		<?php if(!empty($error)) echo "<div align='center' style='padding: 15px; background-color:#f2dede; margin-bottom: 15px;''>$error</div>"; ?>
			  		<?php if(!empty($sukses)) echo "<div align='center' style='padding: 15px; background-color:#dff0d8; margin-bottom: 15px;''>$sukses</div>"; ?>
					<div class="cd-tabs">
						<nav>
							<ul class="cd-tabs-navigation">
								<li><a data-content="new" <?php if(!empty($selected_kode_baru)) echo "class='selected'";?> href="#0">Buat Kode Baru</a></li>
								<li><a data-content="store" <?php if(!empty($selected_masuk)) echo "class='selected'";?> href="#0">Barang Diterima</a></li>
								<li><a data-content="out" <?php if(!empty($selected_keluar)) echo "class='selected'";?> href="#0">Barang Keluar</a></li>
								<li><a data-content="settings" <?php if(!empty($selected_cari)) echo "class='selected'";?> href="#0">Cari Barang</a></li>
							</ul> <!-- cd-tabs-navigation -->
						</nav>

						<ul class="cd-tabs-content">
							<li data-content="new" <?php if(!empty($selected_kode_baru)) echo "class='selected'";?>>
								<div id="errordiv" align="center" style="padding: 15px; background-color:#f2dede; margin-bottom: 15px;"></div>
								<form id="create-form" action="<?php echo base_url()?>index.php/form/create_barang" method="post" enctype="multipart/form-data"  class="group" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-six tab-full left animate-this" data-animate="fadeInRight" style="margin-bottom: -45px;">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Nama Barang</label>
							   				<input style="width: 100%; height: 80%;" type="text" name="nama_barang" placeholder="Masukkan Nama Barang..."/>
							   			</div>
							   			<div class="col-six tab-full left animate-this" data-animate="fadeInRight">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Tipe Barang</label>
							   				<select id="jenis_barang" name="jenis_barang" style="width: 100%">
							   					<option value="null">------  Pilih Tipe barang  ------</option>
							   					<?php
							   						foreach ($jenis_barang as $key) 
							   						{
							   							echo "<option value='$key->dev_id' data-has_serial='$key->has_serial' >$key->dev_name</option>";
							   						}
							   					?>
							   				</select>
							   				
							   			</div>
				               		</div> <!-- /row -->
				               		<div id="row_no_berkas" class="row">
				               			<div class="col-twelve tab-full left animate-this" data-animate="fadeInRight" style="margin-bottom: -15px;">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>No. Berkas / No. Serial</label>
							   				<input style="width: 100%; height: 80%;" type="text" id="no_berkas" name="no_berkas"  placeholder="Masukkan Nomor Berkas...">
							   			</div>
				               		</div>	
				               		<div class="row">
				               			<div class="col-six tab-full left animate-this" data-animate="fadeInRight" style="margin-bottom: -15px;">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Brand / Pembuat</label>
							   				<input style="width: 100%; height: 80%;" type="text" name="brand"  id="mce-EMAIL" placeholder="Masukkan Brand.."/>
							   			</div>
							   			<div class="col-six tab-full left animate-this" data-animate="fadeInRight" style="margin-bottom: -15px;">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Tipe Model / Tipe Berkas</label>
							   				<input style="width: 100%; height: 80%;" type="text" id="tipe_berkas" name="tipe_berkas"  placeholder="Masukkan Tipe Berkas..." >
							   			</div>
				               		</div>								
				               		<div class="row">
					               		<div class="col-twelve tab-full left animate-this" data-animate="fadeInRight">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Lokasi</label>
							   				<select name="lokasi" id="lokasi" style="width: 100%">
							   					<option value="">------  Pilih Lokasi  ------</option>
							   					<?php
							   						foreach ($location as $key) 
							   						{
							   							echo "<option value='$key->stdev_id'>$key->stdev_location_name</option>";
							   						}
							   					?>
							   				</select>
							   				<select name="detail_lokasi" id="detail_lokasi" style="width: 100%">
							   					
							   				</select>
							   			</div>
				               		</div> <!-- /row -->										
				               		<div class="col-six tab-full left animate-this" data-animate="fadeInRight" style="margin-bottom: -30px;">					
							   				<label class="animate-this" data-animate="fadeInRight" style='font-family: "roboto-regular", sans-serif; color:red; text-align: left; margin-left: 6px; margin-bottom: 15px;'>Upload File Pendukung</label>
							   				<input style="width: 100%; height: 80%;" type="file"  name="files"  placeholder="Masukkan Nama Barang..."/>
							   			</div>
				               		<div class="row">
				               			<div class="col-four tab-full left animate-this"  data-animate="fadeInRight">
								   			<input type="submit" value="Buat Baru" class="button">
								   		</div>				   		
				               		</div>
								</form>
							</li>

							<li data-content="store" <?php if(!empty($selected_masuk)) echo "class='selected'";?>>
								<form id="mc-form" action="<?php echo base_url()?>index.php/form/terima" method="post" class="group" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
							   				<input style="width: 100%;" type="text"  name="kode"  id="mce-EMAIL" placeholder="Masukkan Kode Barcode..." required="">
							   			</div>

								   		<div class="col-four tab-full right animate-this"  data-animate="fadeInLeft">
								   			<input type="submit" value="Terima" class="button large">
								   		</div>				   		
				               		</div> <!-- /row -->										
								</form>
							</li>

							<li data-content="out" <?php if(!empty($selected_keluar)) echo "class='selected'";?>>
								<form id="mc-form" action="<?php echo base_url()?>index.php/form/keluar" method="post" class="group" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-eight tab-full left animate-this" data-animate="fadeInRight">					
							   				<input style="width: 100%;" type="text"  name="kode"  id="mce-EMAIL" placeholder="Masukkan Kode Barcode..." required="">
							   			</div>

								   		<div class="col-four tab-full right animate-this"  data-animate="fadeInRight">
								   			<input type="submit" value="Keluarkan" class="button large">
								   		</div>				   		
				               		</div> <!-- /row -->										
								</form>
							</li>

							<li data-content="settings" <?php if(!empty($selected_cari)) echo "class='selected'";?>>
								<form id="mc-form" class="group" action="<?php echo base_url()?>index.php/form/search" method="post" novalidate="true" autocomplete="off">
					               	<div class="row">
					               		<div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
							   				<input style="width: 100%;" type="text" name="query" placeholder="Masukkan Kata Kunci..." required="">
							   			</div>

								   		<div class="col-four tab-full right animate-this"  data-animate="fadeInLeft">
								   			<input type="submit" value="Cari &#x1F50D;" class="button large">
								   		</div>				   		
				               		</div> <!-- /row -->										
								</form>
								<?php if(!empty($submitted)) echo "<div align='center' style='padding: 15px; background-color:#f2dede; margin-bottom: 15px;''>$submitted</div>"; ?>
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

	  		<div class="col-six tab-full">
	  			<h4><i class="icon-location-map-1"></i> Address</h4><br>
	  			<p style="color:white;"> 
	         		Jl. H. R. Rasuna Said Kav.X-6 Nomor 8<br>
	         		Kuningan, Jakarta Selatan<br>
	         		12940  Jakarta
	         	</p>
	  		</div>

		   	<div class="col-six tab-full collapse">
	   			<h4><i class="icon-phone-incoming"></i> Contacts</h4><br>
	   			<p style="color:white;">Call Center : (021) 5225029/ 5225028<br>
				   	Telefax : - <br>
				   	Email : humas@imigrasi.go.id			     
				   </p>
	   		</div>
	   		
	   		<!-- <div class="col-four tab-full">
	   			<h4><i class="icon-organization-hierarchy-3"></i> External Links</h4>

				   <ul class="footer-link-list">
				   	<li><a href="#"></a></li>
				   	<li><a href="#"></a></li>
				   	<li><a href="#"></a></li>
				   </ul>
	   		</div> -->
		   		
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
   <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script src="<?php echo base_url()?>assets/elevate/js/tab_pane.js"></script> <!-- Resource jQuery -->
   <script src="<?php echo base_url()?>assets/elevate/js/plugins.js"></script>
   <script src="<?php echo base_url()?>assets/elevate/js/main.js"></script>
   <script type="text/javascript">
		$(document).ready(function()
		{
		    // validate signup form on keyup and submit
		    $("#create-form").validate({
				errorLabelContainer: '#errordiv',        
		        rules: {
		            nama_barang: {required : true},
					jenis_barang: {required : true},
					brand: {required : true},
					lokasi: {required : true}
		        },
		        messages: {
		            nama_barang: "Mohon masukkan nama barang. Deskripsikan sebaik mungkin.",
		            jenis_barang: "Mohon pilih jenis barang yang tersedia.",
		            brand: "Mohon masukkan nama pabrik / vendor / pembuat barang",
		            lokasi: "Mohon masukkan lokasi tempat barang disimpan"
		        }
		    });
			$('#errordiv').hide();  
			$('#row_no_berkas').hide();  
			$('#detail_lokasi').hide();  
			$('#jenis_barang').on('change', function() {
			  
			  if($(this).find(':selected').data('has_serial') == 1)
			  {
			  	$('#row_no_berkas').show();  
			  }
			});
			$('#lokasi').on('change', function() {
			$.ajax({    
		        type: "POST",
		        url: "<?php echo base_url()?>index.php/form/ajax_detail_lokasi",             
		        cache: false,
		        data: 'id_loc='+this.value,   
		        success: function(response){                    
		           //console.log();
		           res = JSON.parse(response);
		           if(res.length > 0)
		           {
		           		$("#detail_lokasi option").remove();
		           		html = "";
		           		for(i=0; i<res.length; i++)
		           		{
		           			$("#detail_lokasi").append("<option value='"+res[i].ld_id+"'>"+res[i].description+"</option>");
		           		}
		           		$("#detail_lokasi").show();	
		           }
		        }

			    });
			});
		});
   </script>
</body>

</html>