<?php

class Bootstrap
{

    private $_url = null;
    private $_conroller = null;
    private $_controllerPath = 'controllers/'; //Always include forword slash (/) to the end
    private $_modelPath = 'models/'; //Always include forword slash (/) to the end
    private $_errorFile = 'error.php';
    private $_defaultFile = 'index.php';

    /**
     * Initialize Bootstrap
     * @return boolean | string
     */
    public function init()
    {

        //Set the private $_url
        $this->_getURL();

        //Load Default Controller if URL is Empty and Terminate other functions
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return FALSE;
        } else {
            // Is controller set in url, load that Controller
            $this->_loadExistingController();
            return FALSE;
        }
    }

    /**
     * 
     * @param string $path controller path
     */
    public function setControllerPath($path)
    {
        $this->_controllerPath = trim($path, '/') . '/';
    }

    /**
     * 
     * @param string $path model path
     */
    public function setModelPath($path)
    {
        $this->_modelPath = trim($path, '/') . '/';
    }

    /**
     * 
     * @param string $file error file name
     */
    public function setErrorFile($file)
    {
        $this->_errorFile = $file;
    }

    /**
     * 
     * @param string $file default file name
     */
    public function setDefaultFile($file)
    {
        $this->_defaultFile = $file;
    }

    /**
     * set url from $_GET['url']
     */
    private function _getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);

        $this->_url = explode('/', str_replace('-', '_', $url));
    }

    /**
     * This load for there is no GET parameter passed
     */
    private function _loadDefaultController()
    {
        require $this->_controllerPath . $this->_defaultFile;
        $this->_controller = new Index('index');
        $this->_controller->load_model('index', $this->_modelPath);
        $this->_controller->index();
    }

    /*     * ww
     * This load for if there is a GET parameters passed
     */

    private function _loadExistingController()
    {
        $file = $this->_controllerPath . $this->_url[0] . '.php';
        if (file_exists($file)) {
            require $file;
            $this->_controller = new $this->_url[0]();
            //I have change this for User_Model====================================================
            //model obj create at Base Controller obj construct
            //            $this->_controller->load_model($this->_url[0], $this->_modelPath); <====changed
            $this->_controller->load_model($this->_url[0], $this->_modelPath);
            //Call that controller method
            $this->_callControllerMethod();
        } else {
            //            throw new Exception('The File: ' . $file . ' does not exists.');
            return $this->_error(['error' => 'The File: ' . $file . ' does not exists.']);
        }
    }

    /**
     * If a method is passed in the GET url parameter
     */
    private function _callControllerMethod()
    {
        //$this->_url[0]->controller, $this->_url[1]->method, $this->_url[2]->param1, $this->_url[3]->param2, $this->_url[4]->param3, $this->_url[5]->param4
        //Get count of $this->_url array elements
        $count = count($this->_url);

        //If method does not exists in controller then load error page
        if ($count > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                return $this->_error(['error' => 'method does not exists in controller', 'message' => 'check controller']);
            }
        }

        switch ($count) {
            case 1:
                $this->_controller->index();
                break;
            case 2:
                //Controller->Method()
                $this->_controller->{$this->_url[1]}();
                break;
            case 3:
                //Controller->Method(param1)
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            case 4:
                //Controller->Method(param1, param2)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            case 5:
                //Controller->Method(param1, param2, param3)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            case 6:
                //Controller->Method(param1, param2, param3)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]);
                break;
            default:
                return $this->_error(['error' => 'method exists in controller but param error', 'message' => 'check controller param']);
                break;
        }
    }

    /**
     * Display error page, if page does not exists
     * @return boolean
     */
    private function _error($error = NULL)
    {
        if (DEVELOPMENT_MODE) {
            echo '<title>ERROR</title><pre>';
            print_r($error);
            $e = new Exception($error['error']);

            print_r($e->getTraceAsString());

            // throw new Exception($error);
        } else {
            require 'views/error/index.php';
            //        require $this->_controllerPath . $this->_errorFile;
            //        $controller = new Error();
            //        $controller->index();
            //        require URL_Admin . 'views/error/index.php';
        }

        return false;
    }
}
