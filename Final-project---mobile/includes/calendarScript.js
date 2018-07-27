
$(document).ready(function() {
    function fmt(date) {
        return date.format("YYYY-MM-DD HH:mm");
    }
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: "events.php",
        // Convert the allDay from string to boolean
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        defaultDate: '2018-07-29',
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectHelper: true,
        select: function(start, end) {
            // Display the modal.
            // You could fill in the start and end fields based on the parameters
            $('.modal').modal('show');

        },
        eventClick: function(event, element) {
            // Display the modal and set the values to the event values.
            $('.modal').modal('show');
            $('.modal').find('#title').val(event.title);
            $('.modal').find('#starts-at').val(event.start);
            $('.modal').find('#ends-at').val(event.end);

        },
        editable: true,
        eventLimit: true // allow "more" link when too many events

    });
    $('#calendar').fullCalendar('option', 'height', 500);

    // Bind the dates to datetimepicker.
    // You should pass the options you need
    $("#starts-at, #ends-at").datetimepicker({
        format:("YYYY-MM-DD HH:mm")
    });


    // Whenever the user clicks on the "save" button om the dialog
    $('#save-event').on('click', function() {
        var title = $('#title').val();
        if (title) {
            var eventData = {
                title: title,
                start: $('#starts-at').val(),
                end: $('#ends-at').val()
            };

            $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true

            $.ajax({
                url: 'addEvent.php',
                data: 'title='+ eventData.title+'&start='+ eventData.start +'&end='+ eventData.end +'&id='+ eventData.id ,
                type: "POST",
                success: function(json) {
                    alert("Updated Successfully");
                    console.log (eventData.start);
                    console.log (eventData.end)
                    console.log(eventData.title);
                }
            });


        }
        $('#calendar').fullCalendar('unselect');

        // Clear modal inputs
        $('.modal').find('input').val('');

        // hide modal
        $('.modal').modal('hide');
    });
});


