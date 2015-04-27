<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait SaleItemTrait
{
    use IdTrait;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", options={"default":1,"unsigned":true})
     */
    private $quantity;

    /**
     * @var SaleInterface
     *
     * @ORM\ManyToOne(targetEntity="Sale", inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sale;

    /**
     * @var ProductVariantInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductVariant", inversedBy="saleItems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $productVariant;


    /**
     * {@inheritdoc}
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

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
