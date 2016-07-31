<?php

namespace ThinApp\Controller;


class StudentController
{

    public function __construct()
    {
        echo "Student page";
    }


    public function indexAction($studentId)
    {
        echo " - indexAction called"
            . "<br>" . "Parameters:"
            . "<br>" . " - student_id: " . $studentId;
    }


    public function scoreAction($studentId, $scoreId)
    {
        echo " - indexAction called"
            . "<br>" . "Parameters:"
            . "<br>" . " - student_id: " . $studentId
            . "<br>" . " - score_id: "   . $scoreId;
    }

}
