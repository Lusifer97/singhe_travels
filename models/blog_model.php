<?php
import('./libs/custom/User_Login_Model');
class Blog_Model extends User_Login_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function selectAll(){
        $result = $this->db->select([
            'table' => 'articals',
            'column' => '*',
             
            
        ]);
        return $result;
    }

    function getOne($id){
        $result = $this->db->select([
            'table' => 'articals',
            'column' => '*',
            'where' => 'id =:id',
            'data' => ['id' => $id]
             
            
        ]);
        return $result;
    }

     

}
