<?php
include_once "../class/include.php";
$id = "";
$id = $_GET['id'];
$CUSTOMER = new Customer($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Manage Projects - SourceCode.lk</title>

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

    <div class="settings-pane">

        <a href="#" data-toggle="settings-pane" data-animate="true">
            &times;
        </a>

        <div class="settings-pane-inner">

            <div class="row">

                <div class="col-md-4">

                    <div class="user-info">

                        <div class="user-image">
                            <a href="extra-profile.html">
                                <img src="assets/images/user-2.png" class="img-responsive img-circle" />
                            </a>
                        </div>

                        <div class="user-details">

                            <h3>
                                <a href="extra-profile.html">John Smith</a>

                                <!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
                                <span class="user-status is-online"></span>
                            </h3>

                            <p class="user-title">Web Developer</p>

                            <div class="user-links">
                                <a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
                                <a href="extra-profile.html" class="btn btn-success">Upgrade</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-8 link-blocks-env">

                    <div class="links-block left-sep">
                        <h4>
                            <span>Notifications</span>
                        </h4>

                        <ul class="list-unstyled">
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
                                <label for="sp-chk1">Messages</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
                                <label for="sp-chk2">Events</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
                                <label for="sp-chk3">Updates</label>
                            </li>
                            <li>
                                <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
                                <label for="sp-chk4">Server Uptime</label>
                            </li>
                        </ul>
                    </div>

                    <div class="links-block left-sep">
                        <h4>
                            <a href="#">
                                <span>Help Desk</span>
                            </a>
                        </h4>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Support Center
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Submit a Ticket
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Domains Protocol
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-angle-right"></i>
                                    Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="page-container">

        <div class="sidebar-menu toggle-others fixed">

            <?php include './components/navigation.php' ?>

        </div>

        <div class="main-content">


            <!-- navogation panel start-->
            <?php include './components/header.php' ?>
            <!--navigation panel end -->

            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Manage Projects</h3>
                        </div>

                        <div class="panel-body">

                            <form role="form" class="form-horizontal" role="form" id="form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-1">Customer Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter the PROJECTS Name" value="<?php echo $CUSTOMER->customer_name ?>" disabled>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-1">Project Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter the project name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10"></div>
                                        <div class="col-sm-2">
                                            <button type="submit" id="create" name="create" class="btn btn-secondary btn-single">Create</button>
                                            <input type="hidden" name="create">
                                            <input type="hidden" name="customer_id" value="<?php echo $id ?>">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Basic Setup -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Manage Projects</h3>

                    <div class="panel-options">
                        <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>
                        <a href="#" data-toggle="remove">
                            &times;
                        </a>
                    </div>
                </div>
                <div class="panel-body">

                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $("#example-1").dataTable({
                                aLengthMenu: [
                                    [10, 25, 50, 100, -1],
                                    [10, 25, 50, 100, "All"]
                                ]
                            });
                        });
                    </script>

                    <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Project Name</th>
                                <th>Create Date and Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Project Name</th>
                                <th>Create Date and Time</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            <?php
                            $PROJECTS = new Projects(NULL);
                            foreach ($PROJECTS->getProjectByCustomerId($id) as $key => $projects) {
                                $key++;
                            ?>
                                <tr>
                                    <td><?php echo  $key ?></td>
                                    <td><?php echo $projects['project_name'] ?></td>
                                    <td><?php echo $projects['create_date'] ?></td>
                                    <td>
                                        <a href="edit-projects.php?id=<?php echo $projects['id'] ?>" class="btn btn-secondary btn-sm btn-icon icon-left">
                                            Edit
                                        </a>

                                        <!-- <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                            Delete
                                        </a> -->
                                        <form action="ajax/php/invoice.php" method="post" class="inline">
                                            <input type="hidden" name="project_id" value="<?php echo $projects['id'] ?>" />
                                            <input type="hidden" name="action" value="create" />
                                            <button type="submit" class="btn btn-info btn-sm btn-icon icon-left">
                                                Create Invoice
                                            </button>
                                        </form>
                                        <a href="#" class="btn btn-primary btn-sm btn-icon icon-left">
                                            Manage Invoices
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

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