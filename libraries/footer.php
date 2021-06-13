<?php $_SESSION['session_token'] = $session_token;?>
<footer class="page-footer font-small mt-4" style="background-color:#2E2E2E!important;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">
          <a class="fb-ic" target="_blank" href="https://www.facebook.com/yourcoach.ie/"><i class="fab fa-facebook-f white-text mr-md-5 mr-3 fa-2x"></i></a>
          <a class="tw-ic" target="_blank" href="https://twitter.com/yourcoach_ie"><i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"></i></a>
          <a class="li-ic" target="_blank" href="https://www.linkedin.com/company/10390361"><i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://pweb.solutions"> YourCoach.ie  |  Designed by: PWeb.Solutions</a>
  </div>
</footer>

<script src="https://www.google.com/recaptcha/api.js?render=<?php echo reCAPTCHA_SITE_KEY;?>"></script>
<script>
   function onSubmit(token) {
     document.getElementById("contact_form").submit();
     document.getElementById("contact_form2").submit();
   }
 </script>

<script>
new WOW().init();
</script>
