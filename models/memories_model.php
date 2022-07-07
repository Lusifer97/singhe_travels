<?php
// import('./libs/custom/User_Login_Model');
class Memories_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

     

 

    function selectAll(){
        $result = $this->db->select([
            'table' => ' albums',
            'column' => '*',
        ]);
        return $result;
    }

    function getOne($id){
        $result = $this->db->select([
            'table' => ' albums',
            'column' => '*',
            'where' => 'id =:id',
            'data' =>['id' => $id]
        ]);
        return $result;
    }

    function getPhotos($id){
        $result = $this->db->select([
            'table' => ' photos',
            'column' => '*',
            'where' => 'album_id =:id',
            'data' =>['id' => $id]
        ]);
        return $result;
    }

 


}
