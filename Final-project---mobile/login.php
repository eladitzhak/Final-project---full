<?php
include 'db.php';
include "config.php";


session_start();

if (!empty($_POST["email"])){
echo 'FORM SENT';
$query = "SELECT * FROM tbl_users_211 WHERE email='"
    . $_POST["email"] ." and password= '"
    . $_POST["password"]
    ."'";

$result = mysqli_query($connection , $query);
$row = mysqli_fetch_array($result);
if(is_array($row)) {
    echo ‘success’;
} else {
$message = "Invalid Username or Password!';
echo ‘failure’;
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
//    <h1>טופס הרשמה</h1>
//    <div class="boxContainer">
//        <form action="#" method="post" autocomplete="on" id="frm">
//            <p class="mustFill">* שדות חובה</p>
//            <p><label>
//                <h4><b class="mustFill">כתובת מייל </b>*</h4>
//                <input type="email" required name="mail" tabindex="3">
//            </label></p>
//            <p><label>
//                <h4><b class="mustFill">סיסמא </b>*</h4>
//                <input type="password" required name="pass" tabindex="2" id="userpassword"
//                       title="password should include 8 characters (digits and letters)" formmethod="post"
//                       maxlength="8" minlength="8">
//            </label></p>
//            <p><label>
//                <label class="showpass">הצג סיסמא<input type="checkbox" name="interests[]" onclick="showpass()"></label>
//            </label></p>
//            <label><input type="submit" value="Submit" id="submitBox" onclick="valid()"></label>
//            <div><?php if(isset($message)){echo $message;}?><!--</div>-->
<!--        </form>-->
<!--    </div>-->
</div>
<script src="includes/scripts.js"></script>
</body>
</html>