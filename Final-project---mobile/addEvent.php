<?php
// Values received via ajax
echo 'in addEvent';
// Connexion à la base de données
//require_once('bdd.php');
//echo $_POST['title'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$url = $_POST['url'];
try {
    $bdd = new PDO('mysql:host=182.50.133.51;dbname=studDB18A', 'studDB18A', 'stud18aDB1!');
} catch (Exception $e) {
    exit('Unable to connect to database.');
}
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])) {

    $title = $_POST['title'];
	$start = $_POST['start'];
//    $start = '2018-07-21';
	$end = $_POST['end'];
//    $end = '2018-07-21';
	$color = $_POST['color'];
//    $color = 'blue';

    echo '$title';
}

else {

    echo ("no details");

}


// $sql="INSERT INTO tbl_211 (title, start, end,color)  VALUES ('eli',' 2018-07-30 23:00:00','2018-07-30 23:45:00','red')";
	$sql = "INSERT INTO tbl_211 (title, start, end,color) VALUES ('$title','$start','$end','$color')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	echo $start;
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('ErrOur execute');
	}
	else {
        myCalendar.fullCalendar( 'renderEvent', myEvent );
    }



//header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>;
