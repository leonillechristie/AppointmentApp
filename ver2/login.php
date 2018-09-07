<!DOCTYPE html>

<?php 


?>

<html lang="en">

<?php
	require('head.php');
?>

<body>

	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<div id="page">		
	<?php 
		require('header.php');
	?>
	
	
	<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login-2">
					<h1>Please login to Findoctor!</h1>
					<form>
						<div class="box_form clearfix">
							<div class="box_login">
								<a href="#0" class="social_bt facebook">Login with Facebook</a>
								<a href="#0" class="social_bt google">Login with Google</a>
								<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
							</div>
							<div class="box_login last">
								<div class="form-group">
									<input type="text" class="form-control user" placeholder="Your username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control pass" placeholder="Your password">
									<a href="#0" class="forgot"><small>Forgot password?</small></a>
								</div>
								<div class="form-group">
									<input class="btn_1 loginbut" type="button" value="Login">
								</div>
							</div>
						</div>
					</form>
					<p style="text-align: -webkit-center;" class="text-center link_bright">Do not have an account yet? <a href="#0"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
	</main>
	<!-- /main -->
	
	<?php 
		require('footer.php');
	?>
	</div>
	<!-- page -->

	<div id="toTop">
		<img class="topArrow" src="./img/up_arrow.png">
	</div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/email-decode.min.js"></script>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
     


</body>
<script>
	$( document ).ready(function() {
		$('.loginbut').on("click",function(){
			alert("here");
			$.ajax({
				url: "requests/getUserOrDoctor.php",
				type: 'POST',
				dataType: 'text json', // added data type
				data: {
						user:$('.user').val(),
					  	pass:$('.pass').val()
					  },
				success: function(res) {
					console.log(res);
					if(res == 3 || res == 2){
						alert("LOGIN FAILED");
					}  else {
						alert("LOGIN SUCCESFUL")
						window.location.replace("index.php");
					}
					
				
				}
    		});

		});
	});
</script>
</html>