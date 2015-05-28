<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Daftar</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
				body { 
					background: url("img/5.png");
					background-repeat: no-repeat;
					background-size:contain;  
					background-color: black;

					
				}
				
				#tgl-lahir {
					padding-left: 2em;
				}

				#jenis-kelamin {
					padding-left : 2em;
				}

				select{
					
					width : 25%;
					display: inline;
				}

				#radio-container {
					padding-left : 3em;
				}

				label {
					font-size : 1.1em;
					font-family : monaco;
				}
				/*.login-box {
					float : right;
				}*/
			</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="../"><i class="halflings-icon home"></i></a>
						
					</div>
					<h2>Buat akun</h2>

					<form class="form-horizontal" action="../daftar_check.php" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Nama">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="nama" id="nama" type="text" placeholder="masukkan nama anda" required title="misal : Santika Devi" />
							</div>
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="masukkan usename anda" required title="misal : zetsuen" />
							</div>
							<div class="input-prepend" title="Email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email" id="email" type="email" placeholder="masukkan email anda" required title="misal : lalala@mail.com" />
							</div>
							<div class="input-prepend" title="password">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="password" id="username" type="password" placeholder="masukkan password anda" required title="misal : ini password" />
							</div>
							 <div id="jenis-kelamin">
								<label>Jenis Kelamin</label>
								<div id="radio-container">
								  <label class="radio">
									<input type="radio" name="jenis_kelamin" id="optionsRadios1" value="L" checked="">
									Laki-laki
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="jenis_kelamin" id="optionsRadios2" value="P">
									Perempuan
								  </label>
								</div>
							  </div>
							  <br/>

							  <div id="tgl-lahir">
							  <label>Tanggal Lahir</label>
						        <!-- <select>
						          <option value="1" selected="selected">1</option>
						          <option value="2">1</option>
						          <option value="3">2</option>
						          <option value="4">3</option>
						          <option value="5">4</option>
						          <option value="5">5</option>
						          <option value="6">6</option>
						          <option value="7">7</option>
						          <option value="8">8</option>
						          <option value="9">9</option>
						          <option value="10">10</option>
						          <option value="11">11</option>
						          <option value="12">12</option>
						          <option value="13">13</option>
						          <option value="14">14</option>
						          <option value="15">15</option>
						          <option value="16">16</option>
						          <option value="17">17</option>
						          <option value="18">18</option>
						          <option value="19">19</option>
						          <option value="20">20</option>
						          <option value="21">21</option>
						          <option value="22">22</option>
						          <option value="23">23</option>
						          <option value="24">24</option>
						          <option value="25">25</option>
						          <option value="26">26</option>
						          <option value="27">27</option>
						          <option value="28">28</option>
						          <option value="29">29</option>
						          <option value="30">30</option>
						          <option value="31">31</option>
						        </select>
						        <select>
						          <option value="1" selected="selected">1</option>
						          <option value="2">2</option>
						          <option value="3">3</option>
						          <option value="4">4</option>
						          <option value="5">5</option>
						          <option value="6">6</option>
						          <option value="7">7</option>
						          <option value="8">8</option>
						          <option value="9">9</option>
						          <option value="10">10</option>
						          <option value="11">11</option>
						          <option value="12">12</option>
						        </select>
						        <select>
						          <option value="1" selected="selected">1991</option>
						          <option value="2">1992</option>
						          <option value="3">1993</option>
						          <option value="4">1994</option>
						          <option value="5">1995</option>
						          <option value="6">1996</option>
						          <option value="7">1997</option>
						          <option value="8">1998</option>
						          <option value="9">1999</option>
						          <option value="10">2000</option>
						          <option value="11">2001</option>
						          <option value="12">2002</option>
						        </select> -->
						        <input type="date" name="tgl_lahir"/>
						       </div>
							  
							  <!-- <div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div> --> 
							

							<!-- p_user_nama VARCHAR(30),p_user_username VARCHAR(10),p_user_email VARCHAR(30), p_user_pass VARCHAR(100),p_user_jk CHAR(1),p_user_tgllahir DATE,p_user_atk INT -->
							<div class="clearfix"></div>

							<!-- <div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="masukkan kata sandi"/>
							</div> -->
							<div class="clearfix"></div>
							
							

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Daftar</button>
							</div>
							<div class="clearfix"></div>
							</fieldset>
					</form>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
