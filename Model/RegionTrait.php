<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait RegionTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="availabilityRegions")
     */
    private $availabilityProducts;
}
