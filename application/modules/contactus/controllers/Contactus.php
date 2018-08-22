<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Rename Perfectcontroller to [Name]
class Contactus extends MY_Controller 
{

/* model name goes here */
public $mdl_name = 'Mdl_contactus';
public $main_controller = 'contactus';

public $column_rules = array(
    array('field' => 'subject', 'label' => 'Subject', 'rules' => 'trim|required|max_length[100]'),  
    array('field' => 'name', 'label' => 'Name', 'rules' => 'trim|required|max_length[60]'),
    array('field' => 'email', 'label' => 'Email Address', 'rules' => 'required|valid_email|max_length[100]'),    
    array('field' => 'message', 'label' => 'Message', 'rules' => 'trim|required')
);

public  $columns_not_allowed = [];

function __construct() {
    parent::__construct();
}


/* ===================================================
    Controller functions goes here. Put all DRY
    functions in applications/core/My_Controller.php
  ==================================================== */

function index()
{
    $data['custom_jscript'] = '';
    $data['page_url']       = 'contactus';
    $data['page_title']     = 'Contact Us';
    $data['view_module']    = 'contactus';
    $data['title']          = 'Contact Us';

    $this->load->module('templates');
    $this->templates->public_main($data);
}


function email_received()
{

    $data['custom_jscript'] = '';
    $data['page_url']       = 'email_received';
    $data['page_title']     = 'Email Received';
    $data['view_module']    = 'contactus';
    $data['title']          = 'Email Received';

    $this->load->module('templates');
    $this->templates->public_main($data);
}

function send()
{

    $submit = $this->input->post('submit', TRUE);

    if($submit == "Submit" ){
        $this->load->library('form_validation');
        $this->form_validation->set_rules( $this->column_rules );

        if($this->form_validation->run() == TRUE) {
          $email_data = $this->fetch_data_from_post();       
          $email_data['create_date'] = SQLformat_date(getToday());

          $new_id = $this->_insert($email_data);

          /* Send Email */
          if( ENV == 'live'){
              $compose_message = "";
              $compose_message = "\n";
              $compose_message .= "Contact Us \n\n\n";

              foreach ($email_data as $key => $value) {
                $compose_message .= $key.": ".$value." \n";
              }
              $compose_message .= " \n ~Webmaster";              

              $subject = 'Contact Request Number: '.$new_id;  
              $email = $this->input->post( 'email', TRUE);
              $this->email_message($email, $subject, $compose_message );
          }

          redirect( base_url().$this->main_controller.'/email_received');            
        }

    }

    $data['custom_jscript'] = '';
    $data['page_url']       = 'contactus';
    $data['page_title']     = 'Contact Us';
    $data['view_module']    = 'contactus';
    $data['title']          = 'Contact Us';

    $this->load->module('templates');
    $this->templates->public_main($data);
}


/* ===============================================
    Call backs go here...
  =============================================== */


/* ===============================================
    David Connelly's work from perfectcontroller
    is in applications/core/My_Controller.php which
    is extened here.
  =============================================== */


} // End class Controller
