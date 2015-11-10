<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 5/11/15
 * Time: 19:24
 */

namespace RationalBundle\Controller;

use AppBundle\Service\RationalService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class RationalController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('default/form.html.twig', array(
            'base_dir'  =>  realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
    public function sumAction()
    {
        return $this->render('default/form.html.twig');
    }

    public function doSumAction(Request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->ge('num2');
    }
}