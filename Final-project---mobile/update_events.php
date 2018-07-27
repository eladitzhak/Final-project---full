<?php
/* Values received via ajax */
$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
// connection to the database
try {
    $bdd = new PDO('mysql:host=182.50.133.51;dbname=studDB18A', 'studDB18A', 'stud18aDB1!');
} catch (Exception $e) {
    exit('Unable to connect to database to update event.');
}
// update the records
$sql = "UPDATE events SET title=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title, $start, $end, $id));
?>