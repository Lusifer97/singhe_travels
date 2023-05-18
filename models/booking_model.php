<?php
// import('./libs/custom/User_Login_Model');
class Booking_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function checkout($data){
        $result = $this->db->insert_and_return_last_id([
            'table'=>'oders',
            'data' => [
                'user_id' => Session::get("user_id"),
                'peoples' =>$data["people1"],
                'd_id' => $data["d_id"],
                'c_in' => $data["cin"],
                'c_out' => $data["cout"],
                'pickup_location' => $data["location"],
                'total' =>$data["total"]

            ]
        ]);
        return $result;
    }

    function getOne($id)
    {
        $result = $this->db->select([
            'table' => 'oders',
            'column' => '*',
            'where' => 'id =:id',
            'data' =>['id'=>$id]

        ]);
        return $result;
    }

    

}