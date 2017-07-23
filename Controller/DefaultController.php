<?php

namespace Kit\Bundle\OssBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KitOssBundle:Default:index.html.twig');
    }
}
