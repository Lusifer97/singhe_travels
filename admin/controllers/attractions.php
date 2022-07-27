<?php
// import('./libs/Controller');

class Attractions extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    { 
        $this->view->title = "Home";
         $this->view->render('header');
//         $this->view->render('navigation');
        $this->view->render('attractions/index');
         $this->view->render('footer');
        
    }
    function edit()
    { 
        $this->view->title = "Home";
         $this->view->render('header');
//         $this->view->render('navigation');
        $this->view->render('attractions/edit');
         $this->view->render('footer');
        
    }
    function manage()
    { 
        $this->view->title = "Home";
         $this->view->render('header');
//         $this->view->render('navigation');
        $this->view->render('attractions/manage');
         $this->view->render('footer');
        
    }
     
    // SAMPLES


}
