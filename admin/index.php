<!DOCTYPE html>
<?php
include '../class/include.php';
include './auth.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>SourceCode.lk - Dashboard</title>

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

</head>

<body class="page-body">
    <div class="page-container">

        <?php include './components/navigation.php' ?>

        <div class="main-content">

            <!-- navogation panel start-->
            <?php include './components/header.php' ?>
            <!--navigation panel end -->

            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (isset($_GET['message'])) {
                        $MESSAGE = new Message($_GET['message']);
                    ?>
                        <div class="alert alert-<?php echo $MESSAGE->status; ?>" role="alert">
                            <?php echo $MESSAGE->description; ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-sm-3">

                    <div class="xe-widget xe-counter" data-count=".num" data-from="0" data-to="99.9" data-suffix="%" data-duration="2">
                        <div class="xe-icon">
                            <i class="linecons-cloud"></i>
                        </div>
                        <div class="xe-label">
                            <strong class="num">0.0%</strong>
                            <span>Server uptime</span>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="xe-widget xe-counter xe-counter-blue" data-count=".num" data-from="1" data-to="117" data-suffix="k" data-duration="3" data-easing="false">
                        <div class="xe-icon">
                            <i class="linecons-user"></i>
                        </div>
                        <div class="xe-label">
                            <strong class="num">1k</strong>
                            <span>Users Total</span>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="xe-widget xe-counter xe-counter-info" data-count=".num" data-from="1000" data-to="2470" data-duration="4" data-easing="true">
                        <div class="xe-icon">
                            <i class="linecons-camera"></i>
                        </div>
                        <div class="xe-label">
                            <strong class="num">1000</strong>
                            <span>New Daily Photos</span>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="xe-widget xe-counter xe-counter-red" data-count=".num" data-from="0" data-to="57" data-prefix="-," data-suffix="%" data-duration="5" data-easing="true" data-delay="1">
                        <div class="xe-icon">
                            <i class="linecons-lightbulb"></i>
                        </div>
                        <div class="xe-label">
                            <strong class="num">-,0%</strong>
                            <span>Exchange Commission</span>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="xe-widget xe-counter-block" data-count=".num" data-from="0" data-to="99.9" data-suffix="%" data-duration="2">
                        <div class="xe-upper">

                            <div class="xe-icon">
                                <i class="linecons-cloud"></i>
                            </div>
                            <div class="xe-label">
                                <strong class="num">0.0%</strong>
                                <span>Server uptime</span>
                            </div>

                        </div>
                        <div class="xe-lower">
                            <div class="border"></div>

                            <span>Result</span>
                            <strong>78% Increase</strong>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="xe-widget xe-counter-block xe-counter-block-purple" data-count=".num" data-from="0" data-to="512" data-duration="3">
                        <div class="xe-upper">

                            <div class="xe-icon">
                                <i class="linecons-camera"></i>
                            </div>
                            <div class="xe-label">
                                <strong class="num">0</strong>
                                <span>Photos Taken</span>
                            </div>

                        </div>
                        <div class="xe-lower">
                            <div class="border"></div>

                            <span>Increase</span>
                            <strong>512 more photos</strong>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="xe-widget xe-counter-block xe-counter-block-blue" data-suffix="k" data-count=".num" data-from="0" data-to="310" data-duration="4" data-easing="false">
                        <div class="xe-upper">

                            <div class="xe-icon">
                                <i class="linecons-user"></i>
                            </div>
                            <div class="xe-label">
                                <strong class="num">0k</strong>
                                <span>Daily Visits</span>
                            </div>

                        </div>
                        <div class="xe-lower">
                            <div class="border"></div>

                            <span>Bounce Rate</span>
                            <strong>51.55%</strong>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="xe-widget xe-counter-block xe-counter-block-orange">
                        <div class="xe-upper">

                            <div class="xe-icon">
                                <i class="fa-life-ring"></i>
                            </div>
                            <div class="xe-label">
                                <strong class="num">24/7</strong>
                                <span>Live Support</span>
                            </div>

                        </div>
                        <div class="xe-lower">
                            <div class="border"></div>

                            <span>Tickets Opened</span>
                            <strong data-count="this" data-from="0" data-to="14215" data-duration="2">0</strong>
                        </div>
                    </div>
                </div>
            </div>

            <?php include './components/footer.php' ?>

        </div>
    </div>



    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/css/fonts/meteocons/css/meteocons.css">

    <!-- Bottom Scripts -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/joinable.js"></script>
    <script src="assets/js/xenon-api.js"></script>
    <script src="assets/js/xenon-toggles.js"></script>


    <!-- Imported scripts on this page -->
    <script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/xenon-widgets.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/xenon-custom.js"></script>

</body>

</html>