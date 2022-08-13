<?php
include_once "../../../includes/class-auto-loader.php";

if (isset($_POST['action'])) {

    $QUOTATION = new Quotation(NULL);
    $PROJECT = new Projects($_POST['project_id']);

    $QUOTATION->project_id = $PROJECT->id;
    $QUOTATION->customer_id = $PROJECT->customer_id;

    $quotation = $QUOTATION->create();

    if (!$quotation) {
        header('location:' . $_SERVER['HTTP_REFERER']);
    }
    header('location:../../quotation.php?quotation-id=' . $quotation);
}
// var_dump($_POST);exit;
if (isset($_POST['add-quotation-details'])) {
    $QUOTATION = new Quotation($_POST['quotation_id']);
    $DETAILS = new QuotationDetail(NULL);

    $DETAILS->quotation_id = $QUOTATION->id;
    $DETAILS->days = $_POST['days'];
    $DETAILS->rate = $_POST['rate'];
    $DETAILS->price = $_POST['price'];
    $DETAILS->description = $_POST['description'];

    if ($quotation = $DETAILS->create()) {

        // for quotation view
        $details = $DETAILS->getDetailsByInvoiceId($QUOTATION->id);
        $PROJECT = new Projects($QUOTATION->project_id);
        $CUSTOMER = new Customer($QUOTATION->customer_id);
        ob_start();
        require_once(dirname(__FILE__) . '/../../../components/emails/quotation.php');
        $html = ob_get_clean();

        echo json_encode(['quotation' => $html, 'status' => 'success']);
        exit;
    }
    echo json_encode(['quotation' => '', 'status' => 'error']);
    exit;
}
if (isset($_POST['edit-quotation'])) {
    $QUOTATION = new Quotation($_POST['quotation_id']);


    $QUOTATION->cost = $_POST['cost'];
    $QUOTATION->visit = $_POST['visit'];
    $QUOTATION->advance = $_POST['advance'];
    $QUOTATION->note = $_POST['note'];
    $QUOTATION->date = $_POST['date'];
    $QUOTATION->total = $QUOTATION->cost - $QUOTATION->advance;

    if ($QUOTATION->update()) {
        // for quotation view
        $DETAILS = new QuotationDetail(NULL);
        $details = $DETAILS->getDetailsByInvoiceId($QUOTATION->id);
        $PROJECT = new Projects($QUOTATION->project_id);
        $CUSTOMER = new Customer($QUOTATION->customer_id);
        ob_start();
        require_once(dirname(__FILE__) . '/../../../components/emails/quotation.php');
        $html = ob_get_clean();

        echo json_encode(['quotation' => $html, 'status' => 'success']);
        exit;
    }
    echo json_encode(['quotation' => '', 'status' => 'error']);
    exit;
}
