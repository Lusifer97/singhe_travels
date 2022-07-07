<?php
// import('./libs/custom/User_Login_Model');
class User_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

     

 

    function register($data,$no){
        $result = $this->db->insert(array(
            'table' => 'user',
            'data' => [
                'name' => $data["name"],
                'email' => $data["email"],
                'password' => $data["psw"],
                'c_code' => $no,
            ]
        ));
        return $result;
    }

    function checkUser($data){
        $result = $this->db->select([
            'table' => 'user',
            'column' => '*',
            'where' => 'email =:email',
            'data' => ['email' => $data]
        ]);
        return $result;
    }

    function activateUser($data){
        $id = $this->db->select([
            'table' => 'user',
            'column' => 'id',
            'where' => 'c_code =:c_code',
            'data' => ['c_code' =>$data["c_code"]]
        ]);
        $result = $this->db->update([
            'table' => 'user',
            'set' =>[
                'status' => 1
            ],
            'where' => 'id =:id',
            'data' => ['id'=>$id[0]["id"]]
        ]);
        return $result;
    }

    function login($data){
        $result = $this->db->select([
            'table' => 'user',
            'column' => '*',
            'where' => 'email =:email AND password =:password',
            'data' =>['email'=>$data["email"],'password'=>$data["psw"]]
        ]);
        return $result;
    }
 


}
