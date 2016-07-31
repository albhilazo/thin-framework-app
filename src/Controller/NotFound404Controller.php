<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;


class NotFound404Controller extends ThinController
{

    public function __construct()
    {
        $this->setResponse('');
    }


    public function indexAction()
    {
        $this->response->appendContent('Error 404 - Not found');
        $this->response->send();
    }

}
