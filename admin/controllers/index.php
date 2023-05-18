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
        $this->view->title = "Admin";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('index/index');
        $this->view->render('footer');
        
    }
     
    // SAMPLES


}
