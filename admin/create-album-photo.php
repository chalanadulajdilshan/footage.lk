<!DOCTYPE html>
<?php
include '../includes/class-auto-loader.php';
include './auth.php';

$id = '';
$id = $_GET['id'];
$ALBUM = new Album($id);
$ALBUM_PHOTO =  new AlbumPhoto(NULL);

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Album Photos - Sourcecode.lk</title>

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
        <!-- navogation panel start-->
        <?php include './components/navigation.php' ?>
        <!-- navogation panel start-->

        <div class="main-content">

            <!-- Header start-->
            <?php include './components/header.php' ?>
            <!--Header panel end -->

            <div class="page-title">

                <div class="title-env">
                    <h1 class="title">Manage Album Photos</h1>
                    <p class="description">You can manage all services in this panel</p>
                </div>

                <div class="breadcrumb-env">

                    <ol class="breadcrumb bc-1">
                        <li>
                            <a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
                        </li>
                        <li>

                            <a href="forms-native.html">Album Photos</a>
                        </li>
                        <li class="active">

                            <strong>Manage Album Photos</strong>
                        </li>
                    </ol>

                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Album Photos</h3>

                        </div>
                        <div class="panel-body">

                            <form role="form" class="form-horizontal" role="form" id="form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-1">Title</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-2">Album Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image_name" name="image_name" placeholder="Enter the slider image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-10"></div>
                                        <div class="col-sm-2">
                                            <input type="hidden" name="album" value="<?= $ALBUM->id ?>">
                                            <button type="submit" id="create" name="create" class="btn btn-secondary btn-single">Create</button>
                                            <input type="hidden" name="create">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Manage Album Photos</h3>

                        </div>
                        <div class="panel-body">
                            <!-- Album Images -->
                            <div class="album-images row">
                                <?php
                                foreach ($ALBUM_PHOTO->getAlbumPhotosById($ALBUM->id) as $album) {
                                ?>
                                    <div class="col-md-3 col-sm-4 col-xs-6" style="margin-bottom: 10px;" id="div<?php echo $album['id'] ?>">
                                        <div class="album-image">
                                            <a href="#">
                                                <img src="../upload/album/gallery/<?php echo $album['image_name'] ?>" class="img-responsive" />
                                            </a>

                                            <h6 href="#" class="name">
                                                <em><?php echo $album['caption'] ?></em>
                                            </h6>

                                            <div class="image-options">
                                                <a href="edit-album-photo.php?id=<?php echo $album['id'] ?>" style="color:white; padding: 4px;background-color: blue;border-radius: 2px; "><i class="fa-pencil"></i></a> |
                                                <a href="#" class="delete-album-photo" data-id="<?php echo $album['id'] ?>" style="color:white; padding: 4px;background-color: red;border-radius: 2px; "><i class="fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include './components/footer.php' ?>

    </div>
    </div>

    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/datatables/dataTables.bootstrap.css">

    <!-- Bottom Scripts -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/joinable.js"></script>
    <script src="assets/js/xenon-api.js"></script>
    <script src="assets/js/xenon-toggles.js"></script>
    <script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/sweetalert/sweetalert.min.js"></script>

    <!-- Imported scripts on this page -->
    <script src="assets/js/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
    <script src="assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/xenon-custom.js"></script>

    <script type="text/javascript" src="./ajax/js/album-photo.js"></script>
    <script src="delete/js/album-photo.js"></script>
</body>

</html>