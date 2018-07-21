$(function () {
    $("#sub").click(function () {
        if ($("#email").val() != "" && $("#subject").val() != "" && $("#content").val() != "") {
            $.ajax({
                url: "php/contact.php?email=" + $("#email").val().replace('&','%26') + "&phoneNumber=" + $("#phone").val() + "&subject=" + $("#subject").val().replace('&','%26') + "&content=" + $("#content").val().replace(/\n/g, '<br>').replace('&',"%26"),
                dataType: 'json',
                async: true,
                success: function (response) {
                    console.log(response);
                },

            });
            $("#email").val("");
            $("#subject").val("");
            $("#phone").val("");
            $("#content").val("")
            alert("Your Form Has Been Submitted");
        } else {
            alert("Please Fill In All Fields");
        }
    });


});