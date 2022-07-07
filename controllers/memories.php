<?php
// import('./libs/Controller');

class Memories extends Controller
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
        // $this->view->albums = $this->model->selectAll();
        $this->view->title = "Memory Collection";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('memories/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));


    }

    function images()
    {   
        
        // $this->view->albums_details = $this->model->getOne($id);
        // $this->view->photos = $this->model->getPhotos($id);
        $this->view->title = "Image Collection";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('memories/images');
        $this->view->render('footer');
    }

    // SAMPLES


}
