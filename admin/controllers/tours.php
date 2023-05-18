<?php
// import('./libs/Controller');

class tours extends Controller
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
        $this->view->render('tours/index');
        $this->view->render('footer');
        
    }
     
    // SAMPLES


}
