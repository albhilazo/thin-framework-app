<?php

namespace ThinApp\Controller;


class NotFound404Controller
{

    public function __construct()
    {
    }


    public function indexAction()
    {
        echo "Error 404 - Not found";
    }

}
