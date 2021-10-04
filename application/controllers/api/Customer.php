<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require APPPATH.'/libraries/REST_Controller.php';

class Customer extends REST_Controller {

  function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    parent::__construct();
  }


  public function index_get()
  {
      $customers = $this->Customer_model->getData();
      $this->response($customers,200);
  }


  public function index_post(){

    $customer = $this->input->post(NULL,TRUE);

     if($customer)
     {
         $customer['cust_code'] = str_replace(' ', '', ($customer['first_name'].$customer['last_name'].$customer['date_of_birth']));

         $affectedRows = $this->Customer_model->addData($customer);

         if($affectedRows>0) {
           $customerID = $this->db->insert_id();
           $this->response(array("status"=>1,"data"=>$customer),200);
         }
         else
          $this->response(array("status"=>0),200);
     }
   }
}
