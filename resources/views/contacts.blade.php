<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/snifty/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 20:25:48 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/fonts/flaticon.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/modal-video.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

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


<!-- Alert Msg  -->
<!-- <div class="card-body">
    <div class="wrapper text-center">
        <h4 class="card-title">Alerts Popups</h4>
        <p class="card-description">A success message!</p> <button class="btn btn-outline-success" onclick="showSwal('error-message')">Click here!</button>
    </div>
</div>
 -->

@include('header')


<div class="page-title-area title-bg-five">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="title-content">
<h2>Contact</h2>
<ul>
<li>
<a href="/index">Home</a>
</li>
<li>
<span>Contact</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="contact-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-8">
<form  id="contactForm">
    {{ csrf_field() }}
<div class="section-title" id="error">
<h2>Get In Touch</h2>

</div>

{{-- <div id="error">

</div> --}}
{{-- 
@if (count($errors)>0)
    @foreach ($errors->all() as $error)
    {{$error}}
    @endforeach
@endif --}}

 
 <div class="row">
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
 </div>
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" placeholder="Phone" required data-error="Please enter your number" class="form-control">

<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-12 col-lg-12">
<div class="form-group">
    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required data-error="Please enter your email">

<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message" required data-error="Write your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12">
<div class="text-center">
<button type="submit" class="btn common-btn subbtn">Send Message</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</div>
</form>
</div>
<div class="col-sm-6 col-lg-4">
<div class="contact-info">
<h3>Contact Information:</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae laboriosam ratione dignissimos maxime</p>
<ul class="info">
<li>
<i class='bx bx-current-location'></i>
<a href="#">2750 Quadra Street, Victoria, Canada</a>
<a href="#">345-659 Birmingham Street, England</a>
</li>
<li>
<i class='bx bx-mail-send'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#e189848d8d8ea1928f88879598cf828e8c"><span class="__cf_email__" data-cfemail="b1d9d4dddddef1c2dfd8d7c5c89fd2dedc">[email&#160;protected]</span></a>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#83eaede5ecc3f0edeae5f7faade0ecee"><span class="__cf_email__" data-cfemail="9cf5f2faf3dceff2f5fae8e5b2fff3f1">[email&#160;protected]</span></a>
</li>
<li>
<i class='bx bx-phone-call'></i>
<a href="tel:+2534452431">+253-445-2431</a>
<a href="tel:+7524587571">+752-458-7571</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>



<div class="map-area">
<div class="container-fluid p-0">
<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922805.8146146105!2d67.81872694026728!3d25.38102687673904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394eaf74dd012345%3A0xce6f1621aa1859bb!2sHyder%20City%20Mirpurkhas!5e0!3m2!1sen!2s!4v1618351248347!5m2!1sen!2s" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
</div>

@include('footer')

<div class="go-top">
<i class='bx bxs-arrow-to-top'></i>
<i class='bx bxs-arrow-to-top'></i>
</div>
 

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

 <script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/jquery-modal-video.min.js"></script>

<script src="assets/js/custom.js"></script>

</body>

<script>


$(document).ready(function(){

    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $('.btn').click(function(e) {

    $.ajax({
        type:'post',
        url:"{{url('/sendmail')}}",
        data:$('#contactForm').serialize(),
        success:function(result){
           // alert(result);
            
            showSwal(result);

            $("#contactForm")[0].reset();
        },
        error:function(error){
            console.warn(error);
            showSwal('error-message')
            //location.reload();
        }
    });

    

    });

});

(function($) {
showSwal = function(type) {
'use strict';
if (type === 'success-message') {
swal({
title: 'Congratulations!',
text: 'Mail Sent Successfully',
type: 'success',
button: {
text: "Continue",
value: true,
visible: true,
className: "btn btn-primary"
}
})

}else{
swal("Error occured !");
}
}

})(jQuery);
</script>  

<!-- Mirrored from templates.hibootstrap.com/snifty/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 20:25:48 GMT -->
</html>