$(function () {
    $("#sub").click(function () {
        if ($("#email").val() != "" && $("#subject").val() != "" && $("#content").val() != "") {
            $.ajax({
                url: "php/contact.php?email=" + $("#email").val() + "&phoneNumber=" + $("#phone").val() + "&subject=" + $("#subject").val() + "&content=" + $("#content").val().replace(/\n/g, '<br>'),
                dataType: 'json',
                async: true,
                success: function (response) {
                    console.log(response);
                },

            });
            alert("Your Form Has Been Submitted");
        } else {
            alert("Please Fill In All Fields");
        }
    });


});