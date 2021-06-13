<?php
  $data = $yourcoach_db->get_Events();
  $count_events = count($data);
  echo 'Events: '.$count_events;
?>

<style>
.navbar {
    background-color: #2E2E2E;
}
</style>

<br>

<div class="jumbotron card">
  <div class="view">
    <img src="./static/img/banners/media_banner.jpg" class="img-fluid" alt="placeholder">
    <div class="mask flex-center waves-effect waves-light rgba-blue-light">
      <h1 class="white-text">Events</h1>
    </div>
  </div>
</div>

<div class="container" id="upcomming">
  <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Upcoming Events</h1>

<?php
  foreach ($data as $key => $val){
    if ($val['Deleted'] == 0){
    echo '
    <div class="row">
      <div class="col-md-12">
        <div class="card card-image" style="background-image: url(' . $val['Event_Background'] . ');">
        <div class="text-white text-center align-items-center rgba-black-strong py-5 px-4">
          <div>
            <h5 class="blue-text"><i class="fas fa-podcast"></i> ' . $val['Event_Type'] . '</h5>
            <h3 class="card-title pt-2"><strong>' . $val['Event_Title'] . '</strong></h3>
            <p>';
            if ($val['Event_Name'] <> '') {echo 'Event: ' . $val['Event_Name'];}        
    echo '  <br>When: ' . $val['Event_When'] . '</p>
            <p>' . $val['Event_Description'] . '</p>
            <a class="btn btn-blue" target="_blank" href="' . $val['Event_URL'] . '"><i class="fas fa-clone left"></i> Go To</a>
          </div>
        </div>
        </div>
      </div>
    </div>
  <br>
  ';
  }} ?>
</div><br>
<div class="container" id="upcomming">
  <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Past Events</h1>
  <?php
  foreach ($data as $key => $val){
    if ($val['Deleted'] == 1){
    echo '
    <div class="row">
      <div class="col-md-12">
        <div class="card card-image" style="background-image: url(' . $val['Event_Background'] . ');">
        <div class="text-white text-center align-items-center rgba-black-strong py-5 px-4">
          <div>
            <h5 class="blue-text"><i class="fas fa-podcast"></i> ' . $val['Event_Type'] . '</h5>
            <h3 class="card-title pt-2"><strong>' . $val['Event_Title'] . '</strong></h3><p>';
    if ($val['Event_Name'] <> '') {echo 'Event: ' . $val['Event_Name'];}        
    echo '
            <br>When: ' . $val['Event_When'] . '</p>
            <p>' . $val['Event_Description'] . '</p>
            <a class="btn btn-blue" target="_blank" href="' . $val['Event_URL'] . '"><i class="fas fa-clone left"></i> Go To</a>
          </div>
        </div>
        </div>
      </div>
    </div>
  <br>
  ';
  }} ?>
</div>

</div><br>


</div>

<script type="text/javascript" src="./static/mdb482/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/popper.min.js"></script>
<script type="text/javascript" src="./static/mdb482/js/mdb.js"></script>