<?php

namespace Ef\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuarioController extends Controller
{
    public function registroAction()
    {
        return $this->render('EfUserBundle:Usuario:registro.html.twig');
    }
}
