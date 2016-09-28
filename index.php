<!DOCTYPE html>
<head>
	<title>DOTA ULM</title>
	
	<link rel="stylesheet" href="css/jquery.fadeshow-0.1.1.min.css" />
	<link rel="stylesheet" href="css/demo.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'>
 

	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

	<script>
	function validateForm(x) {
		    var atpos = x.indexOf("@");
		    var dotpos = x.lastIndexOf(".");
		    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		       return false;
		    }
		    return true;
		}
		$(document).ready(function() {
			
			$("#nl-form").submit(function( event ) {
				
			  if($("#name").val() == "") {
			  	alert("Enter your name!!");
			 	event.preventDefault();
			  } else if ($("#email").val() == "") {
			  	alert("Enter your email!");
			 	event.preventDefault();
			  } else if (!validateForm($("#email").val())) {
			  	alert("Enter valid email!");
			 	event.preventDefault();

			  } else if ($("#mt").val() == "match_type"){
			  	alert("Select any match type!");
			 	event.preventDefault();
			  }


			});
		}); 
		</script>
			
	
	
		
	
	<script src="js/jquery.fadeshow-0.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			var fadeShow = $(".background").fadeShow({
				correctRatio: true,
				shuffle: true,
				speed: 10000,
				images: [
				'img/2.jpg',
				'img/3.png',
				]
			});
		});
	</script>
	</script>

</head>
<body>

<?php
	include ("security.php");
	include ("connect.php");


if (!empty($_POST)) {
	if (isset($_POST['name'],$_POST['email'],$_POST['match_type'])){

		$name       = strtolower(trim($_POST['name']));
		$email      = strtolower(trim($_POST['email']));
		$match_type = strtolower(trim($_POST['match_type']));


	
			$insert= $db->prepare("INSERT INTO players(name,email,match_type) VALUES (?,?,?)");
			$insert->bind_param ('sss', $name,$email,$match_type);

			
			
			
		}
	}


?>



	<div class="background"></div>
	<div class="container">
		<div class="logo">
	<img src="img/logo.png" style="width:290px;height:230px;">
		</div>
		
			<header>
				<h1>Dota 2 ULM <span>Clash of Warhawks</span></h1>	
			</header>
			<div class="main clearfix">
				<div class="box" >
					<form id="nl-form" class="nl-form" method="post" >
						
						<input type="text" name="name" id="name" placeholder="Name" data-subline="For example: <em>Sohail</em> or <em>Jack</em>"/>

						<br />

						<input type="text" id="email" name="email" placeholder="Email" data-subline="For example: <em>maharjs@warhawks.ulm.edu</em> or <em>jhaa@warhawks.ulm.edu</em>" class="required email"/>

		 				<br/>
		 				<label for="match_type"> </label>
						<select name="match_type" id="mt">
							<option value="match_type" selected>Match Type</option>
						 	<option value="both">Both</option>
						 	<option value="solo">Solo(1v1)</option>
						 	<option value="team">Team(5v5)</option>
						</select>
						
						<div class="nl-submit-wrap">
							<button class="nl-submit" type="submit" id="submit">Submit</button>
							<?php if (!empty($_POST)): ?>
								<?php if ($insert->execute()): ?>
									<h3 class="sucess"> Sucessfully Registered !!</h3>
								<?php endif ?>
							<?php endif ?>
						 
						 
						</div>
						<div class="nl-overlay"></div>
					</form>


				</div>
				
				<div class="gap">
				</div>

				<div class="description" ><h3 class="head">FIRST TIME EVER<br/>2016</h3>
					<h3 class="info">
						Be the part of the grand tournament. </h3>
					<h2 class="info">
					Register Now!!! <br/><h2>
					
					

						<h3 class="info">For more info </h3><h4 class="info" >Email:  maharjs@warhawks.ulm.edu</h4>
				</div>

				

			</div>
		</div>
	
	
	<script src="js/jquery.fadeshow-0.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){
			var fadeShow = $(".background").fadeShow({
				correctRatio: true,
				shuffle: true,
				speed: 10000,
				images: [
				'img/2.jpg',
				'img/3.png',
				]
			});
		});
	</script>
	<script src="js/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>

	</body>
	</html>