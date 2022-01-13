<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ABCController extends AbstractController
{
    public function testFunction()
    {
        dump(123);die;
    }
}