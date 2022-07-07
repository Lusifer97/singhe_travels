<?php
// import('./libs/Controller');

class Checkout extends Controller
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
        $this->view->title = "Checkout";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('checkout/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    // SAMPLES


}
