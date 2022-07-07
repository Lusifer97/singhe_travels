<?php
// import('./libs/Controller');

class Packages extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
//
        $this->view->data = $this->model->selectAll();
//        $this->view->getStatus = $this->model->getStatus();
        $this->view->title = "Best Tour Collections";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('packages/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    function details(){
//        $id = base64_decode($id);
         
         
//        $this->view->data = $this->model->selectOne($id);
//        $this->view->destinations = $this->model->getTours($id);
//        $this->view->facilities = $this->model->getfacilities($id);
//        $this->view->plan = $this->model->getPlan($id);
//        $this->view->photos = $this->model->getPhotos($id);
//        $this->view->simillarPackages = $this->model->simillarPackages($id);
//        // $this->view->popularPackage = $this->model->popularPackage();
//        $this->view->feedback = $this->model->getFeedback($id);
        $this->view->title = "Package Details";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('packages/details');
        $this->view->render('footer');
    }

    function feedbacks(){
        
        if($this->model->feedback($_POST)){
            echo json_encode(['status'=>true]);
        }else{
            echo json_encode(['status'=>false]); 
        }
            
        
    }

    // SAMPLES


}
