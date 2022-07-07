    <?php
    /*
    10.4.13-MariaDB
    Apache/2.4.43 (Win64) OpenSSL/1.1.1g 
    PHP/7.2.31 
    */

    // root URL
    $host = $_SERVER['HTTP_HOST'];
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    define('HOST', $host);
    define('DEVELOPMENT_MODE', 1);

    define('URL', $protocol . $host . '/PHP-MVC-main/base/');
    define('PUBLIC_URL', URL . 'public/');
    
    //mail
    define('MHOST', "mail.singhetravels.com");
    define('MUSERNAME', 'info@singhetravels.com');
    define('MPASSWORD', 'LZ4cm?V@6}b(');
    define('MTITLE', "Singhe Travels - Best Travel Partner");
    define('MPORT', 587);

    // Database
    define('DB_TYPE', "mysql");
    define('DB_NAME', "travel");
    define('DB_USER', "root");
    define('DB_PASS', "");
    define('DB_HOST', "localhost");

    


    // define('AUTH_PREFIX', 'villa');

    // define('LOGIN_CONFIG', array(
    //     'AUTH_PREFIX' => 'villa',
    //     'MAX_TRY' => 3,
    //     'HASH_ALGORITHM' => 'whirlpool',
    //     'HASH_SALT' => 'This_makes_texting_a_quick_and_easy_way_to_communicate_with_friends',
    //     'ENCRYPT_SALT' => 'This_makes_texting_a_quick_and_easy_way_to_communicate_with_friends',
    //     'TABLE' => 'user',
    //     'USERNAME' => array(
    //         'FIELD' => 'username',
    //         'COLUMN' => 'username'
    //     ),
    //     'PASSWORD' => array(
    //         'FIELD' => 'password',
    //         'COLUMN' => 'password'
    //     ),
    //     'ERROR_MESSAGE' => array(
    //         'DATA_NULL' => 'invalid username or password',
    //         'TRY_EXCEED' => 'invalid username or password tr',
    //         'MISMATCH' => 'invalid username or password',
    //         'TOKEN_SET' => 'Somethin Whent Wrong.',
    //         'DEACTIVATE' => 'Account Deactivated'
    //     )
    // ));

    // define('NO_ANY_PERMISSION_MODULE', 'No Permissions for this Module');
    // define('NO_PERMISSION_MODULE_TASK', 'No Permissions for this Task');
