$(document).ready(function () {
    equalElement();
    //start add to cart here!
    $(document).on("click", "#btnAddToCart", function (e) {
        e.preventDefault();
        var data = $(this).parents("#formCart").serialize();
        $.ajax({
            url: "/client/page/shopping/cart ",
            method: "POST",
            data: data,
            success: function (response) {
                $("#total_cart").text(response.total_quantity + " items");
                Swal.fire({
                    position: "bottom-start",
                    icon: "success",
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 1000,
                });
            },
            error: function (response) {
                Swal.fire({
                    position: "bottom-start",
                    icon: "error",
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 1000,
                });
            },
        });
    });
    //------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //Start filter here!
    // array filter
    var arrayBrand = new Set();
    //filter brand
    $(document).on("click", ".filter-brand", function (e) {
        e.preventDefault();
        if (!$(this).hasClass("active") && $(this).attr("value") != -1) {
            $(this).addClass("active");
            $(".filter-brand").each(function () {
                if ($(this).attr("value") == -1) {
                    $(this).removeClass("active");
                }
            });
        } else {
            $(this).removeClass("active");
        }
        if (!$(this).hasClass("active") && $(this).attr("value") == -1) {
            $(".filter-brand").each(function () {
                $(this).removeClass("active");
            });
            $(this).addClass("active");
        }
        $(this).each(function () {
            if ($(this).hasClass("active")) {
                if ($(this).attr("value") == "-1" || arrayBrand.has("-1")) {
                    arrayBrand.clear();
                    arrayBrand.add($(this).attr("value"));
                }
                arrayBrand.add($(this).attr("value"));
            } else if (!$(this).hasClass("active")) {
                if (arrayBrand.has($(this).attr("value"))) {
                    arrayBrand.delete($(this).attr("value"));
                }
            }
        });
        fetch_data_filter();
    });
    //filter price
    $(document).on("click", ".filter-price", function (e) {
        e.preventDefault();
        $(".filter-price").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).addClass("active");
        fetch_data_filter();
    });
    //filter battery
    $(".filter-battery").click(function (e) {
        e.preventDefault();
        $(".filter-battery").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).addClass("active");
        fetch_data_filter();
    });
    //filter screen
    $(".filter-screen").click(function (e) {
        e.preventDefault();
        $(".filter-screen").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).addClass("active");
        fetch_data_filter();
    });
    //filter ram
    $(".filter-ram").click(function (e) {
        e.preventDefault();
        $(".filter-ram").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).addClass("active");
        fetch_data_filter();
    });
    //paginate limit 
    $('#pagination_limit').change(function (e) {
        fetch_data_filter();
    })
    //sort by
    $('#sortBy').change(function (e) {
        fetch_data_filter();
    })
    //paginate
    $(document).on("click", "#pagination a", function (e) {
        e.preventDefault();
        var page = $(this).attr("href").split("page=")[1];
        fetch_data_pagination(page);
    });
    //paginate fetch data
    function fetch_data_pagination(page) {
        var data = getData();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/client/page/shop/mobile/fetch_data?page=" + page,
            method: "POST",
            beforeSend: function () {
                equalElement();
            },
            data: data,
            success: function (response) {
                $("#fetchData").html(response);
                equalElement();
            },
        });
    }
    //get data filter 
    function getData() {
        var pagination_limit = $("#pagination_limit").val();
        var sortBy = $('#sortBy').val();
        var priceFilter;
        var batteryFilter;
        var screenFilter;
        var ramFilter;
        $(".filter-price").each(function () {
            if ($(this).hasClass("active")) {
                priceFilter = $(this).attr("value");
            }
        });
        $(".filter-battery").each(function () {
            if ($(this).hasClass("active")) {
                batteryFilter = $(this).attr("value");
            }
        });
        $(".filter-screen").each(function () {
            if ($(this).hasClass("active")) {
                screenFilter = $(this).attr("value");
            }
        });
        $(".filter-ram").each(function () {
            if ($(this).hasClass("active")) {
                ramFilter = $(this).attr("value");
            }
        });
        var data = {
            brandArrID: Array.from(arrayBrand),
            pagination_limit: pagination_limit,
            price_filter: priceFilter,
            battery_filter: batteryFilter,
            screen_filter: screenFilter,
            ram: ramFilter,
            sortBy: sortBy,
        };
        return data;
    }
    //fetch data filter
    function fetch_data_filter() {
        var data = getData();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/client/page/shop/mobile/fetch_data?page=",
            method: "POST",
            beforeSend: function () {
                equalElement();
            },
            data: data,
            success: function (response) {
                $("#fetchData").html(response);
                equalElement();
                $content[0].scrollTop = $content[0].scrollHeight;
            },
        });
    }
    //equal element
    function equalElement() {
        $(".equal-container").each(function () {
            var _this = $(this),
                _children = _this.find(".equal-elem");
            if (_children.length) {
                _children.css("height", "auto");
                var max_height = 0;
                _children.each(function () {
                    var el_height = $(this).height();
                    if (max_height < parseFloat(el_height)) {
                        max_height = parseFloat(el_height);
                    }
                });
                _children.height(parseInt(max_height, 10));
            }
        });
    }
});
