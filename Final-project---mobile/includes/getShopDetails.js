var shopAddress, shopName, shopRate, shopDistance;

function getShopID() {
    console.log(2);
    var aKeyValue=window.location.search.substring(1).split('&'),
        shopID=aKeyValue[0].split("=")[1];
    console.log(shopID);
    return shopID;
}

$(document).ready(function () {
    console.log(3);
    $.getJSON("data/barbershops.json",function(data){
        var shopId=getShopID();
        $.each(data.shops,function (i,obj) {
            if(obj.id==shopId){
                shopAddress=obj.address;
                shopDistance=obj.distance;
                shopName=obj.name;
                shopRate=obj.stars;
            }
        });
        $('.shopAddress_').html(shopAddress);
        $('.shopName_').html(shopName);
        var j;
        var t="";
        for(j=0;j<shopRate;j++){
            t+="<i class=\"fa fa-star\" aria-hidden=\"true\"></i>";
        }
        while(j<5) {
            t+="<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>";
            j++;
        }
        $('.mainItems').prepend("<a href=\"New_Appointment_Time.html?shopID=" + shopId +
            "\" class=\"ShopDetails\">" +
            "<h2>" + shopName + "</h2></i>\n" +
            "<article class=\"stars\">" +
            t +
            "</article>\n" +
            "<h4>" + shopAddress  + "</h4>\n" +
            "<h3>" + shopDistance + "</h3>" +
            "</a>");

    })

});


