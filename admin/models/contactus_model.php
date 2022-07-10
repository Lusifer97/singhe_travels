<?php
// import('./libs/custom/User_Login_Model');
class Contactus_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

     

 

    function inqueries($data){
        $result = $this->db->insert(array(
            'table' => 'inquries',
            'data' => [
                'name' => $data["name"],
                'email' => $data["email"],
                'date' => date('d-m-Y'),
                'inqury' => $data["inqurey"],
            ]
        ));
        return $result;
    }

 


}
