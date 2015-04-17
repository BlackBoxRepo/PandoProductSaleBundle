<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait RegionZoneTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="availabilityRegionZones")
     */
    private $availabilityProducts;
}
