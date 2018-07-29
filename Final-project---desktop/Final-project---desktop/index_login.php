<?php
include 'includes/server/db.php';
include "includes/server/config.php";
include "session1.php";



//session_start();
if (!empty($_POST["email"])) {
    echo 'FORM SENT';
    $query = "SELECT * FROM tbl_users_211 WHERE email='"
        . $_POST["email"]
        ."' and password= '"
        . $_POST["password"]
        ."'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        echo "success";
        $_SESSION["name"]=$row['name'];
        echo 'Hello '.$row["name"].'!';
        header('Location:'.'index.php');



    } else {
        $message = "Invalid Username or Password!'";
        echo "failure";

    }



}
?>

<!DOCTYPE html>
<html>
<head>

    <title>LOGIN</title>
</head>
<body>
<div id="wrapper">
    <form action="#" method="post" id="frm">
        <div><label for="login">Email:</label></div>
        <div><input name="email" type="email"></div>
        <div><label for="password">Password:</label></div>
        <div><input name="password" type="password"></div>
        <div><input type="submit" name="login" value="log me in"></div>
        <div><?php if(isset($message)){ echo $message;} ?></div>
    </form>
</div>

</body>
</html>
