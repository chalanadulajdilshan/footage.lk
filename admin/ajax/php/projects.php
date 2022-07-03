<?php

include '../../../class/include.php';

//create slider
if (isset($_POST['create'])) {
    $PROJECTS = new Projects(NULL);


    date_default_timezone_set('Asia/Colombo');
    $createdAt = date('Y-m-d H:i:s');

    $PROJECTS->customer_id = $_POST['customer_id'];
    $PROJECTS->project_name = $_POST['project_name'];
    $PROJECTS->create_date = $createdAt;


    $res = $PROJECTS->create();

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


    $PROJECTS = new PROJECTS($_POST['id']);
    $PROJECTS->project_name = $_POST['project_name'];

    $result = $PROJECTS->update();

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

        $PROJECTS = new Slider(NULL);
        $PROJECTS =   $PROJECTS->arrange($key, $img);

        header('Location:../../arrange-slider.php?message=9');
    }
}
