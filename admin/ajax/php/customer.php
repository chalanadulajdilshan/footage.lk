<?php

include '../../../class/include.php';

//create CUSTOMER
if (isset($_POST['create'])) {
    $CUSTOMER = new Customer(NULL);


    $CUSTOMER->customer_name = $_POST['customer_name'];
    $CUSTOMER->company_name = $_POST['company_name'];
    $CUSTOMER->address = $_POST['address'];
    $CUSTOMER->contact_person = $_POST['contact_person'];
    $CUSTOMER->phone_number = $_POST['phone_number'];
    $CUSTOMER->email = $_POST['email']; 
    
     

    $res = $CUSTOMER->create();

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

//Update CUSTOMER
if (isset($_POST['update'])) {
    $CUSTOMER = new CUSTOMER($_POST['id']);
   
    $CUSTOMER->customer_name = $_POST['customer_name'];
    $CUSTOMER->company_name = $_POST['company_name'];
    $CUSTOMER->address = $_POST['address'];
    $CUSTOMER->contact_person = $_POST['contact_person'];
    $CUSTOMER->phone_number = $_POST['phone_number'];
    $CUSTOMER->email = $_POST['email'];  

    $result = $CUSTOMER->update();

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

//Arange CUSTOMER
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $CUSTOMER = new CUSTOMER(NULL);
        $CUSTOMER =   $CUSTOMER->arrange($key, $img);

        header('Location:../../arrange-CUSTOMER.php?message=9');
    }
}
