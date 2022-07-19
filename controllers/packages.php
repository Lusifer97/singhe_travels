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
        $this->view->getCategory = $this->model->getCategory();
        $this->view->popularPackages = $this->model->popularPackages();
        $this->view->count = $this->model->count();
        $this->view->data = $this->model->selectSix();
        $this->view->title = "Best Tour Collections";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('packages/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    function details($id){
       $id = base64_decode($id);
         
         
       $this->view->data = $this->model->selectOne($id);
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

    function selectAll(){
        echo json_encode($this->model->selectAll());
    }

    function selectSix(){
        echo json_encode($this->model->selectSix());
    }

    function filtter()
    {
        echo json_encode($this->model->filtter($_POST));
    }

    // SAMPLES


}
