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
    var order_id;
    paypal.Button.render(
        {
            // Configure environment
            env: "sandbox",
            commit: true, // Show Pay Now button
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
            // Called when page displays
            validate: function (actions) {
                actions.disable(); // Allow for validation in onClick()
                paypalActions = actions; // Save for later enable()/disable() calls
            },
            // Called for every click on the PayPal button even if actions.disabled
            onClick: function (e) {
                var data1 = $("#formOrder").serialize();
                $.ajax({
                    url: "/client/page/order",
                    method: "post",
                    data: data1,
                    beforeSend: function () {
                        $(document).find("span.error").text(" ");
                    },
                    success: function (resp) {
                        if (resp.status == 200) {
                            paypalActions.enable();
                            order_id = resp.orderID;
                        }
                        if (resp.status == 400) {
                            paypalActions.disable();
                            var status = "warning";
                            alertAction(resp.message, status);
                            $.each(resp.errors, function (prefix, val) {
                                $("span." + prefix + "_error").text(val[0]);
                            });
                        }
                        if (resp.status == 500) {
                            paypalActions.disable();
                            var status = "error";
                            alertAction(resp.message, status);
                        }
                    }
                });
            },
            // Buyer clicked the PayPal button.
            payment: function (data, actions) {
                console.log("payment called");
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: {
                                    total: `${total}`,
                                    currency: "USD",
                                },
                            },
                        ],
                    },
                });
            },
            // Buyer logged in and authorized the payment
            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function () {
                    let data3 = { id:  order_id };
                    $.ajax({
                        url: "/client/page/update/checkout_order",
                        method: "post",
                        data: data3,
                        success: function (response) {
                            if(response.status == 200) {
                                $.ajax({
                                    url: `/client/page/thankyou/${response.order_id}`,
                                    method: "GET",
                                    success: function () {
                                        window.location.href = `/client/page/thankyou/${response.order_id}`;
                                    },
                                });
                            }
                            if(response.status == 500) {
                                var status = "error";
                                alertAction(response.message, status);
                            }
                            if(response.status == 404) {
                                var status = "error";
                                alertAction(response.message, status);
                            }
                        }
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
            beforeSend: function () {
                $(document).find("span.error").text(" ");
            },
            data: data1,
            success: function (resp) {
                if (resp.status == 200) {
                    $.ajax({
                        url: `/client/page/thankyou/${resp.orderID}`,
                        method: "GET",
                        success: function () {
                            window.location.href = `/client/page/thankyou/${resp.orderID}`;
                        },
                    });
                }
                if (resp.status == 400) {
                    var status = "warning";
                    alertAction(resp.message, status);
                    $.each(resp.errors, function (prefix, val) {
                        $("span." + prefix + "_error").text(val[0]);
                    });
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
