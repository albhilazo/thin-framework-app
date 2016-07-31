<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;
use ThinFramework\Component\Templating\TemplatingAdapter;


class ActionTestController extends ThinController
{

    const TEMPLATE = 'example.tpl';


    public function __construct(TemplatingAdapter $templating)
    {
        parent::__construct($templating);

        $this->template->setLayout(self::TEMPLATE);
        $this->template->setParam('head_title', 'ActionTest page');
    }


    public function testMethod()
    {
        $this->template->setParam('body_content', 'testMethod called');
        $this->sendResponse();
    }

}
