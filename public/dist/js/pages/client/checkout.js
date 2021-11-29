window.addEventListener('DOMContentLoaded', function () {
    $('#btnPlaceOrder').click(function (e) {
        e.preventDefault();
        var data1 = $('#formOrder').serialize();
        $.ajax({
            url: '/client/page/order',
            method: 'post',
            data: data1,
            success: function(resp){
                console.log(resp);
                alert(resp.message)
                window.location.href = "/client/page/shop";
            }
        })
    })
})
