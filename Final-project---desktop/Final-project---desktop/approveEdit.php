<?php
session_start();

$var=$_SESSION["id"];
//echo $var;
$id=$var;

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
<!--    <script>-->
<!--        alert("--><?php //echo $_SESSION['id']; ?><!--//");-->
<!--//    </script>-->
    <script type="text/javascript">
        var idr = '<?php echo $id; ?>';

        console.log(idr);
    </script>
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
        <h1>עריכת תור</h1>
        <section class="savingChange">
            <form action="update_event.php" id="delAppoint" method="POST" target="hidden-form"">
                <h3>אנא ערכו תור ולחצו על שלח</h3>
                <p>
                <h4>שם האירוע:</h4>
                <input type=text name="nameEvent" id="Eventname"></input>
                </p>
                <p>
                <h4>תאריך:</h4>
                <label>(YYYY-MM-DD) </label>
                <input type="text" id="eventDate" name="eventDate"></input>
                <h4>סיום:</h4>
                <input type="text" id="eventDateEnd" name="eventDateEnd"></input>
                <p>
                <h4>שעה:</h4>
                <input  type="time" id="eventTime" name="eventStartTime"></b>
                <h4>סיום:</h4>
                <input  type="time" id="eventEndTime" name="eventEndTime"></b>
                </p>
                <p>
                <h4>מזהה:</h4>
                <input type="text" id="eventID" name="eventid">
                </p>
                <input type="submit" class="chooseAppointmentToEdit" action="" id="submit"  name="delButton" value="שלח עדכון"/>
            </form>

            <a href="deleteOrEdit.html">ביטול</a>
            <?php
            if (!empty ($_POST["eventid"]))
            {
                session_start();
                $select1=$_POST["eventid"];
                echo  $select1;
                echo "ok!!!!!!";
                $_SESSION["id"]=$select1;
                header('Location:'.'approveDelete.php');
//


            }
            ?>

            <!--                        <a href="#" class="saveEditChanges">מאשר. שיימחק.</a>-->

            <!--            <input type="submit" class="saveEditChanges" action="delete_event.php" id="submitDel" value="מאשר. שיימחק."  name="delButton"/>-->
            <!--            <button type="button" class="saveEditChanges" action="delete_event.php" id="submitDel" value="מאשר. שיימחק."  name="delButton"></button>-->
            <!--            <button id="submit" type="button">OK</button>-->


        </section>
        <article class="selectAppointment">










        </article>
        <article class="changedSuccessfully">
            <h3>מחיקת התור בוצעה בהצלחה</h3>
            <a href="index.php">חזרה לתפריט הראשי</a>
        </article>
        <iframe style="" name="hidden-form" id="IframeEdit"></iframe>
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
<script src="includes/editScript.js"></script>
<script src="includes/defaultScripts.js"></script>

</body>
</html>