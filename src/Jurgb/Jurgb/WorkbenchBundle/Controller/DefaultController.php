<?php

namespace Jurgb\WorkbenchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WorkBenchBundle:Default:index.html.twig');
    }
}
