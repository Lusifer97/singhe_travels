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
         
        
        $this->view->render('header');
        $this->view->render('attractions/index');
        $this->view->render('footer');
       

        
    }
   


}
