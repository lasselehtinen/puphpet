<?php

namespace Puphpet\Extension\NodeJsBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data, $extra = '')
    {
        return $this->render('PuphpetExtensionNodeJsBundle:form:NodeJs.html.twig', [
            'nodejs' => $data,
            'extra'  => $extra,
        ]);
    }
}
