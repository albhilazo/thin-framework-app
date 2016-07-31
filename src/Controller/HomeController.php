<?php

namespace ThinApp\Controller;


class HomeController
{

    public function __construct()
    {
        echo "Home page";
    }


    public function indexAction()
    {
        echo " - indexAction called";
    }

}
