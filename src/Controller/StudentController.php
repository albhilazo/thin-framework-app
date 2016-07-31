<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;
use ThinFramework\Component\Templating\TemplatingAdapter;


class StudentController extends ThinController
{

    const TEMPLATE = 'example.tpl';


    public function __construct(TemplatingAdapter $templating)
    {
        parent::__construct($templating);

        $this->template->setLayout(self::TEMPLATE);
        $this->template->setParam('head_title', 'Student page');
    }


    public function indexAction($studentId)
    {
        $output = 'indexAction called'
            . '<br>' . 'Parameters:'
            . '<br>' . ' - student_id: ' . $studentId;

        $this->template->setParam('body_content', $output);
        $this->sendResponse();
    }


    public function scoreAction($studentId, $scoreId)
    {
        $output = 'scoreAction called'
            . '<br>' . 'Parameters:'
            . '<br>' . ' - student_id: ' . $studentId
            . '<br>' . ' - score_id: '   . $scoreId;

        $this->template->setParam('body_content', $output);
        $this->sendResponse();
    }

}
