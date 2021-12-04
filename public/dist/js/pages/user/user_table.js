window.addEventListener("DOMContentLoaded", function () {
    //filter
    $("#filterSubmit").click(function (e) {
        e.preventDefault();
        var pagination_limit = $('select[name=pagination_limit]').val();
        var fullName = $('input[name=fullName]').val();
        var sortBy = $('select[name=sortBy]').val();
        let data = {
            'pagination_limit':pagination_limit,
            'fullName':fullName,
            'sortBy':sortBy
        }
        console.log(data);
        $.ajax({
            url: "/admin/users_admin/fetch_data",
            method: "GET",
            data: data,
            success: function (response) {
                $("#data_table").html(response);
            },
        });
    });
    //refresh
    $("#resetFilter").click(function (e) {
        $.ajax({
            url: "/admin/user_admin",
            method: "GET",
            success: function (response) {
                $("#data_table").html(response);
            },
        });
    });
    //paginate
    $(document).on("click", ".pagination a", function (e) {
        e.preventDefault();
        var page = $(this).attr("href").split("page=")[1];
        fetch_data(page);
    });
    //paginate fetch data
    function fetch_data(page) {
        var data = $("#formFilter").serialize();
        $.ajax({
            url: "/admin/users_admin/fetch_data?page=" + page,
            data: data,
            success: function (response) {
                $("#data_table").html(response);
            },
        });
    }

    //delete
    $(document).on("click", ".delete", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                //FIXME:
                var data = $("#formFilter").serialize();
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                });
                $.ajax({
                    url: "/admin/user_admin/" + $(this).attr("userID"),
                    method: "DELETE",
                    success: function (response) {
                        if (response.status == 200) {
                            alertProcess();
                            setTimeout(function () {
                                Swal.fire(
                                    "Deleted!",
                                    `${response.message}`,
                                    "success"
                                );
                                $("#data_table").load(
                                    "/admin/users_admin/fetch_data",
                                    data
                                );
                            }, 1500);
                        }
                        if (response.status == 404) {
                            alertProcess();
                            setTimeout(function () {
                                Swal.fire(
                                    "Delete not success!",
                                    `${response.message}`,
                                    "error"
                                );
                                $("#data_table").load(
                                    "/admin/users_admin/fetch_data",
                                    data
                                );
                            }, 1500);
                        }
                    },
                });
            }
        });
    });

    //alert alert process
    function alertProcess() {
        let timerInterval;
        Swal.fire({
            title: "Deletion in progress",
            html: "Progress will be completed in about in <b></b> milliseconds.",
            timer: 1500,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
                const b = Swal.getHtmlContainer().querySelector("b");
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft();
                }, 100);
            },
            willClose: () => {
                clearInterval(timerInterval);
            },
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log("I was closed by the timer");
            }
        });
    }
});
