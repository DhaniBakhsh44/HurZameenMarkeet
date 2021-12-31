<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/snifty/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 20:24:33 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/boxicons.min.css">

<link rel="stylesheet" href="../assets/css/nice-select.min.css">

<link rel="stylesheet" href="../assets/css/meanmenu.css">

<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="../assets/css/animate.min.css">

<link rel="stylesheet" href="../assets/fonts/flaticon.css">

<link rel="stylesheet" href="../assets/css/odometer.min.css">

<link rel="stylesheet" href="../assets/css/modal-video.min.css">

<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="../assets/css/responsive.css">
<title>Hur Zameen Markeet</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner"></div>
</div>
</div>
</div>

 @include('header') 
{{-- <div class="page-title-area title-bg-three"> --}}
    {{-- <div class="d-table">
    <div class="d-table-cell">
    <div class="container">
    <div class="title-content">
    <h2>Scheme Name</h2>
    <ul>
    <li>
    <a href="index.html">Home</a>
    </li>
    <li>
    <span>Property Details</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div> --}}
    {{-- </div> --}}

    <div class="container">
        <pre>




            
        </pre>
    </div>
    {{-- <div class="main-content"> --}}
    <div class="container">
    @foreach ($schemeContext as $scheme)
    
    <div> 
        {!!html_entity_decode($scheme->context)!!}
    </div>

    @endforeach
        
    </div>
    {{-- </div> --}}
    



 @include('footer') 

<div class="go-top">
<i class='bx bxs-arrow-to-top'></i>
<i class='bx bxs-arrow-to-top'></i>
</div>


{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/jquery.nice-select.min.js"></script>

<script src="../assets/js/jquery.meanmenu.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/odometer.min.js"></script>
<script src="../assets/js/jquery.appear.min.js"></script>

<script src="../assets/js/jquery-modal-video.min.js"></script>

<script src="../assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/snifty/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 20:25:02 GMT -->
</html>