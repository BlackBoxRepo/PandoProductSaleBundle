<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait AccountTrait
{
    /**
     * @ORM\OneToMany(targetEntity="Sale", mappedBy="account")
     */
    private $sales;
}
