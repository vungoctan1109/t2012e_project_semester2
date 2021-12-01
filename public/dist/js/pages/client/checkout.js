$(document).ready(function (e) {
    var total;
    var total_vnd;
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "/client/page/checkout-total",
        method: "GET",
        success: function (response) {
            total = response.paypal_format;
            total_vnd = response.total.toLocaleString("it-IT", {
                style: "currency",
                currency: "VND",
            });
            $("#grand-total-price").html(total_vnd);
        },
    });

    $('input:radio[name="payment-method"]').change(function () {
        if ($(this).is(":checked") && $(this).val() == "paypal") {
            $("#btnPlaceOrder").show();
            $("#btnCod").hide();
        }
        if ($(this).is(":checked") && $(this).val() == "cod") {
            $("#btnPlaceOrder").hide();
            $("#btnCod").show();
        }
    });
    paypal.Button.render(
        {
            // Configure environment
            env: "sandbox",
            client: {
                sandbox:
                    "AbxeXUFr0NtwiRVfz5y8H4gfmSs3WeyCWVOLejqrmegNrR5ySQ-P_KS7l_aEJA2n86onnbMK1ZW3E6f2",
                production: "demo_production_client_id",
            },
            // Customize button (optional)
            locale: "en_US",
            style: {
                size: "medium",
                color: "gold",
                shape: "pill",
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,
            // Set up a payment
            payment: function (data, actions) {
                return actions.payment.create({
                    transactions: [
                        {
                            amount: {
                                total: `${total}`,
                                currency: "USD",
                            },
                        },
                    ],
                });
            },
            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    // Show a confirmation message to the buyer
                    var data1 = $("#formOrder").serialize();
                    $.ajax({
                        url: "/client/page/order",
                        method: "post",
                        data: data1,
                        success: function (resp) {
                            var orderID = resp.orderID;
                            let data3 = { id: orderID };
                            $.ajax({
                                url: "/client/page/update/checkout_order",
                                method: "post",
                                data: data3,
                                success: function (resp) {
                                    if (resp.status == 200) {
                                        var status = "success";
                                        alertAction(resp.message, status);
                                        setTimeout(function () {
                                            $.ajax({
                                                url: `/client/page/thankyou/${resp.orderID}`,
                                                method: "GET",
                                                success: function () {
                                                    window.location.href = `/client/page/thankyou/${resp.orderID}`;
                                                },
                                            });
                                        }, 1000);
                                    }
                                    if (resp.status == 400) {
                                        var status = "error";
                                        alertAction(resp.message, status);
                                    }
                                    if (resp.status == 500) {
                                        var status = "error";
                                        alertAction(resp.message, status);
                                    }
                                },
                            });
                            //sweetalert
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Payment success !!!!",
                                showConfirmButton: false,
                                timer: 2500,
                            });
                        },
                    });
                });
            },
        },
        "#btnPlaceOrder"
    );

    $("#btnCod").click(function (e) {
        e.preventDefault();
        var data1 = $("#formOrder").serialize();
        $.ajax({
            url: "/client/page/order",
            method: "post",
            data: data1,
            success: function (resp) {
                //sweetalert
                if (resp.status == 200) {
                    var status = "success";
                    alertAction(resp.message, status);
                    setTimeout(function () {
                        $.ajax({
                            url: `/client/page/thankyou/${resp.orderID}`,
                            method: "GET",
                            success: function () {
                                window.location.href = `/client/page/thankyou/${resp.orderID}`;
                            },
                        });
                    }, 1000);
                }
                if (resp.status == 400) {
                    var status = "error";
                    alertAction(resp.message, status);
                }
                if (resp.status == 500) {
                    var status = "error";
                    alertAction(resp.message, status);
                }
            },
        });
    });
    function alertAction(message, status) {
        Swal.fire({
            position: "top-end",
            icon: `${status}`,
            title: `${message}`,
            showConfirmButton: false,
            timer: 1000,
        });
    }
});
