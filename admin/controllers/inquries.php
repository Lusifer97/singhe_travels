<?php
// import('./libs/Controller');

class inquries extends Controller
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
        $this->view->render('inquries/index');
        $this->view->render('footer');
        
    }
     
    // SAMPLES


}
