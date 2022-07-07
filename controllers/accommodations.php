<?php

class Accommodations extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        
        $this->view->title = "Accomadations";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('accommodations/index');
        $this->view->render('footer');
   

        
    }



}
