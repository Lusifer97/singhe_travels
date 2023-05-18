<?php
// import('./libs/Controller');

class Booking extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index($id)
    {
         
        // $this->load_js(
        //     [
                
        //         ]
        // );
        // echo Cookie::set('jjjj', 'aaaaaaaa', time() + (86400 * 30), '/');
        //    echo Cookie::unset_cookie('name2','/');s
        // var_dump($_COOKIE);
        $this->view->data = $this->model->getOne($id);
        
        // var_dump($_POST);
        $this->view->title = "Booking";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('booking/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    function checkout(){
        
        $result = $this->model->checkout($_POST);
        if(!empty($result)){
            echo json_encode(['oder_id'=>$result]);
        }
        
    }
 

    // SAMPLES


}
