<?php

class Cookie
{
    // Path is important when set and unset a cookie
    // Is path empty current path set for cookie - these cookies can unset only in this path
    // $name, $value, $expire needed
    // after set cookie same request canot access cookie set function set for php current script $_COOKIE[$name] = $value;

    function __construct()
    {
    }

    static function set($name, $value = '', $expire = 0, $path = '', $domain = '', $secure = false, $httponly = false)
    {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
        $_COOKIE[$name] = $value;
    }

    static function set_encoded($name, $value = '', $expire = 0, $path = '', $domain = '', $secure = false, $httponly = false)
    {
        setrawcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
        $_COOKIE[$name] = $value;

    }

    static function get($key)
    {
        if (isset($_COOKIE[$key])) {
            return $_COOKIE[$key];
        } else {
            return FALSE;
        }
    }

    static function unset_cookie($key, $path = '')
    {
        if (isset($_COOKIE[$key])) {
            unset($_COOKIE[$key]);
            setcookie($key, null, -1, $path);
            return true;
        } else {
            return false;
        }
    }

    static function isset_cookie($key)
    {
        if (isset($_COOKIE[$key])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
