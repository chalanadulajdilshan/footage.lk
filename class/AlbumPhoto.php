<?php

class AlbumPhoto
{

    public $id;
    public $album;
    public $image_name;
    public $caption;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`album`,`image_name`,`caption`,`queue` FROM `album_photo` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->album = $result['album'];
            $this->image_name = $result['image_name'];
            $this->caption = $result['caption'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `album_photo` (`album`,`image_name`,`caption`,`queue`) VALUES  ('"
            . $this->album . "','"
            . $this->image_name . "', '"
            . $this->caption . "', '"
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

        $query = "SELECT * FROM `album_photo` ORDER BY queue ASC";
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

        $query = "UPDATE  `album_photo` SET "
            . "`album` ='" . $this->album . "', "
            . "`image_name` ='" . $this->image_name . "', "
            . "`caption` ='" . $this->caption . "', "
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

        $query = 'DELETE FROM `album_photo` WHERE id="' . $this->id . '"';
        unlink(Helper::getSitePath() . "upload/album/gallery/" . $this->image_name);
        $db = new Database();

        return $db->readQuery($query);
    }

    public function getAlbumPhotosById($album)
    {

        $query = "SELECT * FROM `album_photo` WHERE `album`= $album ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img)
    {
        $query = "UPDATE `album_photo` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
