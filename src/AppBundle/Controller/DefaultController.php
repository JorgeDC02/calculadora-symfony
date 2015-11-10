<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function calculatorAction(Request $request)
    {
        return $this->render('default/calculator.html.twig', array(
                'base_dir'  =>  realpath($this->container->getParameter('kernel.root_dir').'/..'),));

    }



    public function helloAction(Request $request)
    {
        return new Response($request->getPathInfo());//muestra el path
        return $this->redirect('http://wikipedia.com');//redireccion de paginas
        return $this->redirectToRoute('app_default_sum');
    }

    /**
     * @param Request $request
     * @route ("/crear",
     *          name="app_default_crear")
     */
    public function crearAction(Request $request)
    {
        $session=$request->getSession();
        $session->set('color','rojo');
        $color=$session->get('color');
    }

    /*public function mostrarColor(Request $request)
    {
        $color=$session->get('color');
    }*/
}
