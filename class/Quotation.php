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
class Quotation
{
    public $id;
    public $customer_id;
    public $project_id;
    public $cost;
    public $visit;
    public $advance;
    public $total;
    public $note;
    public $date;
    public $created_at;

    public function __construct($id)
    {
        if ($id) {
            $query = "SELECT * FROM `quotation` WHERE `id`=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));
            $this->id = $result['id'];
            $this->customer_id = $result['customer_id'];
            $this->project_id = $result['project_id'];
            $this->cost = $result['cost'];
            $this->visit = $result['visit'];
            $this->advance = $result['advance'];
            $this->total = $result['total'];
            $this->note = $result['note'];
            $this->date = $result['date'];
            $this->created_at = $result['created_at'];
            return $this;
        }
    }
    public function create()
    {
        $query = "INSERT INTO `quotation` ( `customer_id`,`project_id`,`cost`, `visit`,`advance`,`total`) VALUES  ('"
            . $this->customer_id . "', '"
            . $this->project_id . "', '"
            . $this->cost . "', '"
            . $this->visit . "', '"
            . $this->advance . "', '"
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
        $query = "SELECT * FROM `quotation` ORDER BY 'created_ay' DESC";
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
        $query = "SELECT count(*) `count` FROM `quotation`";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['count'] ?: 0;
    }
    public function getInvoiceByCustomerId($customer_id)
    {
        $query = "SELECT * FROM `quotation` WHERE `customer_id`= $customer_id ORDER BY 'created_ay' DESC";
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
        $query = "SELECT * FROM `quotation` WHERE `project_id`= $project_id ORDER BY id ASC";
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
        $query = "UPDATE  `quotation` SET "
            . "`customer_id` ='" . $this->customer_id . "', "
            . "`project_id` ='" . $this->project_id . "', "
            . "`cost` ='" . $this->cost . "', "
            . "`visit` ='" . $this->visit . "', "
            . "`advance` ='" . $this->advance . "', "
            . "`total` ='" . $this->total . "', "
            . "`note` ='" . @htmlspecialchars($this->note) . "', "
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
        $query = "UPDATE  `quotation` SET `total` = " . ($this->cost - $this->advance) . " WHERE `id` = '" . $this->id . "'";
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
        $query = 'DELETE FROM `quotation` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
