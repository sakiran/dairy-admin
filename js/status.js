
function displaycustomerdetails()
{

$(document)
    .ready(function () {

        var a = $("#order-form").serializeArray();

        $.ajax({
            url: "/dairy/server/status.php",
            type: "GET",
            data: a,
            dataType: "html",
            beforeSend: function () {},
            complete: function () {},
            error: function (a, b, c) {
                console.log(c);
            },
            success: function (a, b, d) {
                var json = jQuery.parseJSON(a);
                var serialnumber;
                serialnumber = 0;



                for (var i in json) {

                    serialnumber = serialnumber + 1;







                    $("#statustable > tbody")
                        .append("<tr><td>" + serialnumber + "</td><td>" + json[i].orderdate + "</td><td>" + json[i].buffalomilk + "</td><td>" + json[i].cowmilk + "</td></tr>");//<td>" + milkdetails + "</td><td>" +json[i].orderstatus + "</td></tr>");



                }




            }

        });



 




    });

}

$(document).on('click', '#submitbutton', function() {

    displaycustomerdetails();

});