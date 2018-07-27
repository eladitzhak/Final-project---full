<?php
define("DBHOST" , "182.50.133.51");
define("DBUSER" , "studDB18A");
define("DBPASS" , "stud18aDB1!");
define("DBNAME" , "studDB18A");
$connection = mysqli_connect(DBHOST, DBUSER , DBPASS , DBNAME);
//testing connection success
if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
    );
}