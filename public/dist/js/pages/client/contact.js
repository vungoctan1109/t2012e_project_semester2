window.addEventListener('DOMContentLoaded', function () {

    //jquery validation
    $("#frmFeedBack").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "name": {
                required: true
            },
            "email": {
                required: true
            },
            "phone": {
                required: true
            },
            "comment": {
                required: true
            }
        }
    });
    if (document.forms['frmFeedBack'].reportValidity()){
        //process submit button
        $('form[name=frm-contact]').submit(function(e){
            e.preventDefault();
            const name = $('input[name=name]').val();
            const email = $('input[name=email]').val();
            const phone = $('input[name=phone]').val();
            const comment = $('textarea[name=comment]').val();
            let data = {
                'name':name,
                'email':email,
                'phone':phone,
                'comment':comment,
            };
            console.log(data)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/client/page/feedback',
                method:'post',
                data:data,
                success: function(res){
                    if(res.status === 200){
                        // swal("Good job!", "You clicked the button!", "success")
                        Swal.fire({
                            icon: 'success',
                            // title: 'Oops...',
                            text: 'Send feedback successfully !!!',
                            // footer: '<a href="">Why do I have this issue?</a>'
                        })
                        setTimeout(function() {
                            window.location.href = "/client/page/home";
                        },2000)

                    }
                    if(res.status === 500){
                        Swal.fire({
                            icon: 'error',
                            // title: 'Oops...',
                            text: 'Send feedback failed !!!',
                            // footer: '<a href="">Why do I have this issue?</a>'
                        })
                    }
                }
            })
        })
    }
})
