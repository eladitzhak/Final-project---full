<?php
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ReserveIT - מערכת לסיוע בניהול וזימון תורים</title>
    <link rel="stylesheet" href="includes/style.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Open+Sans" rel="stylesheet">
    <!-- FullCalendar -->
    <link href='includes/css/fullcalendar.css' rel='stylesheet' />
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">
</head>
<body id="calendarPage">
<header>
    <div class="wrapper">
        <a class="logo" href="index.php" title="ReserveIT אימפריה"></a>
        <a href="#" class="menuIcon"></a>
        <a href="#" class="userProfile">
            <section class="userPic">
                <section id="numOfNotifications" title="הודעות חדשות">2</section>
            </section>
            <b>דן נודלמן</b>
        </a>
        <section id="notifications">
            <p>דן, ברוך הבא! <br>למידע נוסף על המערכת לחץ כאן</p>
            <p class="line">------------------------------------------</p>
            <p>דן, לאחרונה היה לך תור ל- "ענק הטיטולים". נודה לך אם תקדיש דקה מזמנך למלא ביקורת על החוויה. <br><a href="#">לחץ לביקורת</a></p>
        </section>
        <a href="#" class="settingsIcon" title="הגדרות"></a>
        <input type="search" value="חיפוש בית עסק.." title="חיפוש לפי: שם עסק/שם בעל העסק/מיקום העסק">
    </div>
</header>
<div class="wrapper">
    <nav class="indexNav">
        <ul>
            <li class="selected"><a href="index.php">יומן</a></li>
            <li><a href="#">תור חדש</a></li>
            <li><a href="deleteOrEdit.html">עדכון תור קיים</a></li>
            <li><a href="#">כל בתי העסק</a></li>
            <li><a href="#">הגדרות</a></li>
        </ul>
    </nav>
    <main>
        <article>
            <section>חשבונות  פעילים:</section>
            <section class="floatingActiveUser">דן נודלמן</section>
            <section class="floatingActiveUser"><a href="register.html">הוספת חשבון +</a></section>
        </article>
        <h1 id="calendarset">יומן</h1>
        <!--++++++++++++++++++++++CALENDAR implementation++++++++++++++++++++++++++++-->
        <div id="allcal">
            <div class="row">
                <div id="calendar" class="col-centered">
                    <div id='datepicker'></div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Create new event</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="col-xs-4" for="title">Event title</label>
                                    <input type="text" name="title" id="title" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="col-xs-4" for="starts-at">Starts at</label>
                                    <input type="text" name="starts_at" id="starts-at" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="col-xs-4" for="ends-at">Ends at</label>
                                    <input type="text" name="ends_at" id="ends-at" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="save-event">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <input type="hidden" name="id" class="form-control" id="id">
            <!--all cal close tag-->
        </div>
        <!--++++++++++++++++++++++CALENDAR implementation END++++++++++++++++++++++++++++-->
    </main>
</div>
<footer>
    <div class="wrapper">
        <section>כל הזכויות שמורות&nbsp;&copy&nbsp;ReserveIT</section>
        <section><a href="#">תנאי שימוש</a><a>|</a><a href="#">מדיניות הפרטיות</a></section>
    </div>
</footer>
<!--Custom scripts-->
<script src="includes/scripts.js"></script>
</body>
<!--  Core JavaScript Jquery -->
<script src="includes/js/jquery.js"></script>
<script src="includes/js/bootstrap.min.js"></script>
<!-- FullCalendar -->
<script src='includes/js/moment.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src='includes/js/fullcalendar.min.js'></script>
<!-- Calendar Core JavaScript -->
<script src="includes/calendarScript.js"></script>
</html>