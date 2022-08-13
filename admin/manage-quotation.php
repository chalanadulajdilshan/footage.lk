<?php
include_once "../includes/class-auto-loader.php";
$id = "";
$id = $_GET['project-id'];
if (empty($id)) {
    header('location:' . $_SERVER['HTTP_REFERER']);
}
$PROJECT = new Projects($id);
$QUOTATION = new Quotation(null);
$CUSTOMER = new Customer($PROJECT->customer_id);
$quotations = $QUOTATION->getInvoiceByProjectId($PROJECT->id);
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
            <!-- navogation panel start-->
            <?php include './components/header.php' ?>
            <!--navigation panel end -->
            <!-- Basic Setup -->
            <?php include './components/quotations.php' ?>
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
    <script type="text/javascript" src="./ajax/js/projects.js"></script>
</body>

</html>