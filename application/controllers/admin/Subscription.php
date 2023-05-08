<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	function index()
	{
		$offersdata=$this->Crud_model->GetData('subscription','','');
			$header = array('title' => 'subscription');
		$data = array(
            'heading' => 'Subscriptions',
            'offersdata' => $offersdata,
        );
        $this->load->view('admin/header', $header);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/subscription/list',$data);
        $this->load->view('admin/footer');
	}
	 public function create()
  {
    $header = array('title'=> 'Add');
      $data = array(
                  'heading'=>'Add Subscription',
                  'button'=>'Create',
                    //'action'=>admin_url('Event/create_action'),
                    'subscription_name' =>set_value('subscription_name'),
                    'subscription_amount' =>set_value('subscription_amount'),
                    'subscription_duration' =>set_value('subscription_duration'),           
                    'subscription_id' =>set_value('subscription_id'),
                    'service' =>set_value('service'),
                    'id' =>set_value('id'),
                   
          );
     $this->load->view('admin/header',$header);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/subscription/form',$data);
        $this->load->view('admin/footer');
  }
		public function create_action()
	{
    
		 $data = array(
             
              'subscription_name'=> $_POST['subscription_name'],
              'subscription_amount'=> $_POST['subscription_amount'],
              'subscription_duration'=> $_POST['subscription_duration'],       
              'created_date'=> date('Y-m-d H:i:s'),
             );
        $this->Crud_model->SaveData('subscription',$data);
        $last_id=$this->db->insert_id();
       $count = count($this->input->post('service'));
         for ($i=0; $i < $count; $i++)
        {

                $log = array(
                   'service'=>$_POST['service'][$i],
                   
                    'subscription_id'=>$last_id,
                     'created_date'=>date('Y-m-d H:m:s'),

         
                );
              $this->Crud_model->SaveData('subscription_service',$log);
              }
        $this->session->set_flashdata('message', 'Subscription created successfully');
        redirect(admin_url('subscription'));
		
	}

      public function update($id)
      {
        $sub_id=base64_decode($id);
        $update_sub=$this->Crud_model->get_single('subscription',"id='".$sub_id."'");
    $sub_offer=$this->Crud_model->GetData('subscription_service','',"subscription_id='".$update_sub->id."'");
   
      $header=array('title'=>'update');
      

      $data=array(
      	  'heading'=>'Edit Subscription',
                  'button'=>'Update',
       // 'action'=>site_url('Subscription/update_action'),
        'subscription_name'=>set_value('subscription_name',$update_sub->subscription_name),
        'subscription_amount'=>set_value('subscription_amount',$update_sub->subscription_amount),
        'subscription_duration'=>set_value('subscription_duration',$update_sub->subscription_duration),

        'id'=>$sub_id,
        
        'sub_offer'=>$sub_offer,
      );
      	$this->load->view('admin/header',$header);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/subscription/form',$data);
        $this->load->view('admin/footer');
      
      }


	public function update_action()
	{
    
		 $data = array(
             
              'subscription_name'=> $_POST['subscription_name'],
              'subscription_amount'=> $_POST['subscription_amount'],
              'subscription_duration'=> $_POST['subscription_duration'],       
              'created_date'=> date('Y-m-d H:i:s'),
             );
        $this->Crud_model->SaveData('subscription',$data,"id='".$_POST['id']."'");

        $last_id=$_POST['id'];
        $this->Crud_model->DeleteData('subscription_service',"subscription_id='".$_POST['id']."'");
       $count = count($this->input->post('service'));
         for ($i=0; $i < $count; $i++)
        {

                $log = array(
                   'service'=>$_POST['service'][$i],
                   
                    'subscription_id'=>$last_id,
                     'created_date'=>date('Y-m-d H:m:s'),

         
                );
             $this->Crud_model->SaveData('subscription_service',$log);

              }

        $this->session->set_flashdata('message', 'Subscription update successfully');
        redirect(admin_url('subscription'));
		
	}




















}