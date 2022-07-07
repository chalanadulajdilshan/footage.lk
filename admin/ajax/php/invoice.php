<?php
include_once "../../../includes/class-auto-loader.php";

if (isset($_POST['action'])) {

    $INVOICE = new Invoice(NULL);
    $PROJECT = new Projects($_POST['project_id']);

    $INVOICE->project_id = $PROJECT->id;
    $INVOICE->customer_id = $PROJECT->customer_id;

    $invoice = $INVOICE->create();

    if (!$invoice) {
        header('location:' . $_SERVER['HTTP_REFERER']);
    }
    header('location:../../create-invoice.php?invoice-id=' . $invoice);
}
// var_dump($_POST);exit;
if (isset($_POST['add-invoice-details'])) {
    $INVOICE = new Invoice($_POST['invoice_id']);
    $DETAILS = new InvoiceDetail(NULL);

    $DETAILS->invoice_id = $INVOICE->id;
    $DETAILS->description = $_POST['description'];
    $DETAILS->price = $_POST['price'];

    if ($invoice = $DETAILS->create()) {
        $INVOICE->updateTotal();
        $details = $DETAILS->getDetailsByInvoiceId($INVOICE->id);
        ob_start();
        require_once(dirname(__FILE__) . '/../../../components/emails/invoice.php');
        $html = ob_get_clean();

        echo json_encode(['invoice' => $html, 'status' => 'success']);
        exit;
    }
    echo json_encode(['invoice' => '', 'status' => 'error']);
    exit;
}
