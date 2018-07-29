<?php
session_start();
//$id = $_POST["id"];
//$id='61';
//print_r($_POST);
//echo json_encode($_POST);
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
$id=$_POST["eventid"];
//echo $id;
try {
    $bdd = new PDO('mysql:host=182.50.133.51;dbname=studDB18A', 'studDB18A', 'stud18aDB1!');
} catch (Exception $e) {
    exit('Unable to connect to database.');
}
//echo ('connection ok');
$sql = "DELETE from tbl_211 WHERE id=" . $id ."";
//echo $sql;
$q = $bdd->prepare($sql);
$q->execute();

if ($q->rowCount()>0) {
    echo "Appointment succefully deleted";
}
else {
    echo "cannot delete Appointment please check ID again";
}
?>