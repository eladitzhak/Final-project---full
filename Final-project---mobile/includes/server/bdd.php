<?php
try
{
    $bdd = new PDO('mysql:host=182.50.133.51;dbname=studDB18A', 'studDB18A', 'stud18aDB1!');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
