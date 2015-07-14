<?php

namespace Ef\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EfCommonBundle:Default:index.html.twig');
    }
}
