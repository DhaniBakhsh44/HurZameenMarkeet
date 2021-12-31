<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from apro-admin-templates.websitedesignmarketingagency.com/aproadmin-dark/pages/forms/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 18:33:53 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <link rel="icon" href="../../images/favicon.ico">
	 <script src="assets/vendor_components/jquery/dist/jquery.min.js"></script> 
		<style>
	*, *:before, *:after {
		box-sizing: border-box;
	  }
	  
	  html {
		overflow-y: scroll;
	  }
	  
	  body {
		background: #c1bdba;
		font-family: 'Titillium Web', sans-serif;
	  }
	  
	  a {
		text-decoration: none;
		color: #1ab188;
		transition: .5s ease;
	  }
	  a:hover {
		color: #179b77;
	  }
	  
	  .form {
		background: rgba(19, 35, 47, 0.9);
		padding: 40px;
		max-width: 600px;
		margin: 100px auto;
		border-radius: 4px;
		box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
	  }
	  
	  .tab-group {
		list-style: none;
		padding: 0;
		margin: 0 0 40px 0;
	  }
	  .tab-group:after {
		content: "";
		display: table;
		clear: both;
	  }
	  .tab-group li a {
		display: block;
		text-decoration: none;
		padding: 15px;
		background: rgba(160, 179, 176, 0.25);
		color: #a0b3b0;
		font-size: 20px;
		float: left;
		width: 50%;
		text-align: center;
		cursor: pointer;
		transition: .5s ease;
	  }
	  .tab-group li a:hover {
		background: #179b77;
		color: #ffffff;
	  }
	  .tab-group .active a {
		background: #1ab188;
		color: #ffffff;
	  }
	  
	  .tab-content > div:last-child {
		display: none;
	  }
	  
	  h1 {
		text-align: center;
		color: #ffffff;
		font-weight: 300;
		margin: 0 0 40px;
	  }
	  
	  label {
		position: absolute;
		transform: translateY(6px);
		left: 13px;
		color: rgba(255, 255, 255, 0.5);
		transition: all 0.25s ease;
		-webkit-backface-visibility: hidden;
		pointer-events: none;
		font-size: 22px;
	  }
	  label .req {
		margin: 2px;
		color: #1ab188;
	  }
	  
	  label.active {
		transform: translateY(50px);
		left: 2px;
		font-size: 14px;
	  }
	  label.active .req {
		opacity: 0;
	  }
	  
	  label.highlight {
		color: #ffffff;
	  }
	  
	  input, textarea {
		font-size: 22px;
		display: block;
		width: 100%;
		height: 100%;
		padding: 5px 10px;
		background: none;
		background-image: none;
		border: 1px solid #a0b3b0;
		color: #ffffff;
		border-radius: 0;
		transition: border-color .25s ease, box-shadow .25s ease;
	  }
	  input:focus, textarea:focus {
		outline: 0;
		border-color: #1ab188;
	  }
	  
	  textarea {
		border: 2px solid #a0b3b0;
		resize: vertical;
	  }
	  
	  .field-wrap {
		position: relative;
		margin-bottom: 40px;
	  }
	  
	  .top-row:after {
		content: "";
		display: table;
		clear: both;
	  }
	  .top-row > div {
		float: left;
		width: 48%;
		margin-right: 4%;
	  }
	  .top-row > div:last-child {
		margin: 0;
	  }
	  
	  .button {
		border: 0;
		outline: none;
		border-radius: 0;
		padding: 15px 0;
		font-size: 2rem;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: .1em;
		background: #1ab188;
		color: #ffffff;
		transition: all 0.5s ease;
		-webkit-appearance: none;
	  }
	  .button:hover, .button:focus {
		background: #179b77;
	  }
	  
	  .button-block {
		display: block;
		width: 100%;
	  }
	  
	  .forgot {
		margin-top: -20px;
		text-align: right;
	  }
	  
	</style>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	


	{{-- Notification --}}
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.min.css">
   
    <!-- toast CSS -->
    <link href="assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet">

	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/admin/css/master_style.css">

	<!-- apro_admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/css/admin/css/skins/_all-skins.css">
	
</head>

<body> 
	<div class="loader">
		<div class="d-table">
		<div class="d-table-cell">
		<div class="spinner"></div>
		</div>
		</div>
		</div>

	<div class="form">
      <form action="{{url('/dashboard')}}" method="post">
		{{ csrf_field() }}
		<div id="signup">   
			<h1>LOG IN</h1>
			
			  <div class="field-wrap">
			  <label> 
				Email Address<span class="req">*</span>
			  </label>
			  <input type="email"required autocomplete="off" id="email" name="email" class="input-group-lg" style="height:40px;"/>
			</div>
			
			<div class="field-wrap">
			  <label>
				Password<span class="req">*</span>
			  </label>
			  <input type="password"required autocomplete="off" id="pass" name="pass" style="height:40px;"/>
			</div>
			
			<p class="forgot"><a href="#">Forgot Password?</a></p>
			
			{{-- <input type="submit" class=" button button-block" value="LogIn"> --}}
			 <button class=" button button-block" id="btnLogIn">Log In</button> 
			
		</form>
		</div>
		
		<div class="col-sm-3"> 
		<div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-danger myadmin-alert-top alerttop"> <i class="ti-user"></i>  Admin Email and Password does not matach  <a href="#" class="closed">&times;</a> </div>
		</div>

		<script>
	   function errorMessage(){
		$(".alerttop").fadeToggle(350);	}
		
	  $(".myadmin-alert .closed").click(function(event) {
		 $(this).parents(".myadmin-alert").fadeToggle(350);
		   return false;
	   });
	   $(".showtop").click(function() {
		   $(".alerttop").fadeToggle(350);
	   });
	   	   </script>

	    @if(session()->has('false'))
		<script> errorMessage();</script>
	   @endif 


	
		  
</body>
<script>
	// For login Input
	$(".form").find("input, textarea").on("keyup blur focus", function (e) {
	  var $this = $(this),
		label = $this.prev("label");
  
	  if (e.type === "keyup") {
		if ($this.val() === "") {
		  label.removeClass("active highlight");
		} else {
		  label.addClass("active highlight");
		}
	  } else if (e.type === "blur") {
		if ($this.val() === "") {
		  label.removeClass("active highlight");
		} else {
		  label.removeClass("highlight");
		}
	  } else if (e.type === "focus") {
		if ($this.val() === "") {
		  label.removeClass("highlight");
		} else if ($this.val() !== "") {
		  label.addClass("highlight");
		}
	  }
	});
  
  
</script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/jquery-modal-video.min.js"></script>
<script src="assets/js/form-validator.min.js"></script> 
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/custom.js"></script>
<script type="text/javascript">
	
	
</html>