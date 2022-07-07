<?php
// import('./libs/Controller');

class Contactus extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
         
        // $this->load_js(
        //     [
                
        //         ]
        // );
        // echo Cookie::set('jjjj', 'aaaaaaaa', time() + (86400 * 30), '/');
        //    echo Cookie::unset_cookie('name2','/');
        // var_dump($_COOKIE);
        $this->view->title = "Get in touch";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('contactus/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    function inqueries(){
        if($this->model->inqueries($_POST)){
            echo json_encode(['status'=>true]);
            $this->mail->set_content('Contact us','template_contact',['name'=>$_POST["name"],'subject'=>$_POST["inqurey"]]);
            $this->mail->set_address($_POST["email"]);
            $this->mail->send();
        }else{
            echo json_encode(['status'=>false]);
        }
    }

    // SAMPLES


}
