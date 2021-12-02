window.addEventListener("DOMContentLoaded", function () {
    //filter
    $("#filterSubmit").click(function (e) {
        e.preventDefault();
        var data = $("#formFilter").serialize();
        $.ajax({
            url: "/admin/order-detail/fetch_data",
            method: "GET",
            data: data,
            success: function (response) {
                $("#data_table").html(response);
            },
        });
    });
    //refresh
    $("#resetFilter").click(function (e) {
        $.ajax({
            url: "/admin/order-detail",
            method: "GET",
            success: function (response) {
                $("#data_table").html(response);
            },
        });
    });
    //paginate
    $(document).on("click", ".pagination a", function (e) {
        e.preventDefault();
        var page = $(this).attr("href").split("page=")[1];
        fetch_data(page);
    });
    //paginate fetch data
    function fetch_data(page) {
        var data = $("#formFilter").serialize();
        $.ajax({
            url: "/admin/order-detail/fetch_data?page=" + page,
            data: data,
            success: function (response) {
                $("#data_table").html(response);
            },
        });
    }
});
