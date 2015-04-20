<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

trait CurrencyTrait
{
    use TypeTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true, length=3)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", unique=true, length=3)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", length=1)
     */
    private $precision;


    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * {@inheritdoc}
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;

        return $this;
    }
}
