$(function () {
    var happy = "false";
    var password;
    while (happy == 'false') {
        password = prompt("Please Enter Password For Admin Access");
        $.ajax({
            url: "php/adminPass.php?pass=" + password,
            dataType: 'json',
            async: false,
            success: function (response) {
                happy = response;
            },
        });
        if (password == 'break') {
            break;
        }
    }

    $.ajax({
        url: "php/adminText.php",
        dataType: 'json',
        async: true,
        success: function (response) {
            var array = response.split("&&&()");
            $("#homePageText").val(array[0]);
            $("#membershipPageText").val(array[1]);
        },
    });

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

    $("#saveChanges").click(function () {
        $.ajax({
            url: "php/adminSave.php?homePageText=" + $("#homePageText").val().replace(/\n/g, '<br>').replace('&','%26') + "&membershipPageText=" + $("#membershipPageText").val().replace(/\n/g, '<br>').replace('&','%26'),
            dataType: 'json',
            async: true,
            success: function (response) {
                console.log(response);
            },
        });
        alert("Changes Saved!")
    });
});