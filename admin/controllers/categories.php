<?php
// import('./libs/Controller');

class categories extends Controller
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
        $this->view->render('categories/index');
        $this->view->render('footer');
        
    }
     
    // SAMPLES


}
