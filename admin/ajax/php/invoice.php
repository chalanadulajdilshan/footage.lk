<?php
include_once "../../../includes/class-auto-loader.php";

if (isset($_POST['action'])) {

    $INVOICE = new Invoice(NULL);
    $QUOTATION = new Quotation($_POST['quotation_id']);
    $PROJECT = new Projects($QUOTATION->project_id);

    $INVOICE->quotation_id = $QUOTATION->id;
    $INVOICE->project_id = $PROJECT->id;
    $INVOICE->customer_id = $PROJECT->customer_id;

    $invoice = $INVOICE->create();

    if (!$invoice) {
        header('location:' . $_SERVER['HTTP_REFERER']);
    }
    header('location:../../invoice.php?invoice-id=' . $invoice);
}
// var_dump($_POST);exit;
if (isset($_POST['add-invoice-details'])) {
    $INVOICE = new Invoice($_POST['invoice_id']);
    $DETAILS = new InvoiceDetail(NULL);

    $DETAILS->invoice_id = $INVOICE->id;
    $DETAILS->description = $_POST['description'];
    $DETAILS->days = $_POST['days'];
    $DETAILS->rate = $_POST['rate'];

    if ($invoice = $DETAILS->create()) {
        $INVOICE->updateTotal();

        // for invoice view
        $details = $DETAILS->getDetailsByInvoiceId($INVOICE->id);
        $PROJECT = new Projects($INVOICE->project_id);
        $CUSTOMER = new Customer($INVOICE->customer_id);
        ob_start();
        require_once(dirname(__FILE__) . '/../../../components/emails/invoice.php');
        $html = ob_get_clean();

        echo json_encode(['invoice' => $html, 'status' => 'success']);
        exit;
    }
    echo json_encode(['invoice' => '', 'status' => 'error']);
    exit;
}

if (isset($_POST['edit-invoice'])) {
    $INVOICE = new Invoice($_POST['invoice_id']);


    $INVOICE->note = $_POST['note'];
    $INVOICE->date = $_POST['date'];

    if ($INVOICE->update()) {
        // for invoice view
        $DETAILS = new InvoiceDetail(NULL);
        $details = $DETAILS->getDetailsByInvoiceId($INVOICE->id);
        $PROJECT = new Projects($INVOICE->project_id);
        $CUSTOMER = new Customer($INVOICE->customer_id);
        ob_start();
        require_once(dirname(__FILE__) . '/../../../components/emails/invoice.php');
        $html = ob_get_clean();

        echo json_encode(['invoice' => $html, 'status' => 'success']);
        exit;
    }
    echo json_encode(['invoice' => '', 'status' => 'error']);
    exit;
}
