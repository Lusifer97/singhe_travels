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

        // $this->load_js(
        //     [

        //         ]
        // );
        // echo Cookie::set('jjjj', 'aaaaaaaa', time() + (86400 * 30), '/');
        //    echo Cookie::unset_cookie('name2','/');
        // var_dump($this->model->getCategory());
        // $this->view->data = $this->model->selectAll();
        $this->view->getCategory = $this->model->getCategory();
        $this->view->count = $this->model->count();
        $this->view->selectFive = $this->model->selectFive();
        $this->view->popularDestinations = $this->model->popularDestinations();
        // $this->view->articals = $this->model->getArticals();
        $this->view->title = "Magical Destinations";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('attractions/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));


    }

    function details($id)
    {
        // $id = base64_decode($id);
        $this->view->data = $this->model->selectOne($id);
        $this->view->plan = $this->model->getPlan($id);
        $this->view->photos = $this->model->getPhotos($id);
        $this->view->getFeedback = $this->model->getFeedback($id);
        $this->view->count = $this->model->getFeedbackCount($id);
        $this->view->popularDestinations = $this->model->simillar_destination($id);
        $this->view->facilities = $this->model->getFacilities($id);
        $this->view->pickupFee = $this->model->pickupFee($id);
        $this->view->title = "Attraction Details";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('attractions/details');
        $this->view->render('footer');
    }

    function selectCity($data)
    {
        // var_dump($data);
        echo json_encode($this->model->getCity($data));
    }
    function getPrice($data)
    {
        echo json_encode($this->model->getPrice($data));
    }
    function filtter()
    {
        echo json_encode($this->model->filtter($_POST));
    }

    function feedback(){
        if($this->model->feedback($_POST)){
            echo json_encode(['status'=>true]);
        }else{
            echo json_encode(['status'=>false]);
        }
    }

    function selectAll(){
        echo json_encode($this->model->selectAll());
    }

    function selectFive(){
        echo json_encode($this->model->selectFive());
    }

    function location($d_id,$fee){
        echo json_encode($this->model->getLocation($d_id,$fee));
    }

    // SAMPLES


}
