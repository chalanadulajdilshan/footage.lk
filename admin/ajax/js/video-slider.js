$(document).ready(function () {

    let url = new URL(window.location.href);

    if (url.searchParams.get("query") == 'edit') {
        $("#title").attr("style", "border:1px solid yellow");
        $("#videoId").attr("style", "border:1px solid yellow");
        $("#isActiveBox").attr("style", "border:1px solid yellow");
    }

    $("#title").focus(function () {
        $("#title").attr('placeholder', "Title");
        $("#title").removeAttr("style");
    });
    $("#videoId").focus(function () {
        $("#videoId").attr('placeholder', "Video Id");
        $("#videoId").removeAttr("style");
    });

    $("#addVideo").click(function (e) {
        e.preventDefault();
        if (!$("#title").val().trim()) {
            $("#title").attr('placeholder', "You can't leave this empty.!");
            $("#title").attr("style", "border:2px solid red");
        } else if (!$("#videoId").val().trim()) {
            $("#videoId").attr('placeholder', "You can't leave this empty.!");
            $("#videoId").attr("style", "border:2px solid red");
        } else {
            let form = $("#videoSliderForm")[0];
            let formData = new FormData(form);
            formData.append("addVideo", $("#addVideo").val());
            Swal.fire({
                title: 'Are you sure?',
                text: "Add new video slide",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((res) => {
                if (res.value) {
                    $.ajax({
                        type: "POST",
                        url: "ajax/php/video-slider.php",
                        data: formData,
                        dataType: "JSON",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            Toast.fire({
                                icon: result.type,
                                title: result.msg
                            });
                            if (result.type === "success") {
                                setTimeout(() => {
                                    window.location.replace(location.pathname);
                                }, 1500);
                            }
                        }
                    });
                }
            });
        }
    });

    $("#updateVideo").click(function (e) {
        e.preventDefault();
        if (!$("#title").val().trim()) {
            $("#title").attr('placeholder', "You can't leave this empty.!");
            $("#title").attr("style", "border-color:red");
        } else if (!$("#videoId").val().trim()) {
            $("#videoId").attr('placeholder', "You can't leave this empty.!");
            $("#videoId").attr("style", "border-color:red");
        } else {
            let form = $("#videoSliderForm")[0];
            let formData = new FormData(form);
            formData.append("updateVideo", $("#updateVideo").val());
            Swal.fire({
                title: 'Are you sure?',
                text: "Update video slide",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((res) => {
                if (res.value) {
                    $.ajax({
                        type: "POST",
                        url: "ajax/php/video-slider.php",
                        data: formData,
                        dataType: "JSON",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            Toast.fire({
                                icon: result.type,
                                title: result.msg
                            });
                            if (result.type === "success") {
                                setTimeout(() => {
                                    window.location.replace(location.pathname);
                                }, 1500);
                            }
                        }
                    });
                }
            });
        }
    });

});

function deleteVideo(id) {
    let formData = new FormData();
    formData.append("id", id);
    formData.append("deleteVideo", $("#deleteVideo").val());
    Swal.fire({
        title: 'Are you sure?',
        text: "Delete video slide",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((res) => {
        if (res.value) {
            $.ajax({
                type: "POST",
                url: "ajax/php/video-slider.php",
                data: formData,
                dataType: "JSON",
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    Toast.fire({
                        icon: result.type,
                        title: result.msg
                    });
                    if (result.type === "success") {
                        setTimeout(() => {
                            window.location.replace(location.pathname);
                        }, 1500);
                    }
                }
            });
        }
    });
}

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})