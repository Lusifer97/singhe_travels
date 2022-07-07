<?php
// import('./libs/custom/User_Login_Model');
class Packages_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function selectAll(){
        $result = $this->db->select([
            'table' => 'packages',
            'column' => '*',
            
        ]);
        return $result;
    }

    function getStatus(){
        $result = $this->db->select([
            'table' => 'packages',
            'column' => 'DISTINCT(status)',
            
        ]);
        return $result;
    }

    function selectOne($id){
        $result = $this->db->select([
            'table' => 'packages',
            'column' => '*',
            'where' => 'id =:id',
            'data' => ['id'=>$id],
            
        ]);
        return $result;
    }

    function getPlan($id){
        $result = $this->db->select([
            'table' => 'plan',
            'column' => '*',
            'where' => 'package_id =:p_id',
            'data' =>['p_id'=>$id]
        ]);

        return $result;
    }

    function getTours($id){
       
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' => 'id IN(select destination_id from destinations_in_packages where packages_id =:p_id)',
            'data' =>['p_id'=>$id]
        ]);

        return $result;
    }
    function simillarPackages($id){
       
        $result = $this->db->select([
            'table' => 'packages',
            'column' => '*',
            'where' => 'status =(select status from packages where id =:p_id)',
            'data' =>['p_id'=>$id],
            'limit' => 2
        ]);

        return $result;
    }

    function getfacilities($id){
       
        $result = $this->db->select([
            'table' => ' facilities',
            'column' => '*',
            'where' => 'id IN(select facilities_id from  facilities_in_packages where packages_id =:p_id)',
            'data' =>['p_id'=>$id]
        ]);

        return $result;
    }

    function getPhotos($id){
        $result = $this->db->select([
            'table' => 'destination_photos',
            'column' => '*',
            'where' => 'destination_id IN (select destination_id from destinations_in_packages where packages_id =:p_id)',
            'data' =>['p_id'=>$id]
        ]);

        return $result;
    }

    function feedback($data){
        $result = $this->db->insert(array(
            'table' => 'feedback',
            'data' => [
                'name' => $data["name"],
                'email' => $data["email"],
                'date' => date('d-m-Y'),
                'feedback' => $data["feedback"],
                'package_id' => $data["p_id"],
            ]
        ));
        return $result;
    }

    function getFeedback($id){
        $result = $this->db->select([
            'table' => 'feedback',
            'column' => '*',
            'where' => 'status =:status AND package_id =:package_id',
            'data' => ['status'=>1,'package_id'=>$id],
            'limit' => 3
            
        ]);
        return $result;
    }

    function popularPackage(){
        $result = $this->db->select([
            'table' => 'packages',
            'column' => '*',
            'limit' => 2,
            
        ]);
        return $result;
    }


}
