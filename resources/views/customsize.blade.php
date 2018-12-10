<!DOCTYPE html>
<html>
<head>
	<title>HolyShirt | Customsize</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="css/style.css">
	<link href="css/animate.css" rel="stylesheet"/>
	<link href="css/waypoints.css" rel="stylesheet"/>
	<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
	<script src="js/waypoints.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
		<nav class="navbar navbar-expand-sm navbis">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="/.html" class="navbar-brand">HolyShirt
						</a>
					</li>
				</ul>
				<ul class="navbar-nav mx-auto">
					<li class="nav-item" style="color:g">The Joy of Fashion is an Art</li>
				</ul>
				<ul class="navbar-nav justify-content-end" id="right">
					<li class="nav-item ml-auto">
						<a href="/login.html" class="nav-link" >LOGIN</a>
						</li>
				</ul>
			</nav>
		
			<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6  os-animation"data-os-animation="bounceInUp" data-os-animation-delay="0s" style="border-right: solid 2px; border-color:#bf9b30">
							<h3>CUSTOM SIZE</h3>    
							
							<h4>CREATE YOUR SIZE</h4>
							<form action="">
								<div class="form-group d-flex justify-content-center">
									<input type="text" class="form-control" id="weight" placeholder="enter your weight" name="weight">
								</div>
							</form>
							<form action="">
									<div class="form-group d-flex justify-content-center">
										<input type="text" class="form-control" id="height" placeholder="enter your height" name="height">
									</div>
								</form>
							
							<button type="button" class="btn" id="create">Create</button>
		
						</div>
						<div class="col-sm-6  os-animation"data-os-animation="bounceInUp" data-os-animation-delay="0.25s">
							<h3 style="margin-top:1%">RESULT</h3>
							<h4>Weight</h4>
							<div class="mx-auto" style="border: solid 1px;width:300px;height:38px;margin-left: 10%;border-radius: 5px;margin-bottom: 1%;">
							<div id="result1" style="font-size: 200%;padding-top: 3.5px;">
								</div>
								</div>
								<h4>Height</h4>
								<div class="mx-auto" style="border: solid 1px;width:300px;height:38px;margin-left: 10%;border-radius: 5px; ">
										<div id="result2" style="font-size: 200%;padding-top: 3.5px;">
											</div>
											</div>
								<button class="btn" id="reset" name="reset">Reset</button>
								<button class="btn" id="save" name="save">Save Your Size</button>
							</div>
						</div>
					</div>
				</div>  

	<div class="container-fluid" id="anjing" style="margin-top:0%;">
			<div class="container-fluid" id="footer" style="margin-top: 100px">
				<div class="row" style="background-color: #202020">
					<div class="col-sm-3" >
						<ul class="ulfoot" style="list-style: none; padding-left: 10%">
							<li style="color: grey; font-size: 100%">Learn More</li>
							<li><a href="/aboutus.html">About Us</a></li>
							<li><a href="/clothing.html">Clothing</a></li>
							<li><a href="/customsize.html">Size Chart</a></li>
							<li><a href="/collection.html">Collection</a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<ul class="ulfoot" style="list-style: none">
							<li style="color: grey; font-size: 100%">Help + Info</li>
							<li><a href="">FAQ</a></li>
							<li><a href="">Privacy Policy</a></li>
							<li><a href="">Term Of Use</a></li>
							<li><a href="/contactus.html" style="color: white">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-sm-2"></div>
					<div class="col-sm-4">
						<div class="footer navbar-expand-sm">
							<ul style="list-style: none">
								<li style="color: grey">Follow Us</li>
								<li>
									<a href="https://www.instagram.com/watclothes"><img src="images/ig.png" style="width:30px; height:30px"></a>
									<a href=""><img src="images/fb.png" style="width:30px; height:30px; margin-left: 10px"></a>
									<a href=""><img src="images/tw.png" style="width:40px; height:40px; margin-left: 8px"></a>
									<a href=""><img src="images/yt.png" style="width:60px; height:60px;"></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="garis">
						<p><a href="#" class="navbar-brand" style="color: #bf9b30;border-top: 0;">HolyShirt</a>Copyright©HolyShirt Inc. All Right Reserved.</p>
					</div>
				</div>
			</div>
			<div class="contaier-fluid" id="garis"></div>
		</div>

	<script>
		$(document).ready(function () {
			$("#create").click(function () {
				let weight = $("#weight").val();
				let high = $("#height").val();
				let message1 = weight ;
				let message2 = high ;
					

				
				console.log(message1);
				$("#result1").show();
				$("#result1").html(message1);

				console.log(message2);
				$("#result2").show();
				$("#result2").html(message2);
			});
			$("#reset").click(function () {
				$("#result1").hide();
				$("#result2").hide();
			});
		});
	</script>

</body>

</html>