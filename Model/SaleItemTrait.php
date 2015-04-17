<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait SaleItemTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="integer", options={"default":1,"unsigned":true})
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="Sale", inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sale;

    /**
     * @ORM\ManyToOne(targetEntity="ProductVariant", inversedBy="saleItems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;
}
