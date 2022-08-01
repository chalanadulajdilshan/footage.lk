<?php

class Album
{

    public $id;
    public $title;
    public $image_name;
    public $description;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`title`,`image_name`,`description`,`queue` FROM `album` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->image_name = $result['image_name'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `album` (`title`,`image_name`,`description`,`queue`) VALUES  ('"
            . $this->title . "','"
            . $this->image_name . "', '"
            . $this->description . "', '"
            . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysqli_insert_id($db->DB_CON);

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `album`  ";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update()
    {

        $query = "UPDATE  `album` SET "
            . "`title` ='" . $this->title . "', "
            . "`image_name` ='" . $this->image_name . "', "
            . "`description` ='" . $this->description . "', "
            . "`queue` ='" . $this->queue . "' "
            . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete()
    {

        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/album/" . $this->image_name);

        $query = 'DELETE FROM `album` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos()
    {

        $ALBUM_PHOTOS = new AlbumPhoto(NULL);

        $allPhotos = $ALBUM_PHOTOS->getAlbumPhotosById($this->id);

        foreach ($allPhotos as $photo) {
            $ALBUM_PHOTOS->image_name = $photo["image_name"];
            $ALBUM_PHOTOS->id = $photo["id"];
            $ALBUM_PHOTOS->delete();
        }
    }

    public function arrange($key, $img)
    {
        $query = "UPDATE `album` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
