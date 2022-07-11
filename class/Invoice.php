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
class Invoice
{
    public $id;
    public $customer_id;
    public $project_id;
    public $note;
    public $total;
    public $date;
    public $created_at;

    public function __construct($id)
    {
        if ($id) {
            $query = "SELECT * FROM `invoice` WHERE `id`=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));
            $this->id = $result['id'];
            $this->customer_id = $result['customer_id'];
            $this->project_id = $result['project_id'];
            $this->note = $result['note'];
            $this->total = $result['total'];
            $this->date = $result['date'];
            $this->created_at = $result['created_at'];
            return $this;
        }
    }
    public function create()
    {
        $query = "INSERT INTO `invoice` ( `customer_id`,`project_id`,`total`) VALUES  ('"
            . $this->customer_id . "', '"
            . $this->project_id . "', '"
            . $this->total . "')";
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
        $query = "SELECT * FROM `invoice` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    public function getInvoiceByCustomerId($customer_id)
    {
        $query = "SELECT * FROM `invoice` WHERE `customer_id`= $customer_id ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    public function getInvoiceByProjectId($project_id)
    {
        $query = "SELECT * FROM `invoice` WHERE `project_id`= $project_id ORDER BY id ASC";
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
        $query = "UPDATE  `invoice` SET "
            . "`customer_id` ='" . $this->customer_id . "', "
            . "`project_id` ='" . $this->project_id . "', "
            . "`note` ='" . @htmlspecialchars($this->note) . "', "
            . "`total` ='" . $this->total . "', "
            . "`date` ='" . $this->date . "' "
            . "WHERE `id` = '" . $this->id . "'";
        // var_dump($query);
        // exit;
        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }
    public function updateTotal()
    {
        $query = "UPDATE  `invoice` SET `total` = (SELECT SUM(`price`) FROM `invoice_details` WHERE `invoice_id` = '" . $this->id . "') WHERE `id` = '" . $this->id . "'";
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
        $query = 'DELETE FROM `invoice` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
