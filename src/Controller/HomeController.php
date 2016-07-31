<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;
use ThinFramework\Component\Templating\TemplatingAdapter;
use ThinFramework\Component\Request\Request;


class HomeController extends ThinController
{

    const TEMPLATE = 'example.tpl';


    public function __construct(TemplatingAdapter $templating, Request $request)
    {
        parent::__construct($templating, $request);

        $this->template->setLayout(self::TEMPLATE);
        $this->template->setParam('head_title', 'Home page');
    }


    public function indexAction()
    {
        $this->template->setParam('body_content', 'indexAction called');
        $this->sendResponse();
    }

}
