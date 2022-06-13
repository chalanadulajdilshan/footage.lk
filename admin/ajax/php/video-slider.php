<?php

include_once "../../../includes/class-auto-loader.php";

if (isset($_GET['query']) && $_GET['query'] == 'getAll') {
    try {
        $SLIDER_VIDEO = new Slider(null);
        $SLIDER_VIDEOS = $SLIDER_VIDEO->getAll();
        echo json_encode($SLIDER_VIDEOS);
        die();
    } catch (Throwable $e) {
        echo json_encode(["status"=> "failed","type" => "error","msg"=> $e->getMessage()]);
        exit;
    }
}

if (isset($_POST['addVideo'])) {
    if ( isset($_POST['title']) && isset($_POST['video_id']) ) {

        $title = $_POST['title'];
        $videoId = $_POST['video_id'];
        $isActive = isset($_POST['isActive']) ? $_POST['isActive'] : "0";
        saveVideo($title, $videoId, $isActive);

    } else {
        echo json_encode(["status"=> "failed","type" => "error","msg"=> "Please enter required fields!" ]);
        exit;
    }
}

if (isset($_POST['deleteVideo'])) {
    if (isset($_POST['id'])) {
        try {
            $SLIDER_VIDEO = new Slider($_POST['id']);
            if ($SLIDER_VIDEO->delete()) {
                echo json_encode(["status"=> "success","type" => "success","msg"=> "Video Deleted successfully.!"]);
                exit;
            }
            echo json_encode(["status"=> "failed","type" => "error","msg"=> "Video not Deleted.!"]);
            exit;
        } catch (Throwable $e) {
            echo json_encode(["status"=> "failed","type" => "error","msg"=> $e->getMessage()]);
            exit;
        }
    }
}

if (isset($_POST['updateVideo'])) {
    if ( isset($_POST['title']) && isset($_POST['video_id']) ) {

        $id = $_POST['id'];
        $title = $_POST['title'];
        $videoId = $_POST['video_id'];
        $isActive = isset($_POST['isActive']) ? $_POST['isActive'] : "0";
        updateVideo($id, $title, $videoId, $isActive);

    } else {
        echo json_encode(["status"=> "failed","type" => "error","msg"=> "Please enter required fields!" ]);
        exit;
    }
}

function saveVideo($title, $videoId, $isActive)
{
    try {
        $SLIDER_VIDEO = new Slider(null);
        if ($SLIDER_VIDEO->create($title, $videoId, $isActive)) {
            echo json_encode(["status"=> "success","type" => "success","msg"=> $SLIDER_VIDEO->error]);
            exit;
        }
        echo json_encode(["status"=> "failed","type" => "error","msg"=> $SLIDER_VIDEO->error]);
        exit;

    } catch (Throwable $e) {
        echo json_encode(["status"=> "failed","type" => "error","msg"=> $e->getMessage()]);
        exit;
    }
}

function updateVideo($id, $title, $videoId, $isActive)
{
    try {
        $SLIDER_VIDEO = new Slider($id);
        $SLIDER_VIDEO->title = $title;
        $SLIDER_VIDEO->videoId = $videoId;
        $SLIDER_VIDEO->isActive = $isActive;

        if ($SLIDER_VIDEO->update()) {
            echo json_encode(["status"=> "success","type" => "success","msg"=> $SLIDER_VIDEO->error]);
            exit;
        }
        echo json_encode(["status"=> "failed","type" => "error","msg"=> $SLIDER_VIDEO->error]);
        exit;

    } catch (Throwable $e) {
        echo json_encode(["status"=> "failed","type" => "error","msg"=> $e->getMessage()]);
        exit;
    }
}
