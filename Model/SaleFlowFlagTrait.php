<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait SaleFlowFlagTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="datetime")
     */
    private $addedDate;

    /**
     * @ORM\ManyToOne(targetEntity="Sale", inversedBy="flags")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sale;

    /**
     * @ORM\ManyToOne(targetEntity="SaleFlowFlagType", inversedBy="SaleFlowFlag")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;
}
