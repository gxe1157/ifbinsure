<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Rename Perfectcontroller to [Name]
class Quickquote extends MY_Controller 
{

/* model name goes here */
public $mdl_name = 'mdl_quickquote';
public $main_controller = 'quickquote';

public $column_rules = array(
    array('field' => 'business_name', 'label' => 'Name of Business', 'rules' => 'required'),
    array('field' => 'address1', 'label' => 'Address 1', 'rules' => 'required'),        
    array('field' => 'address2', 'label' => 'Address 2', 'rules' => ''),        
    array('field' => 'city', 'label' => 'City', 'rules' => 'required'),                
    array('field' => 'state', 'label' => 'State', 'rules' => 'required'),                
    array('field' => 'contact', 'label' => 'Contact Name', 'rules' => 'required'),                        
    array('field' => 'club', 'label' => 'Club', 'rules' => ''),                                
    array('field' => 'phone', 'label' => 'Office Phone', 'rules' => 'required'),
    array('field' => 'cell', 'label' => 'Cell Phone', 'rules' => ''),                                        
    array('field' => 'email', 'label' => 'Email Address', 'rules' => 'required|valid_email|max_length[100]'),    

    array('field' => 'building_limit', 'label' => 'Building Limit', 'rules' => ''),
    array('field' => 'content_limit', 'label' => 'Content Limit', 'rules' => ''),
    array('field' => 'gross_sales_food ', 'label' => 'Gross Sales Food', 'rules' => ''),        
    array('field' => 'gross_sales_liquor','label' => 'Gross Sales Liquor', 'rules' => ''),
    array('field' => 'gross_sales_other','label' => 'Gross Other Sales (ie. Hall Rental)', 'rules' => ''),
    array('field' => 'square_footage','label' => 'Square Footage', 'rules' => ''),        
    array('field' => 'age_built','label' => 'Age Built', 'rules' => ''),        
    array('field' => 'construction','label' => 'Construction', 'rules' => ''),        
    array('field' => 'stories','label' => 'Stories', 'rules' => '')
);

public  $columns_not_allowed = [];

function __construct() {
    parent::__construct();
    $this->load->module('site_captcha');
}


/* ===================================================
    Controller functions goes here. Put all DRY
    functions in applications/core/My_Controller.php
  ==================================================== */

function quick_quote_thankyou()
{

    $data['custom_jscript'] = '';
    $data['page_url']       = 'quick_quote_thankyou';
    $data['page_title']     = 'Insurance Quote';
    $data['view_module']    = 'quickquote';
    $data['title']          = 'Insurance Quote';

    $this->load->module('templates');
    $this->templates->public_main($data);

}

function index()
{
    $captcha_isValid = true;
    $submit = $this->input->post('submit', TRUE);

    if($submit == "Submit" ){
        $captcha_value = $this->input->post('captcha', TRUE);        
        $captcha_isValid = $this->site_captcha->check_captcha($captcha_value);

        $this->load->library('form_validation');
        $this->form_validation->set_rules( $this->column_rules );

        if($this->form_validation->run() == TRUE && $captcha_isValid == TRUE ) {
          $email_data = $this->fetch_data_from_post();       
          $email_data['create_date'] = SQLformat_date(getToday());

          $new_id = $this->_insert($email_data);

          /* Send Email */
          if( ENV == 'live'){
              $compose_message = "";
              $compose_message = "\n";
              $compose_message .= "You have received a Quick Quote Request \n\n\n";

              foreach ($email_data as $key => $value) {
                $compose_message .= $key.": ".$value." \n";
              }
              $compose_message .= " \n ~Webmaster";              

              $subject = 'Quick Quote Number: '.$new_id;  
              $email = $this->input->post( 'email', TRUE);
              $this->email_message($email, $subject, $compose_message );
          }

          redirect( $this->main_controller.'/quick_quote_thankyou');            
        } else {
            //$row as each individual field array 
            foreach($this->column_rules as $row){
                $field = $row['field'];          //getting field name
                $error = form_error($field);    //getting error for field name
                                                //form_error() is inbuilt function

                //if error is their for field then only add in $errors_array array
                if($error)
                $errors_array[$field] = $error;
             
            }
            // return $errors_array;
            $data['errors_array'] = $errors_array;            
        }

    }

    $data['columns']  = $this->fetch_data_from_post();
    $data['req_flds'] = req_flds($this->column_rules);
    $data['columns_not_allowed'] = $this->columns_not_allowed;
    $data['labels'] = $this->_get_column_names('label');        
    $data['captcha_html'] = $this->site_captcha->_create_captcha();
    $data['captcha_isValid'] = $captcha_isValid;

    $data['custom_jscript'] = '';
    $data['page_url']       = 'quick-quote';
    $data['page_title']     = 'Insurance Quote';
    $data['view_module']    = 'quickquote';
    $data['title']          = 'Insurance Quote';

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
