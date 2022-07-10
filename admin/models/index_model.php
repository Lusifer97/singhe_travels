<?php
import('./libs/custom/User_Login_Model');
class Index_Model extends User_Login_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function popularDestinations(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' =>'status =:status',
            'data' =>['status'=>1],
            'limit' => 5,
            
        ]);
        return $result;
    }

    function destinationCount(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => 'COUNT(name)'
            
            
        ]);
        return $result;
    }

    function allPackages(){
        $result = $this->db->select([
            'table' => 'packages',
            'column' => '*'
            
        ]);
        return $result;
    }

    function allHotels(){
        $result = $this->db->select([
            'table' => 'hotels',
            'column' => '*'
            
        ]);
        return $result;
    }

    function feedbacks(){
        $result = $this->db->select([
            'table' => 'feedback',
            'column' => '*',
            'where' => 'status =:status',
            'data' =>['status' => 1]
            
        ]);
        return $result;
    }

    function blog(){
        $result = $this->db->select([
            'table' => 'articals',
            'column' => '*',
            'limit' =>3
            
        ]);
        return $result;
    }

}
