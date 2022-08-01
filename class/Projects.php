<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of create_date
 *
 * @author TOSHIBA
 */
class Projects
{


    public $id;
    public $customer_id;
    public $project_name;
    public $create_date;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`customer_id`,`project_name`,`create_date`,`queue` FROM `project` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->customer_id = $result['customer_id'];
            $this->project_name = $result['project_name'];
            $this->create_date = $result['create_date'];
            $this->queue = $result['queue'];

            return $this;
        }
    }





    public function create()
    {

        $query = "INSERT INTO `project` ( `project_name`,`customer_id`,`create_date`) VALUES  ('"
            . $this->project_name . "', '"
            . $this->customer_id . "', '"
            . $this->create_date . "')";

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

        $query = "SELECT * FROM `project` ORDER BY queue ASC";
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
        $query = "SELECT count(*) `count` FROM `project`";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['count'] ?: 0;
    }
    public function getProjectByCustomerId($customer_id)
    {

        $query = "SELECT * FROM `project` WHERE `customer_id`= $customer_id ORDER BY queue ASC";

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

        $query = "UPDATE  `project` SET "
            . "`project_name` ='" . $this->project_name . "' "
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

        $query = 'DELETE FROM `project` WHERE id="' . $this->id . '"';
        $HELP = new Helper();

        unlink($HELP->getSitePath() . "upload/create_date/" . $this->project_name);

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img)
    {
        $query = "UPDATE `project` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
