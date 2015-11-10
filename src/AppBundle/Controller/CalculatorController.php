<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 27/10/15
 * Time: 17:49
 */

namespace AppBundle\Controller;

use AppBundle\Service\CalculatorServices;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CalculatorController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route (path ="/sum/",
     *          name="app_default_sum")
     */
    public function sumAction()
    {
        $action='app_default_doSum';
        return $this->render(':default:form.html.twig', array('action'=>$action));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route (path="/doSum/",
     *          name="app_default_doSum")
     */
    public function doSumAction(Request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $c=$this->container->get('app.service.calculator_services');//quitamos el new y ponemos esto creado en el services.yml

        $c->setNum1($num1);
        $c->setNum2($num2);

        $c->sum();

        $result=$c->getResult();

        return $this->render(
            'default/resultado.html.twig', array('result'=>$result,//valores que pasamos a la vista
            )
        );
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route (path="/substract/",
     *          name="app_default_substract")
     */
    public function substractAction()
    {
        $action='app_default_doSubstract';
        return $this->render(':default:form.html.twig', array('action'=>$action));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route (path="/doSubstract/",
     *          name="app_default_doSubstract")
     */
    public function doSubstractAction(Request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $c=$this->container->get('app.service.calculator_services');//quitamos el new y ponemos esto creado en el services.yml

        $c->setNum1($num1);
        $c->setNum2($num2);

        $c->substract();

        $result=$c->getResult();

        return $this->render(
            'default/resultado.html.twig',
            array(
                'result'=>$result,//valores que pasamos a la vista
            )
        );
    }

    /**
     * @route(path="/multiply/", name="app_default_multiply")
     */
    public function multiply()
    {
        $action='app_default_doMultiply';
        return $this->render(':default:form.html.twig', array('action'=>$action));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/doMultiply", name="app_default_doMultiply")
     */
    public function doMultiply(Request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $c=$this->container->get('app.service.calculator_services');
        $c->setNum1($num1);
        $c->setNum2($num2);
        $c->multiply();
        $result=$c->getResult();

        return $this->render('default/resultado.html.twig', array('result'=>$result));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="/dividir/", name="app_default_dividir")
     */
    public function dividir()
    {
        $action='app_default_doDividir';
        return $this->render(':default:form.html.twig', array('action'=>$action));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @route(path="doDividir", name="app_default_doDividir")
     */
    public function doDividir(Request $request)
    {
        $num1=$request->request->get('num1');
        $num2=$request->request->get('num2');

        $c=$this->container->get('app.service.calculator_services');
        $c->setNum1($num1);
        $c->setNum2($num2);
        $c->dividir();
        $result=$c->getResult();

        return $this->render(':default:resultado.html.twig', array('result'=>$result));
    }
}