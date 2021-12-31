<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from apro-admin-templates.websitedesignmarketingagency.com/aproadmin-dark/pages/examples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 18:33:58 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>New Admin - HurZameenMarkeet</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.css">
	
	<!-- ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="assets/css/admin/css/master_style.css">
	
	<!-- apro_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/css/admin/css/skins/_all-skins.css">
	
	<!-- weather weather -->
	<link rel="stylesheet" href="assets/vendor_components/weather-icons/weather-icons.css">
	
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/vendor_components/jvectormap/jquery-jvectormap.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}

    
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
<body class="hold-transition skin-black sidebar-mini">
  {{-- 
  <div class="loader">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="spinner"></div>
  </div>
  </div>
  </div> --}}
  
  <div class="wrapper">
    @include('admin.adminheader')  
    @include('admin.sidenav')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create New Admin Profile
        </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">Examples</a></li>
          <li class="breadcrumb-item active">User profile</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <div class="row">
          {{-- <div class="col-xl-4 col-lg-5">
  
            <!-- Profile Image -->
            <div class="box box-primary " >
              <div class="box-body box-profile" >
                 <label for="file-input">
                <img class="profile-user-img rounded-circle img-fluid mx-auto d-block" src="images/5.jpg" alt="User profile picture">
                 </label>
                  <input id="file-input" type="file" class="invisible"/>
  
                <h3 class="profile-username text-center">Jhone Mical</h3>
  
                <p class="text-muted text-center">Accoubts Manager Jindal Cop.</p>
          
                <div class="row social-states">
             <div class="col-6 text-right"><a href="#" class="link"><i class="ion ion-ios-people-outline"></i> 254</a></div>
              <div class="col-6 text-left"><a href="#" class="link"><i class="ion ion-images"></i> 54</a></div>
            </div>
              
                <div class="row">
                  <div class="col-12">
                    <div class="profile-user-info">
              
  
                 <p class="margin-bottom"> &nbsp;</p>
              <div class="user-social-acount">
                <!-- <button class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                <button class="btn btn-circle btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                <button class="btn btn-circle btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button>
             -->	</div>
            </div>
                 </div>
                </div>
  
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div> ddd
          <!-- /.col --> --}}
          <div class="col-xl-8 col-lg-7">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li><a  class="active" href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
                          
              <div class="tab-content">
               
                
                <div class="active tab-pane" id="settings">
                  <form class="form-horizontal form-element col-12" id="formProfile"> 
                    {{ csrf_field() }}
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-3 control-label">Name</label>
  
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-3 control-label">Email</label>
  
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-3 control-label">Password</label>
  
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-3 control-label">Confrim Password</label>
  
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="confrimPass" placeholder="">
                      </div>
                    </div>
  
                    <div class="form-group row">
                      <div class="ml-auto col-sm-10">
                        <button type="submit" class="btn btn-success" id="btnSubmit">Submit</button>
                      </div>
                    </div>
                  </form>
                  
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
   
   @include('admin.adminfooter')
    <div class="control-sidebar-bg"></div>
  </div>
  {{-- Erro Message Notification --}}
  <div class="col-sm-3"> 
    <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-danger myadmin-alert-top alerttop"> <i class="ti-user"></i>  Admin Email and Password does not matach  <a href="#" class="closed">&times;</a> </div>
    </div>
     {{--Success Notification Message  --}}
     <div class="col-sm-3"> 
      <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-success myadmin-alert-top alerttopsucesss"> <i class="ti-user"></i> Admin Created Successfully!  <a href="#" class="closed">&times;</a> </div>
      </div>
  <!-- ./wrapper -->
  
    <!-- jQuery 3 -->
    <script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
    
    <!-- popper -->
    <script src="assets/vendor_components/popper/dist/popper.min.js"></script>
    
    <!-- Bootstrap 4.0-->
    <script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- SlimScroll -->
    <script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    
    <!-- FastClick -->
    <script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
    
    <!-- apro_admin App -->
    <script src="assets/js/admin/js/template.js"></script>
    
    <!-- apro_admin for demo purposes -->
    <script src="assets/js/admin/js/demo.js"></script> 

    {{-- Error Message Notification  --}}
    <script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/jquery-modal-video.min.js"></script>
<script src="assets/js/form-validator.min.js"></script> 
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/custom.js"></script>
<script type="text/javascript"></script>
	

  </body>
<!-- Mirrored from apro-admin-templates.websitedesignmarketingagency.com/aproadmin-dark/pages/examples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 18:33:59 GMT -->
<script>
  $(".myadmin-alert .closed").click(function(event) {
		 $(this).parents(".myadmin-alert").fadeToggle(350);
		   return false;
	   });
	  
  function errorMessage(){
	$(".alerttop").fadeToggle(350);	  
   } 
 
   function successMessage(){
	$(".alerttopsucesss").fadeToggle(350);	  
   }
  $(document).ready(function(){
    $('#formProfile').on('submit',function(e){
      e.preventDefault();
      var pass = $('#pass').val();
      var confPass =  $('#confrimPass').val();
      if (pass != confPass){
        errorMessage();
        
      }else
     $.ajax({
       type:'post',
       url:"{{url('/addadmin')}}",
       data:$('#formProfile').serialize(),
       success:function(data){
       // alert('Admin Creater Successfully..');
        location.reload();
        successMessage();
  
       },error:function(res){
        console.warn(res);
      alert("Your Email is already registered, kindly use another email.");
       }
     });
     
     });
  
  });
   
  </script>
</html>
