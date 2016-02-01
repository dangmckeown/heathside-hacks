<?php

//disable any unwanted information by commenting out with a leading #

//access database !IMPORTANT
//want to keep off our server as I'm not convinced by security
include('database-connection-file.php);

//change the quote text for each event
$event = "SEAA Road Relays 2016";

//user details
$name = $_POST['name'];
$email = $_POST['email'];
$eanumber = $_POST['eanumber'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

//race details - $contact should be email address for Heathsider responsible for coordinating entries
$contact = "dan@example.com";
$distance = $_POST['distance'];
# $prediction_h = $_POST['hours'];
$prediction_m = $_POST['minutes'];
$prediction_s = $_POST['seconds'];
# $prediction_ms = $_POST['milliseconds'];

/*
//second race details
$distance2 = $_POST['distance2'];
# $prediction_h2 = $_POST['hours2'];
$prediction_m2 = $_POST['minutes2'];
$prediction_s2 = $_POST['seconds2'];
# $prediction_ms2 = $_POST['milliseconds2'];
*/

/*
//third race details
$distance3 = $_POST['distance3'];
# $prediction3_h = $_POST['hours3'];
$prediction_m3 = $_POST['minutes3'];
$prediction_s3 = $_POST['seconds3'];
# $prediction_ms3 = $_POST['milliseconds3'];
*/

/*
//field event (eg for club champs)
$field = $_POST['field'];
*/

/*
//second field event (eg for club champs)
$field2 = $_POST['field2'];
*/

?>
