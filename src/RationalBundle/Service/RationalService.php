<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 4/11/15
 * Time: 16:13
 */

namespace RationalBundle\Service;


use RationalBundle\RationalBundle;
use Symfony\Component\Config\Definition\Exception\Exception;

class RationalService
{
    /**
     * @var int
     */
    private $num;

    /**
     * @var int
     */
    private $den;

    /**
     * RationalService constructor.
     * @param int $num
     * @param int $den
     */
    public function __construct($num=null, $den=null)
    {
        $this->num = $num;
        $this->den = $den;
    }

    /**
     * @return int
     */
    public function getDen()
    {
        return $this->den;
    }

    /**
     * @param int $den
     * @throws \Exception
     */
    public function setDen($den)
    {
        if($den!=0){
            $this->den = $den;
        }
        else{
            throw new \Exception('El divisor no puede ser 0');
        }
    }

    /**
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    public function multiplicar(Rational $r){
        $num=$this->getNum()*$r->getNum();
        $den=$this->getDen()*$r->getDen();

        $nuevo=new Rational();
        $nuevo->setNum($this->getNum())*$r->getNum();
        $nuevo->setDen($this->getDen()*$r->getDen());
    }

    public function dividir(Rational $r){
        $num=$this->getNum()/$r->getNum();
        $den=$this->getDen()/$r->getDen();

        $nuevo=new Rational();
        $nuevo->setNum($this->getNum())/$r->getNum();
        $nuevo->setDen($this->getDen()/$r->getDen());
    }
}