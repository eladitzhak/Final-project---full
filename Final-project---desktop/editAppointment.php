<?php
/**
 * Created by PhpStorm.
 * User: eitzhak
 * Date: 25-Jul-18
 * Time: 23:17
 */
//require_once ("appointmentsSelect.php")


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
            <a class="logo" href="index.html"></a>
            <a href="#" class="menuIcon"></a>
            <a href="#" class="userProfile"><section class="userPic"></section><b>דן נודלמן</b></a>
            <a href="#" class="settingsIcon" title="הגדרות"></a>
            <input type="search" value="חיפוש בית עסק.." title="חיפוש לפי: שם עסק/שם בעל העסק/מיקום העסק">
        </div>
    </header>
    <div class="wrapper">
        <nav class="indexNav">
            <ul>
                <li><a href="index.html">יומן</a></li>
                <li><a href="#">תור חדש</a></li>
                <li class="selected"><a href="deleteOrEdit.html">עדכון תור קיים</a></li>
                <li><a href="#">כל בתי העסק</a></li>
                <li><a href="#">הגדרות</a></li>
            </ul>
        </nav>
        <main id="editAppMain">
            <h1>עריכת תור</h1>
            <article class="selectAppointment">
                <h3>בחר את התור שברצונך לשנות:</h3>
                <select>
                    <option></option>
                    <option>טיפת חלב | 07/06/18</option>
                    <option>פגישה עם מנהלת "גן טובה" |  06/06/18</option>
                </select>
                <a href="#" class="chooseAppointmentToEdit">בחר</a>
            </article>
            <form class="savingChange" autocomplete="off">
                <p><label>
                    <h4>שם נותן השירות</h4>
                    <input type="text" required name="fullName" autofocus="autofocus" tabindex="1" id="full_name" value="טיפת חלב">
                </label></p>
                <p><label>
                    <h4>תאריך</h4>
                    <input data-toggle="datepicker"  value="07/06/2018" autofocus="autofocus" tabindex="1" id="input_from">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                </label></p>
                <p><label>
                    <h4>שעה</h4>
                    <input type="time" formmethod="post" tabindex="2" value="17:00">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </label></p>
                <p><label>
                    <h4>מיקום</h4>
                    <input type="text"  tabindex="3" value="הרצל 7/2, חדרה">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </label></p>
                <p><label>
                    <h4>הערה</h4>
                    <textarea name="comments" placeholder="הוסף הערה" rows="2" cols="30" id="appointmentTextArea" ></textarea>
                </label></p>
                <label><input type="button" value="שמור" class="saveEditChanges"></label>
            </form>
            <article class="changedSuccessfully">
                    <h3>עריכת התור בוצעה בהצלחה</h3>
                    <a href="index.html">חזרה לתפריט הראשי</a>
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
    <script src="includes/scripts.js"></script>
</body>
</html>