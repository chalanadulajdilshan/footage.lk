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
class QuotationDetail
{
    public $id;
    public $quotation_id;
    public $days;
    public $rate;
    public $price;
    public $description;

    public function __construct($id)
    {
        if ($id) {
            $query = "SELECT * FROM `quotation_details` WHERE `id`=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));
            $this->id = $result['id'];
            $this->quotation_id = $result['quotation_id'];
            $this->days = $result['days'];
            $this->rate = $result['rate'];
            $this->price = $result['price'];
            $this->description = $result['description'];

            return $this;
        }
    }
    public function create()
    {
        $this->price = $this->rate * $this->days;
        $query = "INSERT INTO `quotation_details` ( `quotation_id`,`description`,`days`,`rate`,`price`) VALUES  ('"
            . $this->quotation_id . "', '"
            . $this->description . "', '"
            . $this->days . "', '"
            . $this->rate . "', '"
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
        $query = "SELECT * FROM `quotation_details` ORDER BY id ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }
    public function getDetailsByInvoiceId($quotation_id)
    {
        $query = "SELECT * FROM `quotation_details` WHERE `quotation_id`= $quotation_id ORDER BY id ASC";
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
        $query = "UPDATE  `quotation_details` SET "
            . "`quotation_id` ='" . $this->quotation_id . "', "
            . "`description` ='" . $this->description . "', "
            . "`days` ='" . $this->days . "', "
            . "`rate` ='" . $this->rate . "', "
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
        $query = 'DELETE FROM `quotation_details` WHERE id="' . $this->id . '"';
        $db = new Database();
        return $db->readQuery($query);
    }
}
