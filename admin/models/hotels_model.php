<?php
// import('./libs/custom/User_Login_Model');
class Hotels_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function selectAll(){
        $result = $this->db->select([
            'table' => 'hotels',
            'column' => '*',
            
        ]);
        return $result;
    }

    function selectOne($data){
        $result = $this->db->select([
            'table' => ' hotels',
            'column' => '*',
            'where' => 'id =:id',
            'data' => ['id' => $data]
            
        ]);
        return $result;
    }
    function selectRoom($data){
        $result = $this->db->select([
            'table' => ' rooms',
            'column' => '*',
            'where' => 'hotel_id =:id',
            'data' => ['id' => $data]
            
        ]);
        return $result;
    }

    function getCategory(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => 'DISTINCT(categories)',
            
            
        ]);
        return $result;
    }

    function getCity(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => 'DISTINCT(city)',
            
            
        ]);
        return $result;
    }

    function getPlan($id){
        $result = $this->db->select([
            'table' => 'destination_plan',
            'column' => '*',
            'where' => 'destination_id =:d_id',
            'data' =>['d_id'=>$id]
        ]);

        return $result;
    }

    function getTours($id){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' => 'id IN (select id from destinations_in_packages where packages_id =:p_id)',
            'data' =>['p_id'=>$id]
        ]);

        return $result;
    }

    function getPhotos($id){
        $result = $this->db->select([
            'table' => 'destination_photos',
            'column' => '*',
            'where' => 'destination_id =:d_id',
            'data' =>['d_id'=>$id]
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
                'destination_id' => $data["d_id"],
            ]
        ));
        return $result;
    }

    function getFeedback($id){
        $result = $this->db->select([
            'table' => 'feedback',
            'column' => '*',
            'where' => 'status =:status AND destination_id =:destination_id',
            'data' => ['status'=>1,'destination_id'=>$id]
            
        ]);
        return $result;
    }

    function popularPackage(){
        $result = $this->db->select([
            'table' => 'packages',
            'column' => '*',
            'limit' => 3,
            
        ]);
        return $result;
    }

    function filtter($data){
        
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' =>'categories =:categories',
            'data' => ['categories' => $data["cat"]],
            
        ]);
        return $result;
    }

    function filtercity($data){
        
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' =>'city =:city',
            'data' => ['city' => $data["cat"]],
            
        ]);
        return $result;
    }

    function filterprice($data){
        
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' =>'price >=:min_price AND price<=:max_price',
            'data' => ['min_price' => $data["min"],'max_price'=>$data["max"]],
            
        ]);
        return $result;
    }

    function simillar_destination($id){
        $cat = $this->db->select([
            'table' =>'destinations',
            'column' =>'categories',
            'where' => 'id =:id',
            'data' => ['id'=>$id]

        ]);
        foreach($cat as $key => $value){
            $cate = $value["categories"];
        }
        $result = $this->db->select([
            'table' =>'destinations',
            'column' =>'*',
            'where' =>'id <>:id AND categories =:categories',
            'data' =>['categories' => $cate,'id' => $id],
            'limit' => 3,
        ]);

        return $result;
    }




}
