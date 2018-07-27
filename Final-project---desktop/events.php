<?php

// List of events
$json = array();

// Query that retrieves events
$requete = "SELECT * FROM tbl_211 ORDER BY id";
//
//$dbhost = "182.50.133.51";
//$dbuser = "studDB18A";
//$dbpass = "stud18aDB1!";
//$dbname = "studDB18A";
// connection to the database
try {
    $bdd = new PDO('mysql:host=182.50.133.51;dbname=studDB18A', 'studDB18A', 'stud18aDB1!');
} catch(Exception $e) {
    exit('Unable to connect to database.');
}
// Execute the query

$query = "SELECT * FROM tbl_211 ORDER BY id";
$sth = $bdd->prepare($query);
$sth->execute();
//echo 'delected all to show';
// Returning array
$events = array();


//https://coderwall.com/p/tr64xg/fetch-and-render-events-from-mysql-to-fullcalendar-js

// Fetch results
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    $e = array();
    $e['id'] = $row['id'];
    $e['title'] = $row['title'];
    $e['start'] = $row['start'];
    $e['end'] = $row['end'];
    $e['allDay'] = false;

// Merge the event array into the return array
    array_push($events, $e);
}
//$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

// sending the encoded result to success page
// Output json for our calendar
echo json_encode($events);
exit();
//echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

?>