<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\TypeInterface;

interface CurrencyInterface extends TypeInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code);

    /**
     * @return integer
     */
    public function getNumber();

    /**
     * @param integer $number
     * @return $this
     */
    public function setNumber($number);

    /**
     * @return integer
     */
    public function getPrecision();

    /**
     * @param integer $precision
     * @return $this
     */
    public function setPrecision($precision);
}
