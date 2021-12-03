window.addEventListener('DOMContentLoaded', function () {
    $('#btnSubmit').click(function (e) {
        e.preventDefault();
        var email = $('input[name=email]').val();
        var password = $('input[name=password]').val();

        let data1 = {
            'email': email,
            'password': password
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/auth/adminlogin',
            method: 'POST',
            data: data1,
            success: function (response) {
                if(response.status == 200){
                    window.location.href = "/admin/dashboard";
                }else{
                    alert(response.message)
                }
            }
        })
    })
})
