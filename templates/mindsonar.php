<style>
.navbar {
    background-color: #2E2E2E;
}
</style>

<main>
  <br><br>
  <section class="section pt-3 pb-4">
    <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">MindSonar®</h1>
    <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">Think Differently, Achieve Greatness</p>
    <div class="line wow fadeIn container" data-wow-delay="0.2s"><hr></div>
    <br><br>
    <div class="container">
    <img src="./static/img/banners/mind_sonar.jpg" class="img-fluid">
    <br><br>
    <p>
    <?php echo $Parsedown->text($yourcoach_db->get_Text('MindSonar', 'Main'));?>
    </p>
    <div class="text-center"><br>
    <a href="https://www.mindsonar.info/international-mindsonar-registry/" target="_blank"><img src="./static/img/logos/mindsonar.png" class="img-fluid"></a>
    </div>
  </section>
</main>

<script type="text/javascript" src="./static/mdb482/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/popper.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/mdb.js"></script>