<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of phone_number
 *
 * @author TOSHIBA
 */
class Customer
{

    public $id;
    public $customer_name;
    public $company_name;
    public $contact_person;
    public $address;
    public $phone_number;
    public $email;


    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT `id`,`customer_name`,`company_name`,`address`,`contact_person`,`phone_number`,`email` FROM `customer` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->customer_name = $result['customer_name'];
            $this->company_name = $result['company_name'];
            $this->contact_person = $result['contact_person'];
            $this->address = $result['address'];
            $this->phone_number = $result['phone_number'];
            $this->email = $result['email'];

            return $this;
        }
    }

    public function create()
    {

        $query = "INSERT INTO `customer` (`customer_name`,`company_name`,`address`,`contact_person`,`phone_number`,`email`) VALUES  ('"
            . $this->customer_name . "','"
            . $this->company_name . "', '"
            . $this->address . "', '"
            . $this->contact_person . "', '"
            . $this->phone_number . "', '"
            . $this->email . "')";

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

        $query = "SELECT * FROM `customer` ORDER BY queue ASC";
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

        $query = "UPDATE  `customer` SET "
            . "`customer_name` ='" . $this->customer_name . "', "
            . "`company_name` ='" . $this->company_name . "', "
            . "`address` ='" . $this->address . "', "
            . "`contact_person` ='" . $this->contact_person . "', "
            . "`phone_number` ='" . $this->phone_number . "', "
            . "`email` ='" . $this->email . "' "
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

        $query = 'DELETE FROM `customer` WHERE id="' . $this->id . '"';
        $HELP = new Helper();

        unlink($HELP->getSitePath() . "upload/phone_number/" . $this->contact_person);

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img)
    {
        $query = "UPDATE `customer` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
}
