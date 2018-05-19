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
	                        <a href="./login">
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
					<div class="detail_right">
						</br>
						</br>
						<table border="0" class="table table-condensed" style="width:90%; margin:auto">
							<tbody>
								<tr>
									<th>TERIMA KASIH ATAS KEPERCAYAAN ANDA.</th>
								</tr>
								<tr>
									<th>BARANG YANG ANDA BELI AKAN SEGERA TIBA DI RUMAH ANDA.</th>
								</tr>
								<tr>
									<th></th>
								</tr>
							</tbody>
						</table>
						</br>
						</br>
						</br>
						<table>
							<tbody>
								<tr>
									<form action="./index">
									    <input type="submit" value="Kembali Berbelanja" style="width:100%; background-color:#fed136" />
									</form>
								</tr>
							</tbody>
						</table>
					</div>
                </div>
            </div>
	    </div>

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
	</body>
</html>