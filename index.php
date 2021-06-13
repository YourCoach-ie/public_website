<?php 
session_start(); 
$token = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>

<!--
 _____      __   _      ___      _      _   _             
| _ \ \    / /__| |__  / __| ___| |_  _| |_(_)___ _ _  ___
|  _/\ \/\/ / -_) '_ \_\__ \/ _ \ | || |  _| / _ \ ' \(_-<
|_|   \_/\_/\___|_.__(_)___/\___/_|\_,_|\__|_\___/_||_/__/
                                                          

                   Patrick Pulfer <patrick@pweb.solutions>

==========================================================

YourCoach Website

==========================================================

-->


<?php

// Debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

// Importing credentials
    require './env.php';

// Importing classes
    require "./classes/class_db_yourcoach.php";
    $yourcoach_db = new YourCoach_DB($_yourcoach_host, $_yourcoach_database, $_yourcoach_user, $_yourcoach_pass);

// Importing libraries
    require './libraries/header.php';
    require './libraries/Parsedown.php';
    $Parsedown = new Parsedown();

// Pages according to IFs	
 	if(isset($_POST['action'])){require "./libraries/actions.php";} // Perform Action
  
  elseif(isset($_GET['p']) && $_GET['p'] == 'registration') {require "./templates/registration.php";}  // Page: Registration Forms for events
  elseif(isset($_GET['p']) && $_GET['p'] == 'business') {require "./templates/business.php";}  // Page: Business
  elseif(isset($_GET['p']) && $_GET['p'] == 'career') {require "./templates/career.php";}  // Page: Career Coaching
  elseif(isset($_GET['p']) && $_GET['p'] == 'life') {require "./templates/life.php";}  // Page: Life Coaching
  elseif(isset($_GET['p']) && $_GET['p'] == 'events') {require "./templates/events.php";}  // Page: Events
  elseif(isset($_GET['p']) && $_GET['p'] == 'media') {require "./templates/media.php";}  // Page: Media
  elseif(isset($_GET['p']) && $_GET['p'] == 'ciq') {require "./templates/ciq.php";}  // Page: Tool->CIQ
  elseif(isset($_GET['p']) && $_GET['p'] == 'mindsonar') {require "./templates/mindsonar.php";}  // Page: Tools->MindSonar
  elseif(isset($_GET['p']) && $_GET['p'] == 'values') {require "./templates/values.php";}  // Page: Tools->Values
  elseif(isset($_GET['p']) && $_GET['p'] == 'privacy') {require "./templates/privacy.php";}  // Page: About
  elseif(isset($_GET['p']) && $_GET['p'] == 'about') {require "./templates/about.php";}  // Page: About
  elseif(isset($_GET['p']) && $_GET['p'] == 'testimonials') {require "./templates/testimonials.php";}  // Page: Praises
  elseif(isset($_GET['p']) && $_GET['p'] == 'thankm') {require "./templates/thankm.php";}  // Page: Thank You Message
  elseif(isset($_GET['p']) && $_GET['p'] == 'thanks') {require "./templates/thanks.php";}  // Page: Thank You Subscription
	
	else{require './templates/first.php';}	


// Importing other libraries
  require './libraries/google_analytics.php';
  require './libraries/footer.php';
  require './libraries/contact_me_modal.php';
?>

</body></html>