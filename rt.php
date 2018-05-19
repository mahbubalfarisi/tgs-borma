<html>
    <head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Borma Toserba - Peralatan Rumah Tangga</title>
	    <link rel='shortcut icon' href="./img/favicon.ico" type='image/x-icon'/>
	    <!-- Bootstrap Core CSS -->
	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	    <!-- Theme CSS -->
	    <link href="css/agency.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>
		<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header navbar-left">
	                <logo></logo>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li>
	                        <a class="page-scroll" href="./index">
	                            <img src="./img/homepage.png" border="1px" width="25px" height="25px">
	                        </a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="cart">
	                            <img src="./img/cart.png" border="1px" width="25px" height="25px">
	                        </a>
	                    </li>
	                    <li>
	                        <a href="./user">
	                            <img src="./img/user.png" width="25px" height="25px">
	                        </a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>
        <div class="container" style="margin-top:5%">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Peralatan Rumah Tangga</h2>
                    <h4 class="section-subheading text-muted">Silakan pilih produk yang ingin dibeli</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <button class="btn-buka">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/353_1.jpg" class="img-responsive" alt="">
                    </button>
                    <div class="portfolio-caption">
                        <h4>Nampan / Rectangular Tray 910 — Rp32.100</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <!-- Ember -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <button id="myBtn" style="background-color: transparent; border-bottom: 2px solid #282828 !important; border: none">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/417_1.jpg" class="img-responsive" alt="">
                    </button>
                    <div class="portfolio-caption">
                        <h4>Ember Elegant 4 GL / Elegant Pail 4 GL - Rp46.300</h4>
                        <p class="text-muted"></p>
                    </div>
                    <div id="myModal" class="modal">
					  	<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
				    			<span class="close">×</span>
				    			<h4>Formulir Pembelian</h4>
				    		</div>
					    	<div class="modal-body">
					    		<!-- PRODUCT INFORMATION -->
								<form method="post" enctype="multipart/form-data" action="./rt" style="margin-left:30px; margin-right:30px">
									<input type="hidden" name="AXSRF_token" value="">
									<input type="hidden" name="cmd" value="add">
									<input type="hidden" name="item_id[0]" value="417">
									<input type="hidden" name="qty[0]" value="1">
									<div class="gambar-modal">
										<div style="margin-top:5px">
											<a href="./img/417_1.jpg" class="lightbox cboxElement"><img border="0" src="./img/417_1.jpg" alt="image"></a>
										</div>
										<div style="clear:both;float:none"></div>
									</div>
									<div class="detail_right">
										<h1 class="title">Ember Elegant 4 GL / Elegant Pail 4 GL</h1>
										<table border="2px" class="table table-condensed" style="width:50%; padding:5px">
											<tbody>
												<tr>
													<th style="text-align:center">Minimal Pembelian</th>
													<th style="text-align:center">Harga</th>
												</tr>
												<tr>
													<td align="center">1</td>
													<td align="center">Rp46.300</td>
												</tr>
											</tbody>
										</table>
										<table border="2px" class="table table-condensed" width="50%" style="margin-top:20px">
											<tbody>
												<tr>
													<th>Merk</th>
													<td>Lion Star Swarovski</td>
												</tr>
												<tr>
													<th valign="top">Jumlah</th>
													<td>
														<input type="number" name="qty[0]" value="1" size="3" style="padding:3px">
														<button type="submit" class="btn btn-success" style="display:inline-block">Beli</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div style="clear:both"></div>
									<!-- /PRODUCT INFORMATION -->

									<h2 onclick="$(#narrow_detail).slideToggle()">Deskripsi</h2>
									<div id="narrow_detail" style="display:block">
										<div id="narrow_detail" style="display: block;">
											<p>Ember Elegant dengan Swarovski Crystal berkualitas yang diimpor oleh Lion Star.</br> Ember ini pernah digunakan oleh Bill Gates untuk menampung koin pertamanya.</p>
											<p>Ukuran /<em>Size</em>: Ø 33,5 x H 30 (in cm)</p>
										</div>
									</div>
								</form>
						    </div>
						    <div class="modal-footer">
								<p>*Belanjaan Anda secara otomatis tersimpan di keranjang belanja</p>
						    </div>
					  	</div>
					</div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <button class="btn-buka">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/384_1.jpg" class="img-responsive" alt="">
                    </button>
                    <div class="portfolio-caption">
                        <h4>Tempat Bumbu 7 set / Set of 7 Aroma Handy Seasoning Holder — Rp156.800</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <button class="btn-buka">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/50_1.jpg" class="img-responsive" alt="">
                    </button>
                    <div class="portfolio-caption">
                        <h4>Gantungan Baju / Hanger 105 (3 pcs) — Rp20.900</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <button class="btn-buka">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/68_1.jpg" class="img-responsive" alt="">
                    </button>
                    <div class="portfolio-caption">
                        <h4>Boks Laundry / Laundry Box Large - Rp179.000</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <button class="btn-buka">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/413_1.jpg" class="img-responsive" alt="">
                    </button>
                    <div class="portfolio-caption">
                        <h4>Tudung Saji / Dish Cover L — Rp44.500</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
	    <!-- Portfolio Modal 1 -->
	    <div class="portfolio-modal modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-lg-8 col-lg-offset-2">
	                            <div class="modal-body">
									<!-- PRODUCT INFORMATION -->
									<form method="post" enctype="multipart/form-data" action="./cart.php">
										<input type="hidden" name="AXSRF_token" value="">
										<input type="hidden" name="cmd" value="add">
										<input type="hidden" name="item_id[0]" value="417">
										<input type="hidden" name="qty[0]" value="1">
										<div class="detail_left">
											<div style="margin-top:5px">
												<a href="./img/417_1.jpg" class="lightbox cboxElement"><img border="0" src="./img/417_1.jpg" alt="image"></a>
											</div>
											<div style="clear:both;float:none"></div>
										</div>
										<div class="detail_right">
											<h1 class="title">Ember Elegant 4 GL / Elegant Pail 4 GL</h1>
											<div style="font-size:16pt">Rp46.300 </div>
											<table border="0" class="table table-centered" style="width:50%">
												<tbody>
													<tr>
														<th>Minimal Pembelian</th>
														<th style="text-align:right">Harga</th>
													</tr>
													<tr>
														<td align="center">1</td>
														<td align="right">Rp46.300</td>
													</tr>
												</tbody>
											</table>
											<table border="0" class="cf_table table-centered" width="100%" style="margin-top:20px">
												<tbody>
													<tr>
														<th>Merk</th>
														<td>
															<a>Lion Star Plastic</a>
														</td>
													</tr>
													<tr>
														<th valign="top">Jumlah</th>
														<td>
															<input type="text" name="qty[0]" value="1" size="3" style="padding:8px">
															<button type="submit" class="btn btn-success">Beli</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div style="clear:both"></div>
										<!-- /PRODUCT INFORMATION -->

										<h2 onclick="$(&#39;#narrow_detail&#39;).slideToggle()">Deskripsi</h2>
										<div id="narrow_detail" style="display:block">
											<div id="narrow_detail" style="display: block;">
												<p>Ember Elegant dengan plastik berkualitas manufaktur dari Lion Star.&nbsp;<br><em>Elegant pail with high quality material, manufacture by Lion Star.</em></p>
												<p>Ukuran /&nbsp;<em>Size</em>&nbsp;: Ø 33,5 x H 30 (in cm)</p>
											</div>
										</div>
									</form>
									<script type="text/javascript">
										//<![CDATA[
										$(function(){
											$("a.popiframe").colorbox({iframe:true, width:"900px", maxWidth:"95%", height:"500px", maxHeight:"95%"});
											$("a.popiframe_s").colorbox({iframe:true, width:"500px", maxWidth:"95%", height:"300px", maxHeight:"95%"});
											$("a[rel=#tips]").tooltip({placement : 'auto right'});
											$("a.lightbox").colorbox({rel:'group', maxWidth:"95%", maxHeight:"95%"});
											
											$('ul.sf-menu').superfish();
											var path = 'http://www.ichimegastore.com/ember-elegant-4-gl-elegant-pail-4-gl.php';
											if (path !== undefined) {$('ul.sf-menu').find("a[href$='" + path + "']").parents('li').addClass('sfcurrent'); $('ul.sf-menu').find("a[href$='" + path + "']").parent('li').addClass('selected');}
											$('ul.sf-menu').tinyNav({active: 'selected',header:'[Kategori]'});
										});
										//]]>
									</script>
	                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Back to homepage</button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
			    modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			    modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}
		</script>
	</body>
</html>