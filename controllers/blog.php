<?php
// import('./libs/Controller');

class Blog extends Controller
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
        // $this->view->data = $this->model->selectAll();
        $this->view->title = "Travel Articals";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('blog/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    function details(){
        // $id = base64_decode($id);
        // $this->view->data = $this->model->getOne($id);
        $this->view->title = "details";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('blog/details');
        $this->view->render('footer'); 
    }

    // SAMPLES


}
