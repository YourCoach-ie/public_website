<style>
.navbar {
    background-color: #2E2E2E;
}
</style>

<main>
  <br><br>
  <section class="section pt-3 pb-4">
    <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Values-Based Development</h1>
    <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">Discovering Your Values and Motivation to Help You Grow</p>
    <div class="line wow fadeIn container" data-wow-delay="0.2s"><hr></div>
    <br><br>
    <div class="container">
    <img src="./static/img/banners/core_values.jpg" class="img-fluid">
    <br><br>
    <p>
    <?php echo $Parsedown->text($yourcoach_db->get_Text('Values', 'Main'));?>
    </p>
  </section>
</main>

<script type="text/javascript" src="./static/mdb482/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/popper.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/mdb.js"></script>