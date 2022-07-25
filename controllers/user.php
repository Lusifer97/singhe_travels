<?php
// import('./libs/Controller');

class User extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
         
         
        $this->view->title = "Registration";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('user/register');
        $this->view->render('footer');
        

        
    }
    function register(){
        // var_dump($_POST);
        $no = rand(500,10000);
        Session::set("c_code",$no);
        if($this->model->checkUser($_POST["email"])==false){
            if($this->model->register($_POST,$no)){
                echo json_encode(['status'=>true]);
                $this->mail->set_content('Registration','template_confirm',['name'=>$_POST["name"],'no'=>$no]);
                $this->mail->set_address($_POST["email"]);
                $this->mail->send();
            }else{
                echo json_encode(['status'=>false]);
            }
        }else{
            echo json_encode(['status'=>false]);
        }
        
    }

    // function confirmation()
    // {
         
         
    //     $this->view->title = "Confirmation Code";
    //     $this->view->render('header');
    //     $this->view->render('navigation');
    //     $this->view->render('user/confirmation');
    //     $this->view->render('footer');
        

        
    // }
    function login()
    { 
        $this->view->title = "Login";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('user/login');
        $this->view->render('footer');
        

        
    }

    function logout()
    {   
        Session::unset_session("user");
        $this->view->title = "Home";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('index/index');
        $this->view->render('footer');
         
    }

    function activateUser(){
        if(Session::get("c_code")==$_POST["c_code"]){
            if($this->model->activateUser($_POST)==true){
                echo json_encode(['status'=>true]);
                Session::unset_session("c_code");
            }else{
                echo json_encode(['status'=>false]);
            }
        }else{
            echo json_encode(['status'=>false]);
        }
    }

    function makeSession(){
        $result = $this->model->login($_POST);
        if(!empty($result)){
            foreach($result as $key => $value){
                Session::set("user",$value["name"]);
                echo json_encode(['status'=>true]);
            }
        }else{
            echo json_encode(['status'=>false]);
        }
    }
    // SAMPLES


}
