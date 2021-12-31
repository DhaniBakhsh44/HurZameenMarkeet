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

    <title>Create Project - HurZameenMarkeet</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.min.css">

  <!-- Select2 -->
	<link rel="stylesheet" href="assets/css/admin/css/select2.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/admin/css/master_style.css">

	<!-- apro_admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="assets/css/admin/css/skins/_all-skins.css">	
	
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
  	<!-- Select2 -->
	<link rel="stylesheet" href="assets/vendor_components/select2/dist/css/select2.min.css">

  {{-- Notification Message --}}
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

   {{-- CK Editor --}}
  {{-- <script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('summary-ckeditor');
</script> --}}
	


</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">
    <!-- HEADER -->
    @include('admin.adminheader')  
  <!-- Left side column. contains the logo and sidebar -->
    @include('admin.sidenav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Project Details
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="box">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                {{-- <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button> --}}
              </div>
             
              <!-- /. tools -->
              <div class="col-md-6 col-12">
              <div class="form-group">
                <h3>Select Project</h3>
                <select class="form-control select2" style="">
                  <option value="0">SELECT PROJECT </option>
                  @foreach ($schemes as $scheme)
      
                  <option id="{{$scheme->scheme_id}}" value="{{$scheme->scheme_id}}"> {{$scheme->schemes_name}}</option>
                  
                  @endforeach
                </select>
              </div>
            </div>                
            <form  method="post">
                {{ csrf_field() }}
              <textarea class="form-control" id="ckeditor" name="ckeditor" ></textarea>
              <p>
              </p>
              <button type="submit" class="btnsubmit  btn-lg btn-primary" style="height: 40px; width:200px; font-size: 15px">Sumbit</button>
            </form> 
            
          </div>
          </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('admin.adminfooter')
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
  
{{--Success Notification Message  --}}
  <div class="col-sm-3"> 
  <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-success myadmin-alert-top alerttopsucesss"> <i class="ti-user"></i> Project Created Successfully!  <a href="#" class="closed">&times;</a> </div>
  </div>

   {{--Success Notification Message  --}}
   <div class="col-sm-3"> 
    <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-info myadmin-alert-top alerttopsucesss2"> <i class="ti-user"></i> Details Added Created Successfully!  <a href="#" class="closed">&times;</a> </div>
    </div>

	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

  	<!-- Select2 -->
	<script src="assets/vendor_components/select2/dist/js/select2.full.js"></script>
	
	<!-- SlimScroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- apro_admin App -->
	<script src="assets/js/admin/js/template.js"></script>
	
	<!-- apro_admin for demo purposes -->
	<script src="assets/js/admin/js/demo.js"></script>	
	
	<!-- CK Editor -->
	{{-- <script src="assets/vendor_components/ckeditor/ckeditor.js"></script> --}}
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	{{-- <!-- apro_admin for editor -->
	<script src="assets/js/admin/js/pages/editor.js"></script> --}}

</body>
<script>
  $(".myadmin-alert .closed").click(function(event) {
		 $(this).parents(".myadmin-alert").fadeToggle(350);
		   return false;
	   });
	  
   function successMessage(){
	  $(".alerttopsucesss").fadeToggle(350);	  
   }
   </script>

   @if(session()->has('schemeCreated'))
   <script>
    successMessage();
    </script>
   @endif

   
   <script src="ckeditor/ckeditor.js"></script>
   {{-- <script src="ckfinder/ckfinder.js"></script> --}}
   {{-- CKEDITOR CONFIGURATION --}}
   <script>
  //  CKEDITOR.replace('summary-ckeditor');
   
    // var editor = CKEDITOR.replace( 'summary-ckeditor' );
    // CKFinder.setupCKEditor( editor );
   </script>

  {{-- IMAGE Upload --}}
  <script>
    CKEDITOR.replace('ckeditor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.config.extraPlugins = 'colorbutton, font';
    //CKEDITOR.config.extraPlugins = 'font';
    </script>
    <script>
      $(document).ready(function(){
      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
 
      $(".select2").change(function() {
        
      var id = $(this).find('option:selected').val();
      $.ajax({
			type:"post",
			url:"/setschemeid",
			data:{'scheme_id':id},"_token": "{{ csrf_token() }}",
			success:function(response){
				// alert(response);
			},
			 error:function(error){
         //alert(error);
			 	console.log(error);
			 }
		});
      
      });
      });

      $(".btnsubmit").on('click',function(e){
      e.preventDefault();
      var id = $(".select2").find('option:selected').val();
      if(id==0){
      $(".select2").focus();
      return;
      }
      $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
      var data = CKEDITOR.instances.ckeditor.getData();
       $.ajax({
        type:"post",
        url:"{{url('/ckdatastore')}}",
        data:{'data':data},
        success:function(response){

        if (response=="updateprojectdetails"){
          var con = confirm("For Update Details Go to Update Page!!");
          if (con == true)
          window.location.href = "/"+response;
          }
          else{
          $(".alerttopsucesss2").fadeToggle(10);	
          window.open('/schemedetails/'+response,'_blank');
          }

        },
        error:function(error){
         console.log(error);
        }
       });
      });
    </script>
   
   
 

<!-- Mirrored from apro-admin-templates.websitedesignmarketingagency.com/aproadmin-dark/pages/forms/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 18:33:53 GMT -->
</html>
