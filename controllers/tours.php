<?php
// import('./libs/Controller');

class Tours extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $this->load_css(
            [
                PUBLIC_URL."plugins/revslider/public/assets/css/settings.css",
                PUBLIC_URL."plugins/tourmaster/plugins/elegant-font/style.css",
                PUBLIC_URL."plugins/tourmaster/tourmaster.css",
                PUBLIC_URL."plugins/goodlayers-core/plugins/combine/style.css",
                PUBLIC_URL."plugins/goodlayers-core/include/css/page-builder.css",
                PUBLIC_URL."css/tourmaster-style-custom.css",
                PUBLIC_URL."css/style-core.css",
                PUBLIC_URL."css/traveltour-style-custom.css"
                ]
        );
        // $this->load_js(
        //     [
                
        //         ]
        // );
        // echo Cookie::set('jjjj', 'aaaaaaaa', time() + (86400 * 30), '/');
        //    echo Cookie::unset_cookie('name2','/');
        // var_dump($_COOKIE);
        $this->view->data = $this->model->selectAll();
        $this->view->getStatus = $this->model->getStatus();
        $this->view->title = "Best Tour Collections";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('tours/new');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    function details($id){
        $id = base64_decode($id);
         
         
        $this->view->data = $this->model->selectOne($id);
        $this->view->destinations = $this->model->getTours($id);
        $this->view->facilities = $this->model->getfacilities($id);
        $this->view->plan = $this->model->getPlan($id);
        $this->view->photos = $this->model->getPhotos($id);
        $this->view->simillarPackages = $this->model->simillarPackages($id);
        // $this->view->popularPackage = $this->model->popularPackage();
        $this->view->feedback = $this->model->getFeedback($id);
        // $this->view->title = "Tour Details";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('tours/details');
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
