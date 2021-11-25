window.addEventListener('DOMContentLoaded', function () {
    const data11 = $('#searchForm');
    $('#btnSearch').click(function (event) {
        event.preventDefault();
        $.ajax({
            type: 'GET',
            url: '/admin/category/search',
            data: data11.serialize(),
            success: function (data) {
                $('#data_table').html(data)
            },
            error: function(){
                alert('try again !!!')
            }
        })
    })

    // $(document).on('click', '.pagination a', function (event) {
    //     event.preventDefault();
    //     const page = $(this).attr('href').split('page=')[1];
    //     fetch_data(page);
    // })
    //
    // function fetch_data(page) {
    //     $.ajax({
    //         url: '/category/fetch_data?page=' + page,
    //         data: data11.serialize(),
    //         success: function (data) {
    //             $('#data_table').html(data);
    //         }
    //     })
    // }
})
