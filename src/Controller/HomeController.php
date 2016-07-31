<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;


class HomeController extends ThinController
{

    public function __construct()
    {
        $this->setResponse('Home page');
    }


    public function indexAction()
    {
        $this->response->appendContent(' - indexAction called');
        $this->response->send();
    }

}
