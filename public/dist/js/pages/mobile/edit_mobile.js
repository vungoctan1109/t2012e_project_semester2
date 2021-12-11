$(document).ready(function () {
    //CK editor
    let editor;
    ClassicEditor.create(document.querySelector("#editor"))
        .then((newEditor) => {
            editor = newEditor;
        })
        .catch((error) => {
            console.error(error);
        });
    // upload file Thumbnail
    var btnThumbnailLink = document.getElementById("btnThumbnailLink");
    var myWidget_thumbnail = cloudinary.createUploadWidget(
        {
            cloudName: "binht2012e",
            uploadPreset: "cndcrp9y",
        },
        (error, result) => {
            if (!error && result && result.event === "success") {
                console.log(result.info);
                document.getElementById(
                    "valueUpLoad"
                ).value += `${result.info.secure_url},`;
                // alert(document.getElementById("valueUpLoad").value);
                document.getElementById("list-preview-image").innerHTML += `
               <span class="m-2" id="preview-image" style="position: relative; with:220px; display:inline-block;">
                   <img src="${result.info.secure_url}" class="img-thumbnail img-bordered" style="width: 220px; ml-2" delete="${result.info.delete_token}">
                   <i class="fas fa-times btnDeleteImg" style="position: absolute;right: 0;top: 0; cursor: pointer;"></i>
               </span>
               `;
            }
        }
    );
    //btn-thumbnail
    btnThumbnailLink.addEventListener(
        "click",
        function () {
            myWidget_thumbnail.open();
        },
        false
    );
    //get value current brand
    $("#brand option").each(function () {
        if ($(this).val() == $("#current_brand").val()) {
            $(this).attr("selected", "selected");
        }
    });
    //get value current status
    $("#status option").each(function () {
        if ($(this).val() == $("#current_status").val()) {
            $(this).attr("selected", "selected");
        }
    });
    //reset
    $("#btn-reset").click(function () {
        $(":input", ".row")
            .not(":button, :submit, :reset, :hidden")
            .val(" ")
            .removeAttr("checked")
            .removeAttr("selected");
        const editorData = editor.setData(" ");
    });
    // handle delete thumbnail cloudinary
    $(document).on("click", ".btnDeleteImg", function () {
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
                var delete_token = $(this).siblings().attr("delele");
                $(this).parent().remove();
                //ajax
                if (typeof delete_token != "undefined") {
                    removeThumbnailFromCloudinary(delete_token);
                }
                var urlDelete = $(this).siblings().attr("src");
                var arrCurentValueUpLoad = $("#valueUpLoad").val().split(",");
                arrCurentValueUpLoad.pop();
                removeElement(arrCurentValueUpLoad, urlDelete);
                $("#valueUpLoad").val("");
                if (arrCurentValueUpLoad.length > 0) {
                    var url = "";
                    for (let i = 0; i < arrCurentValueUpLoad.length; i++) {
                        url += `${arrCurentValueUpLoad[i]},`;
                    }
                    $("#valueUpLoad").val(url);
                }
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
            }
        });
    });
    //remove thumbnail from cloudinary by ajax
    function removeThumbnailFromCloudinary(delete_token) {
        $.ajax({
            url: "https://api.cloudinary.com/v1_1/binht2012e/delete_by_token",
            cache: false,
            method: "POST",
            data: { token: delete_token },
            success: function (result, status, xhr) {
                if (status != "success") {                    
                    console.log(xhr.status);
                } else {
                    console.log(xhr.status);
                }
            },
        });
    }
    //remove array
    function removeElement(array, elem) {
        var index = array.indexOf(elem);
        if (index > -1) {
            array.splice(index, 1);
        }
    }
});
