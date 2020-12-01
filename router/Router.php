<?php
class Router
{
    static public function getUrl()
    {
        $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

        return $url;
        // if ($url == "/PHP_Rush_MVC/")
        // {
        //     $request->controller = "tasks";
        //     $request->action = "index";
        //     $request->params = [];
        // }
        // else
        // {
        //     $explode_url = explode('/', $url);
        //     $explode_url = array_slice($explode_url, 2);
        //     $request->controller = $explode_url[0];
        //     $request->action = $explode_url[1];
        //     $request->params = array_slice($explode_url, 2);
        // }

    }

    // function getArgumentStart($uri)
    // {
    //     foreach ($uri as $key => $value) {
    //         if ($value == 'index.php') {
    //             if ($key == count($uri) - 1) return -1;
    //             return $key + 1;
    //         }
    //     }
    // }
}
