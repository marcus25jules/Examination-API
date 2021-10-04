<?php

require APPPATH.'/libraries/phpqrcode/qrlib.php';

class Customer_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function getData()
  {
    $this->db->select('*');
    $this->db->from('tbl_customer');
    $query = $this->db->get();
    $user =  $query->result_array();
    
    return $user;
  }


  public function addData($customer)
  {
    //Insert to DB
    $customer['date_created'] = date("Y-m-d H:i:s");
    $this->db->insert("tbl_customer",$customer);

    return $this->db->affected_rows();
  }

}
