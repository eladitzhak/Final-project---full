<?php
/* Values received via ajax */


$id = $_POST['eventid'];
//echo $id;
$title = $_POST['nameEvent'];
//echo $title;
$start = $_POST['eventDate'];
//echo $start;
$startTime=$_POST['eventStartTime'];
$endTime=$_POST['eventEndTime'];
$end=$_POST['eventDateEnd'];

//echo $endTime,$end;
$start= $start .$startTime;
//echo "\n",$start;
$end=$end ." " .$endTime;
//$end = $_POST['end'];
// connection to the database
try {
    $bdd = new PDO('mysql:host=182.50.133.51;dbname=studDB18A', 'studDB18A', 'stud18aDB1!');
} catch (Exception $e) {
    exit('Unable to connect to database to update event.');
}
// update the records
//$sql = "UPDATE tbl_211 SET title='$title',start='$start' WHERE id=$id";//works
$sql = "UPDATE tbl_211 SET title='$title',start='$start',end='$end' WHERE id=$id";//works
//$sql = "UPDATE tbl_211 SET title=?, start=?, end=? WHERE id=?";
//$sql = "UPDATE tbl_211 SET title='$title', start ='2018-07-11 01:01:00' WHERE id=47";  //works

//echo $sql;
$q = $bdd->prepare($sql);

$count=$q->execute(array($title,$start,$end, $id));

$count = $q->rowCount();


if ($count==0){
    $events = array();

    $sql = "select * from tbl_211 WHERE id=$id";
    $q = $bdd->prepare($sql);
    $q->execute();

    $row = $q->fetch(PDO::FETCH_ASSOC);
    $e = array();
    $e['id'] = $row['id'];
    $e['title'] = $row['title'];
    $e['start'] = $row['start'];
    $e['end'] = $row['end'];


// Merge the event array into the return array
    array_push($events, $e);

//$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

// sending the encoded result to success page
// Output json for our calendar
//echo json_encode($events);

$newTitle=$e['title'];
$newStart=$e['start'];
$newEnd=$e['end'];
echo "התור התעדכן בהצלחה! " . "<br>";
echo  ("new title: $newTitle  "."| ");
echo nl2br ("new time: $newStart "."| ");
echo nl2br ("new end: $newEnd "."| " );

}


?>