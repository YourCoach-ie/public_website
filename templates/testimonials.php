<style>
.navbar {
    background-color: #2E2E2E;
}
</style>

<?php  
  $data = $yourcoach_db->get_Testimonials();
?>

<main>
  <br><br>
  <section class="section pt-3 pb-4">
    <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">What they say</h1>
    <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">Testimonials</p>
    <div class="line  wow fadeIn container" data-wow-delay="0.2s"><hr></div>
    <br>
    <div class="container">
<?php
  foreach ($data as $key => $val){
    $first_name = explode(' ',trim($val['Name']));
    echo '<div class="card wow fadeInUp hoverable">';
    echo '<div class="card-body">';
    echo '<p class="card-text">';
    echo '<i class="fa fa-quote-left"></i> '.$val['Testimonial_Message'];
    echo '</p><footer class="blockquote-footer">';
    echo $first_name[0] . ' (' . $val['Title'] . ')</footer></div></div><br>';
  };
 ?>

    <br>
  </div>
</main>

<script type="text/javascript" src="./static/mdb482/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/popper.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/mdb.js"></script>