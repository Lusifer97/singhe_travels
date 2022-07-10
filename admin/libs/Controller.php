<?php
class Controller
{
    public function __construct()
    {
        $this->view = new View();
        $this->view->css = array();
        $this->view->js = array();
        $this->validation = new Validation();
        $this->hash = new Hash();
        $this->auth = new Auth();
        $this->mail = new Mail(MHOST, MUSERNAME, MPASSWORD, MTITLE, MPORT);
        $this->uploader = new \Verot\Upload\Upload();
    }

    public function load_model($name, $model_path)
    {
        $path = $model_path . $name . '_model.php';
        if (file_exists($path)) {
            require $path;
            $model_name = $name . '_Model';
            $this->model = new $model_name();
        }
    }

    function get_base64($path, $mime)
    {
        try {
            if (!file_exists($path)) {
                return false;
            }
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            
            return $image = $mime . '/' . $type . ';base64,' . base64_encode($data);
        } catch (\Throwable $th) {
            throw $th;
            return false;
        }
    }

     //PRIVATE
      function remove_file($file)
     {
         clearstatcache();
         if (file_exists($file)) {
             return unlink($file);
         }else{
             return false;
         }
     }

     function load_css($css = [])
    {
        foreach ($css as $key => $_css) {
            array_push($this->view->css, $_css);
        }
    }

    function load_js($js = [])
    {
        foreach ($js as $key => $_js) {
            array_push($this->view->js, $_js);
        }
    }
}
