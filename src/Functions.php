<?php

use JetBrains\PhpStorm\NoReturn;

class Functions
{

    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }

    function generate_password($length): string
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' .
            '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';

        $str = '';
        $max = strlen($chars) - 1;

        for ($i = 0; $i < $length; $i++)
            $str .= $chars[random_int(0, $max)];

        return $str;
    }

    #[NoReturn] function abort($code = 404): void
    {
        http_response_code($code);

        require "views/$code.php";

        die();
    }
    function routeToController($uri, $routes): void
    {
        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            $this->abort();
        }
    }
    function guidv4($data = null)
    {
        //It generates random uuid
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}