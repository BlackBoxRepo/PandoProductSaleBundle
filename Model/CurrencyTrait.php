<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

trait CurrencyTrait
{
    use TypeTrait;

    /**
     * @ORM\Column(type="string", unique=true, length=3)
     */
    private $code;

    /**
     * @ORM\Column(type="integer", unique=true, length=3)
     */
    private $number;

    /**
     * @ORM\Column(type="integer", length=1)
     */
    private $precision;
}
