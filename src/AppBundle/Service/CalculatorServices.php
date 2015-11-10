<?php
//-----Esta Clase es la clase Modelo
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 24/10/15
 * Time: 16:49
 */

namespace AppBundle\Service;

class CalculatorServices
{
    private $num1;
    private $num2;
    private $result;

    /**
     * @return mixed
     */
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * @param mixed $num1
     */
    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }

    /**
     * @return mixed
     */
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * @param mixed $num2
     */
    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    public function sum()
    {
        //return $this->result = $this->getNum1() + $this->getNum2();
        $this->setResult($this->getNum1() + $this->getNum2());
    }

    public function substract()
    {
        $this->setResult($this->getNum1() - $this->getNum2());
    }

    public function multiply()
    {
        $this->setResult($this->getNum1()*$this->getNum2());
    }

    public function dividir()
    {
        $this->setResult($this->getNum1()/$this->getNum2());
    }
}