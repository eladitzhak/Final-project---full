<!--<!DOCTYPE html>-->
<html lang="en">

<head>
    <title>ReserveIT - הזמנת התור</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    custom css-->
    <link rel="stylesheet" href="includes/style.css">
<!--    Font awesome cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/style.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href='includes/css/fullcalendar.css' rel='stylesheet' />
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
    <header>
        <div class="wrapper">
            <a href="#" class="userProfile">
                <section class="userPic"></section>
            </a>
            <a href="#" class="menuIcon"></a>
            <a class="logo" href="index.html"></a>
        </div>
    </header>
    <nav class="hamburger">
        <ul>
            <li>
                <h4>שלום יולי</h4>
                <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <a href="../Final-project---desktop/index.php">התנתקות</a>
            </li>
            <li><a href="#">ניהול תורים</a></li>
            <li><a href="#">בתי עסק</a></li>
            <li><a href="#">מערכת ההחלפות</a></li>
            <li><a href="#">הגדרות</a></li>
        </ul>
    </nav>
    <main id="Time">
        <section class="assistingBar">
            <div class="wrapper">
                <p>קביעת תור חדש<a href="New_Appointment_Shops.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
            </div>
        </section>
        <div class="wrapper">
            <article id="floatingApproval">
                <h2>אישור פרטי התור</h2>
                <article>
                    <img src="images/barbershop.jpg">
                    <b>מקום: </b><p class="shopName_"></p>
                    <b>כתובת: </b><p class="shopAddress_"></p>
                    <b>תאריך: </b><p>13/09/2018</p>
                    <b>שעה: </b><p>17:00</p>
                </article>
                <a href="#" id="notGood">
                    <button type="button" value="no"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> לא, לא טוב </button>
                </a>
                <a href="New_Appintment_Approval.html">
                    <button type="button" value="yes"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>אש </button>
                </a>
            </article>
            <h1>בחירת יום ושעה</h1>
            <section class="mainItems">
                <section class="container">
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
                                <form class="form-horizontal" method="POST" action="addEvent.php">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
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
<!--                container close-->
                </section>
<!--            mainitemsclose-->
            </section>
<!--wrapper close-->
        </div>
        <!--CALENDAR!!!!!!-->
    </main>
    <script src="includes/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="includes/js/bootstrap.min.js"></script>
    <!-- FullCalendar -->
    <script src='includes/js/moment.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src='includes/js/fullcalendar.min.js'></script>
    <!-- JS -->
    <script src="includes/calendarScript.js"></script>
    <script src="includes/getShopDetails.js"></script>
    <script src="includes/scripts.js"></script>
</body>
</html>
