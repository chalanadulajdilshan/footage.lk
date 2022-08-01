<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of portfolio
 *
 * @author TOSHIBA
 */
class Portfolio
{

    public $id;
    public $title; 
    public $image_name;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`title`,`image_name`,`queue` FROM `portfolio` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title']; 
            $this->image_name = $result['image_name'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `portfolio` (`title`,`image_name` ) VALUES  ('"
            . $this->title . "','" 
            . $this->image_name . "')";

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

        $query = "SELECT * FROM `portfolio` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }
    public function all_count()
    {
        $query = "SELECT count(*) `count` FROM `portfolio`";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['count'] ?: 0;
    }
    public function update()
    {

        $query = "UPDATE  `portfolio` SET "
            . "`title` ='" . $this->title . "', " 
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

        $query = 'DELETE FROM `portfolio` WHERE id="' . $this->id . '"';
        $HELP = new Helper();
        
        unlink($HELP->getSitePath() . "upload/portfolio/" . $this->image_name);

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img)
    {
        $query = "UPDATE `portfolio` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
