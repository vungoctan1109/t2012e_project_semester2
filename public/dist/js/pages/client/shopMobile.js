$(document).ready(function () {
    // add to cart
    $(document).on("click", "#btnAddToCart", function (e) {
        e.preventDefault();
        var data = $(this).parents("#formCart").serialize();
        $.ajax({
            url: "/client/page/shopping/cart ",
            method: "POST",
            data: data,
            success: function (response) {
                $("#total_cart").text(response.total_quantity + " items");
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 1000,
                });
            },
            error: function (response) {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 1000,
                });
            },
        });
    });

    $('#filterSubmit1').click(function (e) {
        e.preventDefault();
        var data2 = $('form[name=formFilter2]').serialize();
        console.log(data2)
        $.ajax({
            url: "/client/page/shop/mobile/filter",
            method: "POST",
            data: data2,
            success: function(response){
                $("#data_table").html(response);
            }
        })
    })

    $(document).on("click", ".pagination a", function (e) {
        e.preventDefault();
        var page = $(this).attr("href").split("page=")[1];
        fetch_data(page);
    });
    //paginate fetch data
    function fetch_data(page) {
        var data = $('form[name=formFilter2]').serialize();
        $.ajax({
            url: "/client/page/shop/fetch_data?page=" + page,
            data: data,
            success: function (response) {
                $("#data_table").html(response);
            },
        });
    }
})
;
