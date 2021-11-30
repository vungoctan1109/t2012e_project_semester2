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
});
