<?php

namespace ThinApp\Controller;

use ThinFramework\Component\Controller\ThinController;


class StudentController extends ThinController
{

    public function __construct()
    {
        $this->setResponse('Student page');
    }


    public function indexAction($studentId)
    {
        $output = ' - indexAction called'
            . '<br>' . 'Parameters:'
            . '<br>' . ' - student_id: ' . $studentId;

        $this->response->appendContent($output);
        $this->response->send();
    }


    public function scoreAction($studentId, $scoreId)
    {
        $output = ' - indexAction called'
            . '<br>' . 'Parameters:'
            . '<br>' . ' - student_id: ' . $studentId
            . '<br>' . ' - score_id: '   . $scoreId;

        $this->response->appendContent($output);
        $this->response->send();
    }

}
