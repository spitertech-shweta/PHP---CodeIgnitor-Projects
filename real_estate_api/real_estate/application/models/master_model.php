<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master_model extends CI_Model{

	public function add_data($tb,$values)
	{
		 $this->db->insert($tb,$values);
		 return $last_id = $this->db->insert_id();
	}


	public function show_data($tb,$where_condition=NULL)
	{

		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where($where_condition);
		$query = $this->db->get();
		$result = $query->result();
		return $result;

	}



	function show_record_by_id($tb,$where_condition)
	{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where($where_condition);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	

	function login($tb,$username,$user_pwd)
	{
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where('email', $username);
		$this->db->where('pwd', $user_pwd);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}


	public function update_data($tb,$where_condition,$data)
	{
		$this->db->where($where_condition);
		$this->db->update($tb,$data);

	}


	// on delete button event fire update query and change status=0 in database table:add_stud
				
	public function onDelete_update_data($tb,$where_condition,$data)
	{
		
		$this->db->where($where_condition);
		$this->db->update($tb, $data); 

	}

	
	// on recover button event fire update query and change status=1 in database table:add_stud
	public function onRecover_update_data($tb,$where_condition,$data)
	{
		  
		$this->db->where($where_condition);
		$this->db->update($tb, $data); 

	}


	//display student record where status=0
	function trash_record_status_0($tb,$where_condition)
	{
	
		$this->db->select('*');
		$this->db->from($tb);
		$this->db->where($where_condition);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function delete_data($tb,$where_condition)
	{
		$this->db->where($where_condition);
		$this->db->delete($tb);

	}


	public function top_5_hot_properties($tb,$data)
	{
		$this->db->select('seo_url,property_name,property_main_img,property_price');
		$this->db->order_by("property_price", "desc");
		$this->db->from($tb);
		$this->db->limit(4);
		$this->db->where($data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		
	}



	//restrict url direct access without login
	function _validateLogin()
	{
	$CI =& get_instance();
	   $router = &load_class('Router');
	   $currentMethod = $router->fetch_method();
	  // if(in_array($currentMethod,$this->publicMethods) == false)
		//{
		  // call some login functionality
			if(!$CI->session->userdata('email'))
			{
				redirect(base_url()."admin/login");
			}

	   //}

		}

		//remove special characters from url 
	function clean_url($page_name) {
		//Lower case everything
		$page_name = strtolower($page_name);
		//Make alphanumeric (removes all other characters)
		$page_name = preg_replace("/[^a-z0-9_\s-]/", "", $page_name);
		//Clean up multiple dashes or whitespaces
		$page_name = preg_replace("/[\s-]+/", " ", $page_name);
		//Convert whitespaces and underscore to dash
		$page_name = preg_replace("/[\s_]/", "-", $page_name);
		return $page_name;
	}

//remove special characters from name except &
function clean_name($name) {
	//Lower case everything
	$name = strtolower($name);
	$name = preg_replace('/[^A-Za-z0-9 &]/', '', $name);
	return $name;
}


public function  agent_details_by_id($where_condition)
{
		$this->db->select('agent.agent_name,agent.agent_mobile');
		$this->db->from('product'); // this is first table name
		$this->db->where($where_condition);
		$this->db->join('agents','agent.agent_id = property.property_id'); // this is second table name with both table ids
		$query = $this->db->get();
		return $query->result();		
}


	//count records in table
	public function get_count($tb) 
	{
        return $this->db->count_all($tb);
    }


	// pagination with search filter , sort filter, price filters for API
	  public function get_property_by_pagination($limit,$start,$tb,$status,$min,$max,$property_type,$search_property,$sorting)
	  {
			 
			if($search_property)
			{
				$min = "";
				$property_type = "";
			}


			$this->db->select('*');
			$this->db->from($tb);
			
			
			if(!empty($max))
			{
		
				$this->db->where("property_price BETWEEN '$min' AND '$max' ");
			}
			
			else if(!empty($property_type))
			{
				$this->db->like('property_type',$property_type);		
			}

			else if(!empty($search_property))
			{

				$this->db->like('property_name',$search_property);
			}

			else if(!empty($sorting))
			{
				$this->db->order_by('property_price',$sorting);
			}
		
				$this->db->limit($limit,$start);
				$this->db->where($status);
				$query = $this->db->get();	
				return $query->result();
			
					  
      }


// pagination with search filter , sort filter, price filters
public function show_property_details_by_pagination($tb,$data,$limit,$start,$search_data,$sort_order,$col_name,$min,$max,$property_type)
{
    $output = '';
	$this->db->select('*');
	$this->db->from($tb);

	if(!empty($search_data))
	{
		$this->db->like('property_name',urldecode($search_data));
		$this->db->limit($limit,$start);	

	}

	
	if(!empty($property_type))
	{
		$this->db->like('property_type',urldecode($property_type));
		$this->db->limit($limit,$start);	

	}


	if (!empty($sort_order))
	{
		$this->db->order_by($col_name,$sort_order);
		$this->db->limit($limit,$start);	

	}

	
	if(!empty($min))
	{
		$this->db->where("property_price BETWEEN '$min' AND '$max' ");
	}
	

	$this->db->where($data);
	$query = $this->db->get();
    $result = $query->result();

	
	 foreach($result as $sort_property_by_price)  {
		 $output .= '
		<div class="col-lg-4 col-sm-6">

			<div class="properties">'.$sort_property_by_price->property_name.'<div class="image-holder"><a href="'.base_url().'property_details/'.$sort_property_by_price->seo_url.'"><img src="'.base_url().$sort_property_by_price->property_main_img.'" class="img-responsive" alt="properties" id ="image_holder"></a>';
	
		$output .= '
			<div class="status sold">Sold</div>
			</div>

		<h4><a href="'.$sort_property_by_price->property_name.'"></a></h4><p class="price">Price:<img src = "'.base_url().'images/rupee.jpg" id = "rupee"/>'.$sort_property_by_price->property_price; 
		
		 $output.=' </p> <div class="listing-detail" class="w3-tooltip" title="regular tooltip"><span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Bedroom Room">'.$sort_property_by_price->property_bedroom.'</span> <span class="w3-text w3-tag w3-yellow"  data-toggle="tooltip" data-placement="top" title="Living Room">'.$sort_property_by_price->property_living_room.'</span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Parking">'.$sort_property_by_price->property_parking.'</span> <span class="w3-text w3-tag w3-yellow" data-toggle="tooltip" data-placement="top" title="Kitchen">'.$sort_property_by_price->property_kitchen.'</span> </div>'; 
		 
		 $output.= '<a class="btn btn-primary" href="'.base_url().'property_details/'.$sort_property_by_price->seo_url.'">View Details</a></div> </div>';
		 
		


	} //end of foreach
	 

	   return $output;
 
 
	} // end of function






	public function show_property($where_condition)
	{
		
			$this->db->select('images.property_img,property.*');
			$this->db->from('property'); // this is first table name
			$this->db->where($where_condition);
			$this->db->join('images','images.property_id = property.property_id');
			$query = $this->db->get();
			return $query->result();
			
	}

//autocomplete search for API
	function fetch_query($query)
	{
		$this->db->like('property_name', $query);
		$query = $this->db->get('property');
		if($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row)
			{
				$output[] = array(
				'property_name'  => $row["property_name"],
				'property_main_img'  => $row["property_main_img"],
				'seo_url'  => $row["seo_url"]
				);
			}
		echo json_encode($output);
		}
	}

	
//autocomplete search 
	function fetch_data($query)
	{
		$this->db->like('property_name', $query);
		$query = $this->db->get('property');
		if($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row)
			{
				$output[] = array(
				'property_name'  => $row["property_name"],
				'property_main_img'  => $row["property_main_img"],
				'seo_url'  => $row["seo_url"]
				);
			}
		echo json_encode($output);
		}
	}


	function show_distinct_data($tb,$where_condition,$data)
	{
		$this->db->select($data);
		$this->db->from($tb);
		$this->db->where($where_condition);
		$this->db->distinct();
		$query = $this->db->get();
		$result = $query->result();
		return $result;

	}


	function show_enquiry_by_product_id()
	{
		    $this->db->select('property.property_name,property_enquiry.*');
			$this->db->from('property_enquiry'); // this is first table name
			$this->db->join('property','property.property_id = property_enquiry.property_id');
			$query = $this->db->get();
			return $query->result();

	}


}

?>

