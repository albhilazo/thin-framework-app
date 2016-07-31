<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;


class ActionTestController extends ThinController
{
    
    public function __construct()
    {
        $this->setResponse('ActionTestController loaded');
    }


    public function testMethod()
    {
        $this->response->appendContent(' - testMethod called');
        $this->response->send();
    }

}
