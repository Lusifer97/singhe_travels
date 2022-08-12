<?php
// import('./libs/custom/User_Login_Model');
class Aboutus_Model extends Model
{

    function __construct()
    {
        parent::__construct();
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



}
