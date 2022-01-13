  <!-- Vendor JS Files -->
  <script src="{{url('general')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('general')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/typed.js/typed.min.js"></script>
  <script src="{{url('general')}}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('general')}}/assets/js/main.js"></script>

  <script>
    $(document).ready(function(){
    window.livewire.on('contactSuccess',()=>{
    setTimeout(function(){ $(".contactSuccess").fadeOut('fast');
    }, 2000);
    });
    });
  </script>
