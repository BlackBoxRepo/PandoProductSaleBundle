<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductVariantInventoryTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\OneToOne(targetEntity="ProductVariant", inversedBy="inventory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;
}
