<?php 
/**
 * @author Karsan
 */
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Synchronization extends MY_Controller {

	function __construct() {
		parent::__construct();
		//this comment is for you nigga
		//erase it 
		//hahaha
	}

	function index(){
		$data['title'] = "System Database Updates";
		// $data['last_sync'] = $current_time =date('Y-m-d H:i:s');//this is wrong. last sync is to be gotten from database
		$data['last_sync'] = 
		$data['banner_text'] = "System Database Management";		
		$template = 'shared_files/template/template';			
		$data['content_view'] = 'facility/facility_db';			
		
		$this -> load -> view($template, $data);

	}
	

	public function synchronize_data(){
		$time = sync_model::get_latest_timestamp();
		// $time = $this->last_sync_time();
		echo "<pre>"; print_r($time); echo "</pre>";
	}

	public function last_sync_time(){
		$time = sync_model::get_latest_timestamp();
		return $time[0]['last_sync_date'];
	}

	public function tester(){
		$data['content_view'] = "testers/sync";
		$template = 'shared_files/template/template';
		$this -> load -> view($template, $data);

	} 


	public function  sync(){
    
     // Array with all the tables  // hard coded but am sure there is another way in codeigniter


       /*$all_tables = array( 'access_level ' ,                      
			 'account_list',                       
			 'assignments' ,                        
			 'comments '  ,                         
			 'commodities' ,                        
			 'commodity_category' ,                 
			 'commodity_division_details ',        
			 'commodity_source'    ,                
			 'commodity_source_other',              
			 'commodity_source_other_prices' ,      
			 'commodity_source_sub_category',       
			 'commodity_sub_category'   ,           
			' counties'      ,                      
			 'county_drug_store_issues' ,           
			 'county_drug_store_totals'  ,          
			 'county_drug_store_transaction_table',
			 'dispensing_records'        ,          
			 'dispensing_stock_prices',             
			 'dispensing_totals'  ,                 
			 'districts'        ,                   
			 'drug_commodity_map',                  
			 'drug_store_issues' ,                  
			 'drug_store_totals',                   
			 'drug_store_transaction_table',        
			 'email_listing'      ,                 
			 'facilities'  ,                        
			 'facility_amc',                        
			 'facility_amc1'  ,                     
			 'facility_evaluation' ,                
			 'facility_impact_evaluation'  ,        
			 'facility_issues'    ,                 
			 'facility_monthly_stock',              
			'facility_order_details' ,             
			 'facility_order_details_rejects',      
			 'facility_order_status'  ,             
			 'facility_orders'   ,                  
			 'facility_stock_out_tracker'  ,        
			 'facility_stock_status' ,              
			 'facility_stocks'   ,                  
			 'facility_stocks_temp',                
			 'facility_transaction_table',          
			 'facility_user_log'  ,                 
			 'issue_type' ,                         
			 'log' ,                                
			 'log_monitor',                         
			 'malaria_data'  ,                      
			 'malaria_drugs' ,                      
			 'menu' ,                               
			 'messages' ,                           
			 'patient_details' ,                    
			 'patient_issues',                      
			 'patients'    ,                        
			 'project_teams',                       
			 'projects' ,                           
			 'rca_county',                          
			'recepients' ,                         
			 'redistribution_data' ,                
			 'requisitions' ,                       
			 'reversals'   ,                        
			 'rh_drugs_data',                       
			 'service_point_stocks' ,               
			 'service_points' ,                     
			 'source_facility',                     
			 'status'   ,                           
			 'sub_menu',                            
			 'tasks'  ,                             
			'team_positions' ,                     
			 'tuberculosis_data' ,                  
			'user'   );
              */
			
           //access all the tables in the array
           $all_tables = $this->db->list_tables();
          
          foreach ($all_tables as $key => $value) {
          	
          	 echo "$value" ."<br/>";
           

           //$data_from_table = Sync_Model::get_all($value);

 

          }



	}
}

 ?>