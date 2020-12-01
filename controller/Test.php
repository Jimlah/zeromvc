<?php
use Controller;

class Test extends Controller
{
    public function __construct()
    {
        echo 'Class created';
        
    }

    public function hello_get(...$args)
    {
        echo "Hello, World! From Get";
    }

    public function hello_post(...$args)
    {
        echo "Hello, World! From post";
    }
}

