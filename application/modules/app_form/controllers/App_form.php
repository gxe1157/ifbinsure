<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Rename Perfectcontroller to [Name]
class App_form extends MY_Controller 
{

/* model name goes here */
var $mdl_name = 'mdl_app_form';
var $main_controller = 'app_form';

var $column_rules = array(
    array('field' => 'business_name', 'label' => 'Business Trade Name', 'rules' => 'required'),
    array('field' => 'liquor_License', 'label' => 'Liquor License Number', 'rules' => ''),
    array('field' => 'address1', 'label' => 'Address 1', 'rules' => 'required'),
    array('field' => 'address2', 'label' => 'Address 2', 'rules' => ''),
    array('field' => 'city', 'label' => 'City', 'rules' => ''),    
    array('field' => 'state', 'label' => 'State', 'rules' => ''),        
    array('field' => 'zip', 'label' => 'Zip', 'rules' => ''),        
    array('field' => 'contact_name', 'label' => 'Contact Name', 'rules' => 'required'),        
    array('field' => 'email', 'label' => 'Email Address', 'rules' => 'required|valid_email|max_length[100]'),       

    array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required'),    
    array('field' => 'current_company', 'label' => 'Current Company', 'rules' => ''),        
    array('field' => 'current_agent', 'label' => 'Current Agent', 'rules' => ''),        
    array('field' => 'renewal_month', 'label' => 'Renewal Month', 'rules' => ''),        
    array('field' => 'premium', 'label' => 'Premium', 'rules' => ''),
    array('field' => 'type_operation', 'label' => 'Type of Operation', 'rules' => ''),    
    array('field' => 'building_limit', 'label' => 'Building Limit', 'rules' => ''),        
    array('field' => 'contents_limit', 'label' => 'Contents Limit', 'rules' => ''),        
    array('field' => 'building_age', 'label' => 'Building Age', 'rules' => ''),        
    array('field' => 'construction', 'label' => 'Construction', 'rules' => ''),        
    array('field' => 'apartments', 'label' => 'Apartments', 'rules' => ''),        
    array('field' => 'number_of_units', 'label' => 'Number of Units', 'rules' => ''),            
    array('field' => 'sprinkler_system', 'label' => 'Sprinkler System', 'rules' => ''),            
    array('field' => 'years_at_location', 'label' => 'Years at this location', 'rules' => ''),            
    array('field' => 'liability_limit', 'label' => 'Liability Limit', 'rules' => ''),            
    array('field' => 'annual_food_sales', 'label' => 'Annual Food Sales', 'rules' => ''),            
    array('field' => 'annual_liquor_sales', 'label' => 'Annual Liquor Sales', 'rules' => ''),            
    array('field' => 'type_entertainment', 'label' => 'Entertainment Type', 'rules' => ''),            
    array('field' => 'payroll_restaurant', 'label' => 'Payroll Restaurant', 'rules' => ''),        
    array('field' => 'payroll_clerical', 'label' => 'Payroll Clerical', 'rules' => '')        

);

var  $columns_not_allowed = array();


function __construct() {
    parent::__construct();
}


/* ===================================================
    Controller functions goes here. Put all DRY
    functions in app_forms/core/My_Controller.php
  ==================================================== */

function app_form_thankyou()
{

    $data['custom_jscript'] = '';
    $data['page_url']       = 'app_form_thankyou';
    $data['page_title']     = 'Insurance Application';
    $data['view_module']    = 'app_form';
    $data['title']          = 'Insurance Quote';

    $this->load->module('templates');
    $this->templates->public_main($data);

}

function index()
{
    $submit = $this->input->post('submit', TRUE);

    if($submit == "Submit" ){
        // Insert new option
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
              $compose_message .= "You have received a Quick Quote Questionaire \n\n\n";

              foreach ($email_data as $key => $value) {
                $compose_message .= $key.": ".$value." \n";
              }
              $compose_message .= " \n ~Webmaster";              

              $subject = 'Quick Quote Questionaire: '.$new_id;  
              $email = $this->input->post( 'email', TRUE);
              $this->email_message($email, $subject, $compose_message );
          }

          redirect( $this->main_controller.'/app_form_thankyou');            
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

    $data['columns'] = $this->fetch_data_from_post();
    $data['req_flds'] = req_flds($this->column_rules);    
    $data['columns_not_allowed'] = $this->columns_not_allowed;
    $data['labels']    = $this->_get_column_names('label');        
    $data['custom_jscript'] = '';
    $data['page_url']       = 'app_form';
    $data['page_title']     = 'Insurance Application';
    $data['view_module']    = 'app_form';
    $data['title']          = 'Insurance Application';

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
