<?php
// import('./libs/Controller');

class feedbacks extends Controller
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
        $this->view->render('feedbacks/index');
        $this->view->render('footer');
        
    }
     
    // SAMPLES


}
