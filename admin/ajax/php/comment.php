<?php

include '../../../class/include.php';

//create slider
if (isset($_POST['create'])) {
    $COMMENT = new Comment(NULL);


    $COMMENT->name = $_POST['name'];
    $COMMENT->position = $_POST['position'];
    $COMMENT->comment = $_POST['comment'];
    

    $dir_dest = '../../../upload/comment/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;
    $HELPER = new Helper(NULL);
    $imgName = $HELPER->randamId();


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

    $COMMENT->image_name = $imgName;


    $res = $COMMENT->create();

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

//Update slider
if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/comment/';

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

    $COMMENT = new Comment($_POST['id']);
    $COMMENT->image_name = $_POST['oldImageName'];
    $COMMENT->name = $_POST['name'];
    $COMMENT->position = $_POST['position'];
    $COMMENT->comment = $_POST['comment'];

    $result = $COMMENT->update();

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

//Arange slider
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $COMMENT = new Slider(NULL);
        $COMMENT =   $COMMENT->arrange($key, $img);

        header('Location:../../arrange-slider.php?message=9');
    }
}
