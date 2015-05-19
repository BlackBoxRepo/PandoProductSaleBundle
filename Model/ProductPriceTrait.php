<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductPriceTrait
{
    use IdTrait;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    private $value;

    /**
     * @var ProductInterface
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="prices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @var ProductPriceTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="ProductPriceType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;


    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($value)
    {
        $this->value = $value;

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
    public function setType(ProductPriceTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }
}
