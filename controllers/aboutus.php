<?php
// import('./libs/Controller');

class Aboutus extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
         
     
        $this->view->title = "Who we are";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('aboutus/index');
        $this->view->render('footer');
       

        
    }



}
