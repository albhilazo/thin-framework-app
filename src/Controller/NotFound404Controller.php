<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;
use ThinFramework\Component\Templating\TemplatingAdapter;
use ThinFramework\Component\Request\Request;


class NotFound404Controller extends ThinController
{

    const TEMPLATE = 'example.tpl';


    public function __construct(TemplatingAdapter $templating, Request $request)
    {
        parent::__construct($templating, $request);

        $this->template->setLayout(self::TEMPLATE);
        $this->template->setParam('head_title', 'Error 404');
    }


    public function indexAction()
    {
        $this->template->setParam('body_content', 'Not found');
        $this->sendResponse();
    }

}
