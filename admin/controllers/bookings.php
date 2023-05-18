<?php
// import('./libs/Controller');

class Bookings extends Controller
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
        $this->view->render('bookings/index');
        $this->view->render('footer');
        
    }
     
    // SAMPLES


}
