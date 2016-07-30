<?php

namespace ThinApp\Controller;


class ActionTestController
{
    
    public function __construct()
    {
        echo "ActionTestController loaded";
    }


    public function testMethod()
    {
        echo " - testMethod called";
    }

}
