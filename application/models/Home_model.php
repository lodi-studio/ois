<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    	$this->load->database();
    }

	function getPosts(){
        $query  = "select bus_no, dispatch_time, bus_route, bus_driver, bus_conductor, or_no, no_of_pass from dispatch";
        return $this->db->query($query);
	 }

    function getArrivalPosts(){
        $query  = "select bus_no, dispatch_time, bus_route, bus_driver, bus_conductor, or_no, no_of_pass from arrival";
        return $this->db->query($query);
     }

    public function create($dispatcher, $terminal, $bound, $dispatch_date, $bus_no, $dispatch_time, $bus_route, $bus_driver, $bus_conductor, $or_no, $no_of_pass){
            $query = $this->db->query("insert into dispatch (dispatcher, terminal, bound, dispatch_date, bus_no, dispatch_time, bus_route, bus_driver, bus_conductor, or_no, no_of_pass) values('$dispatcher', '$terminal', '$bound', '$dispatch_date', '$bus_no', '$dispatch_time', '$bus_route', '$bus_driver', '$bus_conductor', '$or_no', '$no_of_pass')");
                
                if($query){
                    return "success";
                }else{
                    return "failed";
                }
    }
    
       public function arrival($dispatcher, $terminal, $bound, $dispatch_date, $bus_no, $dispatch_time, $bus_route, $bus_driver, $bus_conductor, $or_no, $no_of_pass){
            $query = $this->db->query("insert into arrival (dispatcher, terminal, bound, dispatch_date, bus_no, dispatch_time, bus_route, bus_driver, bus_conductor, or_no, no_of_pass) values('$dispatcher', '$terminal', '$bound', '$dispatch_date', '$bus_no', '$dispatch_time', '$bus_route', '$bus_driver', '$bus_conductor', '$or_no', '$no_of_pass')");
                
                if($query){
                    return "success";
                }else{
                    return "failed";
                }
    }
    

}
