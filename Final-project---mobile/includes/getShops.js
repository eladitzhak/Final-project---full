$(document).ready(function(){
    $.getJSON("data/barbershops.json",function(data){
        console.log(data);
        $('h1').html(data.category + " <i class=\"fa fa-scissors\" aria-hidden=\"true\"></i> ");
        $.each(data.shops, function () {
            var i;
            var t="";
            for(i=0;i<this.stars;i++){
                t+="<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
            }
            while(i<5) {
                t+="<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>";
                i++;
            }
            $('.mainItems').append("<a href=\"New_Appointment_Time.php?shopID=" + this.id +
                "\" class=\"ShopDetails\">" +
                "<h2>" + this.name + "</h2></i>\n" +
                "<article class=\"stars\">" +
                t +
                "</article>\n" +
                "<h4>" + this.address  + "</h4>\n" +
                "<h3>" + this.distance + "</h3>" +
                "</a>");
        })
    })
});