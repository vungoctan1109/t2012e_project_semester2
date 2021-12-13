$(document).ready(function () {
    $("body").addClass("home-page home-01");
    $('input[name="search"]').keyup(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/client/page/shop/mobile/fetch_data?page=",
            method: "POST",
            beforeSend: function () {
                $("#listSearch").html("");
                equalElement();
            },
            data: data,
            success: function (response) {
                $("#fetchData").html(response.view);
                for (var i = 0; i < response.mobiles_suggest.length; i++) {
                    $("#listSearch").append(
                        `<a><option>${response.mobiles_suggest[i].name}</option></a>`
                    );
                }
                equalElement();
                $content[0].scrollTop = $content[0].scrollHeight;
            },
        });
    });
});
