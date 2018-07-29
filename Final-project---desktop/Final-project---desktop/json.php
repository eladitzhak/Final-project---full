<?php

include 'includes/server/db.php';

//include "session1.php";

//session_start();
$query = "SELECT * FROM tbl_211 order by id";
$result = mysqli_query($connection, $query);
if (!$result){
    die("db Query failed.");
}
if(!mysqli_set_charset($connection, 'utf8')) {
    echo 'the connection is not in utf8';
    exit();
}

//store the entire response
$response = array();
//the array that will hold the titles and links
$posts = array();
while($row=$result->fetch_assoc()) //mysql_fetch_array($sql)
{
    $title=$row['title'];
    $id=$row['id'];
    $start=$row['start'];
    $end=$row['end'];
//    echo $id;
//    echo("\n");
//each item from the rows go in their respective vars and into the posts array
    $posts[] = array('title'=> $title, 'id'=> $id,'start'=>$start,'end'=>$end);

}
//the posts array goes into the response
$response['appointmentsEvents'] = $posts;
//creates the file
$fp = fopen('includes/results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);
//echo "finised";

