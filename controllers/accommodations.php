<?php

class Accommodations extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->data = $this->model->selectAll();
        $this->view->title = "Accomadations";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('accommodations/index');
        $this->view->render('footer');
    }

    function details() {
        $this->view->title = "Accomadation Details";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('accommodations/details');
        $this->view->render('footer');
    }

    function types($id) {
        $id = base64_decode($id);
        $this->view->data = $this->model->selectOne($id);
        $this->view->title = "Accomadation Types";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('accommodations/types');
        $this->view->render('footer');
    }

}
