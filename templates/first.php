<main>

<div class="view jarallax" style="height: 100vh;">
  <img id="pat_background" class="jarallax-img" src="./static/img/phanlax/aggie_bg1.jpg" alt="Picture of Aggie"/>
  <div class="container h-100 d-flex justify-content-start align-items-center">
    <div class="row mt-200">
      <div class="col-md-1 wow fadeIn"></div>
        <div class="col-md-8 wow fadeIn" align="center">
          <img src="./static/img/logos/logo_2020.png" alt="YourCoach.ie Logo" width="20%" style="margin:0 40px 10px 40px;">
          <h1 class="wow fadeInDown" data-wow-delay="0.3s">YOUR COACH</h1>
          <h5 class="wow fadeIn" data-wow-delay="0.4s">Business - Career - Life</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="background-color: #323438;">
  <div class="container pt-3">
    <section id="about" class="section pt-2 pb-5">
      <h1 class="text-center white-text text-uppercase font-weight-bold mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Professional Coaching Services</h1>
      <p class="text-center white-text text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">Building Strong Foundations for Your Personal and Professional Development</p>
      <div class="line wow fadeIn" data-wow-delay="0.2s"></div>
      <div class="row mt-5 pt-5">
        <div class="col-lg-5 col-md-12 mb-5 wow fadeIn" data-wow-delay="0.4s">
          <img src="./static/img/pictures/aggie_first.jpg" class="img-fluid z-depth-1" alt="My photo">
        </div>
      <div class="col-lg-6 offset-lg-1 col-md-12 wow fadeIn" data-wow-delay="0.4s">
        <p class="grey-text mb-4" align="justify">
          <?php echo $yourcoach_db->get_Text('First', 'Intro');?> 
        </p>
      </div>
    </section>
  </div>
</div>

<div class="container">
  <section id="services" class="section feature-box pt-3 pb-4">
    <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">What i do</h1>
    <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">All about my work</p>
    <div class="line  wow fadeIn" data-wow-delay="0.2s"></div>
    <div class="row my-5 pt-4 wow fadeIn" data-wow-delay="0.2s">
      <div class="col-lg-3 col-sm-6 text-center pt-4">
        <div class="icon-area">
          <div class="circle-icon">
            <a href="./?p=life"><img src="./static/img/icons/life.jpg" alt="Life Coaching Logo" class="img-fluid" width="50%"></a>
          </div>
          <br>
          <strong>LIFE</strong>
          <p>Personal Coaching tailored to individual needs.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 text-center pt-4">
        <div class="icon-area">
          <a href="./?p=business"><img src="./static/img/icons/business.jpg" alt="Business Coaching Logo" class="img-fluid" width="50%"></a>
          <br><br>
          <strong>BUSINESS</strong>
          <p>Coaching Leaders for success and business growth.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 text-center pt-4">
        <div class="icon-area">
          <div class="circle-icon">
            <a href="./?p=career"><img src="./static/img/icons/career.jpg" alt="Career Coaching Logo" class="img-fluid" width="50%"></a>
          </div>
          <br>
          <strong>CAREER</strong>
          <p>Designing fulfilling careers based on personal values.</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 text-center pt-4">
        <div class="icon-area">
          <div class="circle-icon">
            <a href="./?p=training"><img src="./static/img/icons/training.jpg" alt="Team Developing Logo" class="img-fluid" width="50%"></a>
          </div>
          <br>
          <strong>TRAINING</strong>
          <p>Developing teams through engaging content.</p>
        </div>
      </div>
    </div>
  </section>
</div>

<section style="background-color: #e8eaec;">
  <div class="container-fluid pt-3 pb-3">
    <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">What they Say</h1>
    <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">Testimonials</p>
    <br>
    <div class="row">
    <?php 
      $data = $yourcoach_db->get_TestimonialsShowcase();
      foreach ($data as $key => $val){
        $first_name = explode(' ',trim($val['Name']));
        echo '
        <div class="col-lg-6" style="padding-left: 20px; padding-right: 20px;">
          <div class="card wow fadeInUp hoverable">
            <div class="card-body">
              <p class="card-text">
                <i class="fa fa-quote-left"></i> '.$val['Testimonial_Message'].'
              </p>
              <footer class="blockquote-footer">
                '.$first_name[0].' ('.$val['Title'].')
              </footer>
            </div>
          </div>
        </div>';
      };
    ?>
    </div>
    <div class="row pt-5 mb-4 center-text" align="center">
      <div class="col-md-12">
        <a href="./?p=testimonials" class="btn btn-outline-black waves-effect"><strong>more</strong></a>
      </div>
    </div>
  </div>
</section>


