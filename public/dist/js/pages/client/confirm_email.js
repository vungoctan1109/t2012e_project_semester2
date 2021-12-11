$('document').ready(function() {
    var orderId = $('#order_id').val();
    var data = {id: orderId}
    $.ajax({
        url: '/client/page/confirm-email',
        method: 'GET',
        data: data,
        success: function(response) {
            alert('oke!');
        }     
    });
});