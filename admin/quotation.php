<?php
include_once "../includes/class-auto-loader.php";
$id = "";
$id = $_GET['quotation-id'];
$QUOTATION = new Quotation($id);
$PROJECT = new Projects($QUOTATION->project_id);
$CUSTOMER = new Customer($QUOTATION->customer_id);
$DETAILS = new QuotationDetail(NULL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />
    <title>Create Quotation - SourceCode.lk</title>
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
            <!-- navogation panel start-->
            <?php include './components/header.php' ?>
            <!--navigation panel end -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Invoice</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" id="form-quotation">
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label">Invoice ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="#<?= str_pad($QUOTATION->id, 5, 0, STR_PAD_LEFT) ?>" disabled>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label">Customer</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $CUSTOMER->customer_name ?>" disabled>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label">Project</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $PROJECT->project_name ?>" disabled>
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label" for="cost">COST</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="cost" name="cost" placeholder="Enter the Cost">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label" for="visit">VISIT</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="visits" name="visit" placeholder="Enter the Visits">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label" for="advance">ADVANCE</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="advance" name="advance" placeholder="Enter the Advance payment">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="note">NOTE</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="note" id="note" value="<?= $QUOTATION->note ?>" placeholder="NOTE">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="date">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="date" id="date" value="<?= $QUOTATION->date ?>" placeholder="Invoice Date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10"></div>
                                        <div class="col-sm-2">
                                            <button type="submit" id="edit-quotation" name="edit-quotation" class="btn btn-secondary btn-single">SAVE</button>
                                            <input type="hidden" name="quotation_id" value="<?= $QUOTATION->id ?>">
                                            <input type="hidden" name="edit-quotation" value="<?= $QUOTATION->id ?>">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Quotation details</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal" role="form" id="form-data">
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label" for="days">Days</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="days" name="days" placeholder="Enter the Days">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label" for="rate">Rate (Unit Price)</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="rate" name="rate" placeholder="Enter the Day Rate Price">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-2 control-label" for="price">Amount</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter the amount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="description">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10"></div>
                                        <div class="col-sm-2">
                                            <button type="submit" id="create" name="create" class="btn btn-secondary btn-single">Add</button>
                                            <input type="hidden" name="quotation_id" value="<?= $QUOTATION->id ?>">
                                            <input type="hidden" name="add-quotation-details" value="<?= $QUOTATION->id ?>">
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
                <div class="panel-body" id="preview-quotation">
                    <?php $details = $DETAILS->getDetailsByInvoiceId($QUOTATION->id); ?>
                    <?php include '../components/emails/quotation.php' ?>
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
    <script src="../js/notify.min.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/xenon-custom.js"></script>
    <script type="text/javascript" src="./ajax/js/quotation.js"></script>
</body>

</html>