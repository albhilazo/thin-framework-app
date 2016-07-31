<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;
use ThinFramework\Component\Templating\TemplatingAdapter;


class NotFound404Controller extends ThinController
{

    const TEMPLATE = 'example.tpl';


    public function __construct(TemplatingAdapter $templating)
    {
        parent::__construct($templating);

        $this->template->setLayout(self::TEMPLATE);
        $this->template->setParam('head_title', 'Error 404');
    }


    public function indexAction()
    {
        $this->template->setParam('body_content', 'Not found');
        $this->sendResponse();
    }

}
