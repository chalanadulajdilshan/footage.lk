<?php

include '../../../includes/class-auto-loader.php';

//create ALBUM
if (isset($_POST['create'])) {
    $ALBUM = new AlbumPhoto(NULL);
 
    $ALBUM->album = $_POST['album'];
    $ALBUM->caption = $_POST['title'];

    $dir_dest = '../../../upload/album/gallery/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;
    $imgName = Helper::randamId();


    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;
        $handle->image_x = 1920;
        $handle->image_y = 1280;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ALBUM->image_name = $imgName;


    $res = $ALBUM->create();

    if ($res) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}

//Update ALBUM
if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/album/gallery/';

    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST["oldImageName"];
        $handle->image_x = 1920;
        $handle->image_y = 1280;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ALBUM = new AlbumPhoto($_POST['id']);
    $ALBUM->image_name = $_POST['oldImageName'];
    $ALBUM->caption = $_POST['title'];

    $result = $ALBUM->update();

    if ($result->id) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}

//Arange ALBUM
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ALBUM = new AlbumPhoto(NULL);
        $ALBUM =   $ALBUM->arrange($key, $img);
    }
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
