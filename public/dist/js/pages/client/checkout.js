$(document).ready(function (e) {
    var total;
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
        },
    });

    $('input:radio[name="payment-method"]').change(function () {
        if ($(this).is(":checked") && $(this).val() == "paypal") {            
            $("#btnPlaceOrder").show();
            $("#btnCod").hide();
        }
        if($(this).is(":checked") && $(this).val() == "cod")  {
            $("#btnPlaceOrder").hide();
            $("#btnCod").show();           
        }
    
    });
    $("#btnPlaceOrder").click(function (e) {
        e.preventDefault();
        var data1 = $("#formOrder").serialize();
        $.ajax({
            url: "/client/page/order",
            method: "post",
            data: data1,
            success: function (resp) {
                console.log(resp);
                alert(resp.message);
                window.location.href = "/client/page/shop";
            },
        });
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
                            window.location.href = "/client/page/shop";
                           
                        },
                    });
                    window.alert("Thank you for your purchase!");
                  
                });
            },
        },
        "#btnPlaceOrder"
    );
});
