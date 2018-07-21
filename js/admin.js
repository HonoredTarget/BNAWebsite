$(function () {
    var password;
    do {
        password = prompt("Please Enter Password For Admin Access");
    } while (password != "admin")

    $("#sub").click(function () {
        if (confirm("Are You Sure You Would Like To Submit This Message Or Email")) {
            if ($("#title").val() != "" && $("#body").val() != "") {
                $.ajax({
                    url: "php/adminMessage.php?title=" + $("#title").val().replace('&','%26') + "&subject=" + $("#subject").val().replace('&','%26') + "&body=" + $("#body").val().replace(/\n/g, '<br>').replace('&','%26') + "&addToMessageboard=" + $("#addToMessageboard:checked").val() + "&sendAsEmail=" + $("#sendAsEmail:checked").val(),
                    dataType: 'json',
                    async: true,
                    success: function (response) {
                        console.log(response);
                    },

                });//addToMessageboard sendAsEmail
                $("#title").val("");
                $("#subject").val("");
                $("#body").val("");
                $('#addToMessageboard').prop('checked', false);
                $('#sendAsEmail').prop('checked', false);
                alert("Your Form Has Been Submitted");
            } else {
                alert("Please Fill In All Fields");
            }
        }
    });
});