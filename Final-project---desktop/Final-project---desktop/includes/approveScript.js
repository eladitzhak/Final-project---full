/*+++++++++++++++++++++++++++Approve delete page+++++++++++*/
var id1="";
$(window).on('load', function () {

    var eventName = document.getElementById("Eventname");
    var eventDate = document.getElementById("eventDate");
    var eventTime = document.getElementById("eventTime");
    var eventID = document.getElementById("eventID");
    var submitDelBtn = document.getElementById("submitDel");


// var data =<?php echo $_SESSION['id']; ?>
// var idr = '<?php echo $id; ?>';
// var datar = <?php echo json_encode($data); ?>;?
// $(document).ready(function(){
//  $('#nameEvent').append(data);

    console.log(idr);


    var n = idr.indexOf('.');

// var str = "22.|new|2018-07-20 00:00:00|";
// getting the id
    var idEvent = idr.slice(n - 2, n);
    if (idEvent=="")
    {
        var idEvent = idr.slice(n - 1, n);
    }
// first |
    n = idr.indexOf('|');
// var t=idr.slice();
    t = idr.indexOf('|', [n + 1]);
    console.log(t);
    var nameEvent = idr.slice(n + 1, t);
    console.log(nameEvent);

    n = idr.indexOf(" ", [t + 1]);

    var startDateEvent = idr.slice(t + 1, n + 1);
    console.log(startDateEvent);

    t = idr.indexOf('|', n + 1);

    var startDateTime = idr.slice(n + 1, t);
    console.log(startDateEvent);

    eventName.append(nameEvent);
    eventDate.append(startDateEvent);
    eventTime.append(startDateTime);
    // eventID.append(idEvent);
    eventID.value=idEvent;
    id1 = idEvent;
});
//         submitDelBtn = document.getElementById("submitDel");
//         ididid=id1;
//         idGet=document.getElementById("eventID");
//         IDval=idGet.innerHTML;
//         submitDelBtn.onclick = function () {
//             $.ajax(
//                 {
//                     method: 'post',
//                     url: 'delete_event.php',
//                     params:
//                         {
//                             'id': ididid
//                         },
//                     success: function() {
//                         alert("success");
//
//                     }
//                 });
//         }
//
// });




    // submitDelBtn.onclick=function(){
    //     ididid=id1;
    //     $.ajax({
    //         type: "POST",
    //         url: "delete_event.php",
    //         data:  {
    //             // id: id1,
    //             name: "Jill",
    //             gameID: "RC"
    //         },
    //         success: function(){
    //             alert('success to dend id'+id1);
    //         },
    //         error: function(){
    //             alert('failure');
    //         }
    //     });
    //
    //
    // };





// });

