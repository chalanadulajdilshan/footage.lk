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
class InvoiceDetail
{
    public $id;
    public $invoice_id;
    public $description;
    public $price;

    public function __construct($id)
    {
        if ($id) {
            $query = "SELECT * FROM `invoice_details` WHERE `id`=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));
            $this->id = $result['id'];
            $this->invoice_id = $result['invoice_id'];
            $this->description = $result['description'];
            $this->price = $result['price'];

            return $this;
        }
    }
    public function create()
    {
        $query = "INSERT INTO `invoice_details` ( `invoice_id`,`description`,`price`) VALUES  ('"
            . $this->invoice_id . "', '"
            . $this->description . "', '"
            . $this->price . "')";
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
        $query = "SELECT * FROM `invoice_details` ORDER BY id ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    public function getDetailsByInvoiceId($invoice_id)
    {
        $query = "SELECT * FROM `invoice_details` WHERE `invoice_id`= $invoice_id ORDER BY id ASC";
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
        $query = "UPDATE  `invoice_details` SET "
            . "`invoice_id` ='" . $this->invoice_id . "' "
            . "`description` ='" . $this->description . "' "
            . "`price` ='" . $this->price . "' "
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
        $query = 'DELETE FROM `invoice_details` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
