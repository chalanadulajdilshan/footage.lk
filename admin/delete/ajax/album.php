<?php

include '../../../includes/class-auto-loader.php';

if ($_POST['option'] == 'delete') {

    $ALBUM = new Album($_POST['id']);

    $result = $ALBUM->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}