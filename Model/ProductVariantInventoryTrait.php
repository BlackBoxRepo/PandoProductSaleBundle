<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductVariantInventoryTrait
{
    use IdTrait;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @var ProductVariantInterface
     *
     * @ORM\OneToOne(targetEntity="ProductVariant", inversedBy="inventory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;


    /**
     * {@inheritdoc}
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductVariant()
    {
        return $this->productVariant;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setProductVariant(ProductVariantInterface $productVariant)
    {
        $this->productVariant = $productVariant;
        
        return $this;
    }
}
