<?php
// import('./libs/Controller');

class Hotels extends Controller
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
        $this->view->title = "Accomadation Booking";
        $this->view->render('header');
        $this->view->render('navigation');
        $this->view->render('hotels/index');
        $this->view->render('footer');
        // var_dump(LOGIN_CONFIG);
        //   var_dump( Hash::create('whirlpool', '1234', SALT));

        
    }

    // SAMPLES


}
