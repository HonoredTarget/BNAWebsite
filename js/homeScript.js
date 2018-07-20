$(function () {
    $.ajax({
        url: "php/home.php",
        dataType: 'json',
        async: true,
        success: function (response) {
            //console.log(response)
            //$("#messages").html(response);
            var array = response.split("&&&()");
            $("#messages").html(array[0]);
            $("#jumboHead").html(array[1]);
            $("#picture").html(array[2]);
            $("#jumboBody").html(array[3]);
        },

    });
});
/* 
<div class="mess">
    <h4>Title</h4>
    <hr>
    <h6>Date</h6>
    <p>Content</p>
</div>
*/