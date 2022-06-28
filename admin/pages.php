<?php
include_once "../includes/class-auto-loader.php";
$isEdit = false;

if (isset($_GET['query']) && $_GET['query'] == 'edit') {
    if (isset($_GET['id'])) {
        $isEdit = true;
        $SLIDER_VIDEO = new Slider($_GET['id']);
    }
}

$id = isset($SLIDER_VIDEO) ? $SLIDER_VIDEO->id : '';
$title = isset($SLIDER_VIDEO) ? $SLIDER_VIDEO->title : '';
$videoId = isset($SLIDER_VIDEO) ? $SLIDER_VIDEO->videoId : '';
$isActive = isset($SLIDER_VIDEO) ? $SLIDER_VIDEO->isActive : 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Xenon - Video Slider</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/xenon-core.css">
    <link rel="stylesheet" href="assets/css/xenon-forms.css">
    <link rel="stylesheet" href="assets/css/xenon-components.css">
    <link rel="stylesheet" href="assets/css/xenon-skins.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="assets/js/jquery-1.11.1.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


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
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
        <!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
        <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
        <div class="sidebar-menu toggle-others fixed">

            <?php include './components/navigation.php' ?>

        </div>

        <div class="main-content">


            <!-- navogation panel start-->
            <?php include './components/header.php' ?>
            <!--navigation panel end -->

            <section id="videoSliderSection">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default" id="SliderVideosForm">
                            <div class="panel-heading">
                                <?php if ($isEdit) : ?>
                                    <h3 class="panel-title">Update Slider Videos</h3>
                                <?php else : ?>
                                    <h3 class="panel-title">Add Slider Videos</h3>
                                <?php endif; ?>
                                <div class="panel-options">
                                    <a href="#" data-toggle="panel">
                                        <span class="collapse-icon">&ndash;</span>
                                        <span class="expand-icon">+</span>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="./ajax/php/video-slider.php" method="POST" role="form" class="form-inline" id="videoSliderForm">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?= $title ?>" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="video_id" id="videoId" placeholder="Video Id" value="<?= $videoId ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label class="cbr-inline form-control" id="isActiveBox">
                                            <input type="checkbox" class="cbr" name="isActive" id="isActive" value="1" <?php echo ($isActive == 1 ? 'checked' : ''); ?> />
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-group pull-right">
                                        <input type="hidden" name="id" value="<?= $id ?>" />
                                        <?php if ($isEdit) : ?>
                                            <button type="submit" id="updateVideo" name="updateVideo" class="btn btn-secondary btn-single">Update Video</button>
                                        <?php else : ?>
                                            <button type="submit" id="addVideo" name="addVideo" class="btn btn-secondary btn-single">Add Video</button>
                                        <?php endif; ?>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Slider Videos</h3>
                                <div class="panel-options">
                                    <a href="#" data-toggle="panel">
                                        <span class="collapse-icon">&ndash;</span>
                                        <span class="expand-icon">+</span>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        $.ajax({
                                            url: '../admin/ajax/php/video-slider.php?query=getAll',
                                            type: 'GET',
                                            success: function(data) {
                                                let resData = $.parseJSON(data);
                                                $('#videoSlidersTable').dataTable({
                                                    // dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",
                                                    data: resData,
                                                    columns: [{
                                                            "data": "id"
                                                        },
                                                        {
                                                            "data": "title"
                                                        },
                                                        {
                                                            "data": "video_id"
                                                        },
                                                        {
                                                            "data": "is_active"
                                                        },
                                                        {
                                                            "targets": 4,
                                                            "data": 'id',
                                                            "render": function(data, type, row, meta) {
                                                                return "<a href='./video-slider.php?query=edit&id=" + data + "' class='btn btn-secondary btn-sm btn-icon icon-left'>Edit</a>" +
                                                                    "<button id='deleteVideo' onclick='deleteVideo(" + data + ")' class='btn btn-danger btn-sm btn-icon icon-left'>Delete</button>"
                                                            }
                                                        }
                                                    ],
                                                    responsive: true,
                                                });
                                            }
                                        });
                                    });
                                </script>

                                <table class="table table-bordered table-striped" id="videoSlidersTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Video Id</th>
                                            <th>Is Active</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="middle-align"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>

    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/xenon-custom.js"></script>

    <script type="text/javascript" src="./ajax/js/video-slider.js"></script>

</body>

</html>