<div class="streak streak-photo streak-md" style="background-image:url('./static/img/phanlax/quality_life.jpg')">
  <div class="mask flex-center rgba-stylish-strong">
    <div class="white-text smooth-scroll wow fadeIn" data-wow-delay="0.2s">
      <h3 class="text-center h3-responsive mb-5">
      <i class="fas fa-quote-left" aria-hidden="true"></i>
      <?php echo $yourcoach_db->get_Text('First', 'Quote_Text');?>
      <i class="fas fa-quote-right" aria-hidden="true"></i></h3>
      <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~
      <?php echo $yourcoach_db->get_Text('First', 'Quote_Author');?>
    </div>
  </div>
</div>


<div class="container">
  <section class="section feature-box pt-3 pb-4">
    <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">About Me</h1>
    <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">All about my work</p>
    <div class="line  wow fadeIn" data-wow-delay="0.2s"></div>
    <br><p align="justify"><?php echo $Parsedown->text($yourcoach_db->get_Text('First', 'About_Me'));?></p>

    <div class="row my-5 pt-4 wow fadeIn align-items-center" data-wow-delay="0.2s">

      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/badges/emcc_badge.png" alt="EMCC badge" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/badges/icf_badge.png" alt="ICF badge" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/badges/bps_badge.png" alt="BPS Badge" class="img-fluid">
      </div>
      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/badges/genos_badge.png" alt="Genos Badge" class="img-fluid">
      </div>
    </div>

    <div class="row my-5 pt-4 wow fadeIn" data-wow-delay="0.2s">
      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/logos/IAPO_logo.jpg" alt="IAPO Logo" class="img-fluid" width="50%">
      </div>
      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/logos/mindsonar.png" alt="Mindsonar Logo" class="img-fluid" width="50%">
      </div>
      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/logos/values_badge.png" alt="Values Badge" class="img-fluid" width="50%">
      </div>
      <div class="col-lg-3 col-md-6 text-center pt-4">
          <img src="./static/img/logo_cci1.png" alt="CCI Logo" class="img-fluid" width="50%">
      </div>
    </div>
  
  </section>
</div>

<div class="container-fluid" style="background-color: #e8eaec;">
  <div class="container">
    <section class="section feature-box pt-3 pb-4">
      <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Contact</h1>
      <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">Stay in touch</p>
      <div class="line  wow fadeIn" data-wow-delay="0.2s"></div>
      <br>
      <div class="card">
        <div class="row">

          <div class="col-lg-6">
            <div class="card-body center-text" align="center">
              <a class="btn btn-outline-black waves-effect" href="#" data-toggle="modal" data-target="#modalContactForm"><strong>Click here to Write to me</strong></a>
              <br><br>OR
              <form action="." method="post" role="form">
              <input type="hidden" name="action" id="action" value="subscribe_me">
              <div class="row">
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact_name" name="contact_name" class="form-control" required>
                    <label for="contact_name" class="">Your name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact_mail" name="contact_mail" class="form-control" required>
                    <label for="contact_mail" class="">Your email</label>
                  </div>
                </div>
              </div>
              <input type="hidden" name="token" value="<?php echo $token; ?>">
              <button class="btn btn-outline-black waves-effect"><strong>Subscribe to Newsletter</strong></button>
              <br><small>By subscribing, you agree to our <a href="./?p=privacy">Privacy Statement.</a></small>
              </form>
            </div>
          </div>

          <div class="col-lg-6" style="background-color: #323438;">
            <div class="card-body contact text-center h-100 white-text">
              <h3 class="my-4 pb-2">Contact information</h3>
              <ul class="text-lg-left list-unstyled ml-4">
                <li><p><a href="https://goo.gl/maps/6hmGNPB4fpcZ6nxZ8" target="_blank" style="color:white;"><i class="fas fa-map-marker-alt"></i> Victoria Cross, Cork, Ireland</a></p></li>
                <li><p><a href="tel:+353871232180" style="color:white;"><i class="fas fa-phone"></i> +353 (0) 87 123 2180</a></p></li>
                <li><p><a href="mailto:info@yourcoach.ie" target="_blank" style="color:white;"><i class="fas fa-envelope"></i> info@yourcoach.ie</a></p></li>
              </ul>
              <hr class="hr-light my-4">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <br>
</div>
</main>

<script type="text/javascript" src="./static/mdb482/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/popper.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/mdb.js"></script>

<script>
var window_width = $(window).width();
if (window_width < 600) {
  document.getElementById("pat_background").src="";
}
</script>

<script type="text/javascript">
objectFitImages();
jarallax(document.querySelectorAll('.jarallax'));
jarallax(document.querySelectorAll('.jarallax-keep-img'), {
    keepImg: true,
});
</script>