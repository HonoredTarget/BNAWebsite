$(function () {
    $.ajax({
        url: "php/member.php",
        dataType: 'json',
        async: true,
        success: function (response) {
            //console.log(response)
            //$("#messages").html(response);
            var array = response.split("&&&()");
            $("#whyJoin").html(array[0]);
            $("#whyText").html(array[1]);
            $("#whyPic").html(array[2]);
        },

    });
    $("#subForm").click(function () {
        if ($("#firstName").val() != "" && $("#lastName").val() != "" && $("#emailInput").val() != "") {
            $.ajax({
                url: "php/memberForm.php?firstName=" + $("#firstName").val() + "&lastName=" + $("#lastName").val() + "&email=" + $("#emailInput").val() + "&addToList=" + $("#emailList:checked").val(),
                dataType: 'json',
                async: true,
                success: function (response) {
                    console.log(response);
                },

            });
            $("#firstName").val("");
            $("#lastName").val("");
            $("#emailInput").val("");
            $('#emailList').prop('checked', false);
            alert("Your Form Has Been Submitted");
        }
        else {
            alert("Please Fill In All Fields");
        }
    });

});

// <img class="why-pic" src="img/whyJoin.jpg" alt="">