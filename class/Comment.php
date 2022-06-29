<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comment
 *
 * @author TOSHIBA
 */
class Comment
{

    public $id;
    public $name;
    public $position;
    public $image_name;
    public $comment;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`name`,`position`,`image_name`,`comment`,`queue` FROM `comment` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->position = $result['position'];
            $this->image_name = $result['image_name'];
            $this->comment = $result['comment'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `comment` (`name`,`image_name`,`position`,`comment`) VALUES  ('"
            . $this->name . "','"
            . $this->image_name . "', '"
            . $this->position . "', '"
            . $this->comment . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {
            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `comment` ORDER BY queue ASC";
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

        $query = "UPDATE  `comment` SET "
            . "`name` ='" . $this->name . "', "
            . "`position` ='" . $this->position . "', "
            . "`comment` ='" . $this->comment . "', "
            . "`image_name` ='" . $this->image_name . "' "
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

        $query = 'DELETE FROM `comment` WHERE id="' . $this->id . '"';
        $HELP = new Helper();

        unlink($HELP->getSitePath() . "upload/comment/" . $this->image_name);

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img)
    {
        $query = "UPDATE `comment` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
