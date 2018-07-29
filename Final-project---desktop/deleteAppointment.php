<?php
//require_once 'includes/server/db.php';
include 'json.php';

//include "session1.php";



//session_start();
$query = "SELECT * FROM tbl_211";
    $result = mysqli_query($connection, $query);
    if (!$result){
        die("db Query failed.");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ReserveIT - עריכת תור קיים</title>
    <link rel="stylesheet" href="includes/style.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="includes/dist/datepicker.css">
</head>
<body>
    <header>
        <div class="wrapper">
            <a class="logo" href="index.php"></a>
            <a href="#" class="menuIcon"></a>
            <a href="#" class="userProfile"><section class="userPic"></section><b>דן נודלמן</b></a>
            <a href="#" class="settingsIcon" title="הגדרות"></a>
            <input type="search" value="חיפוש בית עסק.." title="חיפוש לפי: שם עסק/שם בעל העסק/מיקום העסק">
        </div>
    </header>
    <div class="wrapper">
        <nav class="indexNav">
            <ul>
                <li><a href="index.php">יומן</a></li>
                <li><a href="#">תור חדש</a></li>
                <li class="selected"><a href="deleteOrEdit.html">עדכון תור קיים</a></li>
                <li><a href="#">כל בתי העסק</a></li>
                <li><a href="#">הגדרות</a></li>
            </ul>
        </nav>
        <main id="deleteAppMain">
            <h1>מחיקת תור</h1>

            <article class="selectAppointment">



                <h3>בחר את התור שברצונך למחוק:</h3>
                <form action="" id="delAppoint" method="POST">
                <select name="selectToDelete" id="selectToDelete">
                    <option></option>
                    <option value="tup">טיפת חלב | 07/06/18</option>
                    <option>פגישה עם מנהלת "גן טובה" |  06/06/18</option>
<!--                    --><?php
//                    while($row=mysqli_fetch_row($result)){
//                        echo "<option>".
//                        $row["1"]."|". $row["2"]. "</option>";
//
//                    }
//
//                    ?>
                </select>

<!--                <a href="#" class="chooseAppointmentToEdit">בחר</a>-->
                <input type="submit" class="chooseAppointmentToEdit" action="#" id="submit1" value="בחר" name="delButton"/>
                </form  >
                <?php
                if (!empty ($_POST["selectToDelete"]))
                {
                    session_start();
                    $select1=$_POST["selectToDelete"];
                    echo  $select1;
                    echo "ok!!!!!!";
                    $_SESSION["id"]=$select1;
                    header('Location:'.'approveDelete.php');
//


                }
                ?>


            </article>
            <article class="changedSuccessfully">
                <h3>מחיקת התור בוצעה בהצלחה</h3>
                <a href="index.php">חזרה לתפריט הראשי</a>
            </article>
        </main>
    </div>
    <footer>
        <div class="wrapper">
            <section>כל הזכויות שמורות&nbsp;&copy&nbsp;ReserveIT</section>
            <section><a href="#">תנאי שימוש</a><a>|</a><a href="#">מדיניות הפרטיות</a></section>
        </div>
    </footer>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="includes/dist/datepicker.js"></script>
    <script src="includes/appointmentScripts.js"></script>
    <script src="includes/defaultScripts.js"></script>
</body>
</html>