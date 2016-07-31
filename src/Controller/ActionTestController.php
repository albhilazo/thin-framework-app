<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;
use ThinFramework\Component\Container\Container;
use ThinFramework\Component\Templating\TemplatingAdapter;
use ThinFramework\Component\Request\Request;


class ActionTestController extends ThinController
{

    const TEMPLATE = 'example.tpl';


    public function __construct(Container $container, TemplatingAdapter $templating, Request $request)
    {
        parent::__construct($container, $templating, $request);

        $this->template->setLayout(self::TEMPLATE);
        $this->template->setParam('head_title', 'ActionTest page');
    }


    public function testMethod()
    {
        $this->template->setParam('body_content', 'testMethod called');
        $this->sendResponse();
    }

}
