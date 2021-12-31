<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from apro-admin-templates.websitedesignmarketingagency.com/aproadmin-dark/pages/forms/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 18:33:53 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
        Running Projects
      </h1>
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active">Editors</li>
      </ol> -->
    </section>

    <!-- Main content -->
	
    <section class="content">
      	
    <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

              <div class="box-tools">
                <!-- <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"> -->

                  <!-- <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div> -->
                <!-- </div> -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body ">
              <table class="table table-hover table-responsive">
				  <thead>
                <tr>
                  <th class="text-white "> Project Name </th>
				  <th></th>
				  <th></th>
				  <th></th>
				  <th></th>	
                  <th class="text-white">Status</th> 
                </tr>
			</thead>
				
				@foreach($schemes as $scheme )
				               
				<tr>
				  <td><a href="#" class="text-white"> {{$scheme->schemes_name}}</a></td>
                 
					<td></td>
					<td></td>
					<td></td>
					<td></td>	
				  <td><button type="button" class="btn btn-danger" value="{{$scheme->scheme_id}}" id="deleteBtn">Delete</button></td>
				  
				</tr>
				@endforeach 
				
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <aside style="margin-bottom:30px; ">
	</aside>
  
  @include('admin.adminfooter')
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

  
{{--Success Notification Message  --}}
  <div class="col-sm-3"> 
  <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-success myadmin-alert-top alerttopsucesss"> <i class="ti-user"></i> Project Details Update Successfully!  <a href="#" class="closed">&times;</a> </div>
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
	
	
</body>
   
<script>

$(document).on('click', '#deleteBtn', function(){
		var id =$(this).val();
		  
		  $.ajaxSetup({
  	headers: {
    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  	}
	});

	// +"<td><button type='button' class='btn btn-danger' value='"+obj.scheme_id+"' id="'deleteBtn'">Delete</button></td> </tr>");

		$.ajax({
			type:'delete',
			url:'/deleteproject/'+id,
			data:{'id':id},
			success:function(data){
				alert(data);
				location.replace('/viewrunningproject');
				
				
			},error:function(error){
				alert("Error");
				console.log(error);

			}
		})

	});

</script>	
   
 

<!-- Mirrored from apro-admin-templates.websitedesignmarketingagency.com/aproadmin-dark/pages/forms/editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 18:33:53 GMT -->
</html>
