$(document).ready(function () {    
    $(document).on("click", ".btn-quantity", function (e) {
        e.preventDefault();
        var quantity = $(this).siblings(".quantity_item").val();
        var price = $(this).siblings(".price_item").val();
        var total = quantity * price;
        var parentOfThis = $(this).parent();
        var siblingParentOfThis = parentOfThis.parent().siblings(".sub-total");
        siblingParentOfThis.children(".totalPrice").text(
            total.toLocaleString("it-IT", {
                style: "currency",
                currency: "VND",
            })
        );
        var data = { quantity: quantity };
        var id = $(this).siblings("input[name=id]").val();
        var data = { id: id, quantity: quantity };
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/client/page/shopping/update-cart",
            method: "POST",
            data: data,
            success: function (response) {
                $("#total_cart").text(response.quantity + " items");
                $("#total_bill").text(
                    response.total.toLocaleString("it-IT", {
                        style: "currency",
                        currency: "VND",
                    })
                );
                $("#total-info").text(
                    response.total.toLocaleString("it-IT", {
                        style: "currency",
                        currency: "VND",
                    })
                );
            },
        });
    });    
    $(document).on("click", ".btn-delete", function (e) {  
        let id = $(this).parent().siblings(".quantity").children('.quantity-input').children('.id').val();
        var data = { id: id};         
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/client/page/shopping/update-cart",
            method: "POST",
            data: data,
            success: function (response) {
                $("#total_cart").text(response.quantity + " items");
                $("#total_bill").text(
                    response.total.toLocaleString("it-IT", {
                        style: "currency",
                        currency: "VND",
                    })
                );
                $("#total-info").text(
                    response.total.toLocaleString("it-IT", {
                        style: "currency",
                        currency: "VND",
                    })
                );
            },
        });
    });
});
