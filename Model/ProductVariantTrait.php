<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductVariantTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    private $sku;

    /**
     * @var ProductVariantInventoryInterface
     *
     * @ORM\OneToOne(targetEntity="ProductVariantInventory", mappedBy="productVariant")
     */
    private $inventory;

    /**
     * @var ProductInterface
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="variants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;
    
    
    /**
     * {@inheritdoc}
     */
    public function getSku()
    {
        return $this->sku;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getInventory()
    {
        return $this->inventory;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setInventory(ProductVariantInventoryInterface $inventory)
    {
        $this->inventory = $inventory;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setProduct(ProductInterface $product)
    {
        $this->product = $product;
        
        return $this;
    }
}
