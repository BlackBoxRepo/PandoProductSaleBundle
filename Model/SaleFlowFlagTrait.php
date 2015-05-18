<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait SaleFlowFlagTrait
{
    use IdTrait;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $addedDate;

    /**
     * @var SaleInterface
     *
     * @ORM\ManyToOne(targetEntity="Sale", inversedBy="flags")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sale;

    /**
     * @var SaleFlowFlagTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="SaleFlowFlagType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;
    
    
    /**
     * {@inheritdoc}
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setAddedDate(\DateTime $addedDate)
    {
        $this->addedDate = $addedDate;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * {@inheritdoc}
     */
    public function setSale(SaleInterface $sale)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType(SaleFlowFlagTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }
}
