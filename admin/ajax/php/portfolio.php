<?php

include '../../../class/include.php';

//create PORTFOLIO
if (isset($_POST['create'])) {
    $PORTFOLIO = new Portfolio(NULL);


    $PORTFOLIO->title = $_POST['title'];

    $dir_dest = '../../../upload/portfolio/';

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

    $PORTFOLIO->image_name = $imgName;


    $res = $PORTFOLIO->create();

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

//Update PORTFOLIO
if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/portfolio/';

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

    $PORTFOLIO = new PORTFOLIO($_POST['id']);
    $PORTFOLIO->image_name = $_POST['oldImageName'];
    $PORTFOLIO->title = $_POST['title'];

    $result = $PORTFOLIO->update();

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

//Arange PORTFOLIO
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $PORTFOLIO = new PORTFOLIO(NULL);
        $PORTFOLIO =   $PORTFOLIO->arrange($key, $img);

        header('Location:../../arrange-PORTFOLIO.php?message=9');
    }
}
