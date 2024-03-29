<?php
// import('./libs/custom/User_Login_Model');
class Attractions_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function selectAll(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            
        ]);
        return $result;
    }

    function selectFive(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'limit' => 5
            
        ]);
        return $result;
    }
    function count(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => 'COUNT(id)',
            
        ]);
        return $result;
    }

    function getArticals(){
        $result = $this->db->select([
            'table' => 'articals',
            'column' => '*',
            'order' => 'id DESC',
            'limit' => 3
            
        ]);
        return $result;
    }

    function selectOne($data){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' => 'id =:id',
            'data' => ['id' => $data]
            
        ]);
        return $result;
    }

    function getCategory(){
        $result = $this->db->select([
            'table' => 'categories',
            'column' => '*',
            


            
            
        ]);
        return $result;
    }

    function getPrice($data){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => 'DISTINCT(price)',
            'where' => 'categories_id =:categories_id ORDER BY price DESC',
            'data' =>['categories_id'=>$data],
            // 'order' => 'price DESC'
            
            
        ]);
        return $result;
    }


    function getCity($data){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => 'DISTINCT(city)',
            'where' => 'categories_id =:categories_id',
            'data' =>['categories_id'=>$data]
            
            
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
            'where' => 'status =:status AND destination_id =:destination_id ORDER BY id DESC LIMIT 2',
            'data' => ['status'=>1,'destination_id'=>$id],
            
            
        ]);
        return $result;
    }

    function getFeedbackCount($id){
        $result = $this->db->select([
            'table' => 'feedback',
            'column' => 'COUNT(id)',
            'where' => 'status =:status AND destination_id =:destination_id',
            'data' => ['status'=>1,'destination_id'=>$id]
            
        ]);
        return $result;
    }

    function popularDestinations(){
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' =>'status =:status',
            'data' =>['status' => 1]
            
        ]);
        return $result;
    }

    function filtter($data){
        
        $result = $this->db->select([
            'table' => 'destinations',
            'column' => '*',
            'where' =>'categories_id =:categories_id AND city =:city AND price <=:price',
            'data' => [
                'categories_id' => $data["categories_id"],
                'city' => $data["city"],
                'price' => $data["price"]
            ]
            
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
        $result = $this->db->select([
            'table' =>'destinations',
            'column' =>'*',
            'where' => 'categories_id =(select categories_id from destinations where id =:id)',
            'data' => ['id'=>$id],
            'limit' => 2

        ]);
        

        return $result;
    }

    function getFacilities($id){
        $result = $this->db->select([
            'table'=>'facilities',
            'column'=>'*',
            'where'=>'id IN(select facilities_id from facilities_in_destinations where destination_id =:destination_id)',
            'data'=>['destination_id'=>$id]
        ]);
        return $result;
    }




}
