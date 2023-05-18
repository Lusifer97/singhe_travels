<?php
// import('./libs/Controller');

class accomadations extends Controller
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
        $this->view->render('accomadations/index');
        $this->view->render('footer');
        
    }
     
    // SAMPLES


}
