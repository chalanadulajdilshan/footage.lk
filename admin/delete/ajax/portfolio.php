<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $PORTFOLIO = new Portfolio($_POST['id']);

    $result = $PORTFOLIO->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}