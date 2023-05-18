<?php
// import('./libs/Controller');

class Index extends Controller
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
        $this->view->topDestinations = $this->model->popularDestinations();
        $this->view->topPackages = $this->model->topPackages();
        $this->view->discounts = $this->model->discounts();
        $this->view->slider = $this->model->slider();
        // $this->view->allHotels = $this->model->allHotels();
        $this->view->feedbacks = $this->model->feedbacks();
        // $this->view->blog = $this->model->blog();
        // $this->view->count = $this->model->destinationCount();
        // Session::unset_session("user");
        $this->view->title = "Home";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('index/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }
 

    // SAMPLES


}
