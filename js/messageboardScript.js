$(function () {
    $.ajax({
        url: "php/messageboard.php",
        dataType: 'json',
        async: true,
        success: function(response) {
            //console.log(response)
            $("#cont").html(response);
        },

    });
});

/* 
<div class="row">
                <div class="col-md-12">
                    <h4 class="title">Comfortably Numb</h4>
                    <hr>
                    <p class="date">7/17/2018</p>
                    <p class="mainText"></p>
                </div>
            </div>

*/