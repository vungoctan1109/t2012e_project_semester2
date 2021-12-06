window.addEventListener('DOMContentLoaded', function (e) {
    $('#btn-logout').click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure you want to sign out ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:'/auth/adminlogout',
                    method:'POST',
                    success: function (){
                        window.location.href = "/auth/adminlogin";
                    }
                })
            }
        })
    })

} )
