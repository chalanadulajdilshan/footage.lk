<?php
include_once "../includes/class-auto-loader.php";
$id = "";
$id = $_GET['invoice-id'];
$INVOICE = new Invoice($id);
$PROJECT = new Projects($INVOICE->project_id);
$DETAILS = new InvoiceDetail(NULL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />
    <title>Create Invoice - SourceCode.lk</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/xenon-core.css">
    <link rel="stylesheet" href="assets/css/xenon-forms.css">
    <link rel="stylesheet" href="assets/css/xenon-components.css">
    <link rel="stylesheet" href="assets/css/xenon-skins.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/sweetalert/sweetalert.css">
    <script src="assets/js/jquery-1.11.1.min.js"></script>
</head>

<body class="page-body">
    <div class="page-container">
        <?php include './components/navigation.php' ?>
        <div class="main-content">
            <!--navigation panel end -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Invoice details</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal" role="form" id="form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="description">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label" for="price">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter the project name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10"></div>
                                        <div class="col-sm-2">
                                            <button type="submit" id="create" name="create" class="btn btn-secondary btn-single">Add</button>
                                            <input type="hidden" name="invoice_id" value="<?= $INVOICE->id ?>">
                                            <input type="hidden" name="add-invoice-details" value="<?= $INVOICE->id ?>">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Invoice</h3>
                </div>
                <div class="panel-body" id="preview-invoice">
                    <?php $details = $DETAILS->getDetailsByInvoiceId($INVOICE->id); ?>
                    <?php include '../components/emails/invoice.php' ?>
                </div>
            </div>
            <?php include './components/footer.php' ?>
        </div>
    </div>
    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/datatables/dataTables.bootstrap.css">
    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/css/fonts/meteocons/css/meteocons.css">
    <!-- Bottom Scripts -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/joinable.js"></script>
    <script src="assets/js/xenon-api.js"></script>
    <script src="assets/js/xenon-toggles.js"></script>
    <script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>
    <!-- Imported scripts datatables -->
    <script src="assets/js/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
    <script src="assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
    <!-- Imported scripts on this page -->
    <script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/xenon-widgets.js"></script>
    <!-- SweetAlert2 -->
    <script src="assets/sweetalert/sweetalert.min.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/xenon-custom.js"></script>
    <script type="text/javascript" src="./ajax/js/projects.js"></script>
</body>

</html>