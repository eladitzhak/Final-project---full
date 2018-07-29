/*+++++++++++++++++++++++++++parse json for appointment+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

$(document).ready(function(){


    $.getJSON("includes/results.json",function(data){


        $.each(data.appointmentsEvents,function (i,obj){
            $('#selectToEdit').append (("<option>")+(this.id) +"." +("|") +(this.title) +("|") + (this.start) + ("|")+ (this.end)+("</option>"));
        });

    })
});
/*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/