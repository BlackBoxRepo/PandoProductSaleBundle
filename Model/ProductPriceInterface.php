<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;

interface ProductPriceInterface extends IdInterface
{
    /**
     * @return float
     */
    public function getValue();

    /**
     * @param float $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * @param ProductInterface $product
     * @return $this
     */
    public function setProduct(ProductInterface $product);

    /**
     * @return ProductPriceTypeInterface
     */
    public function getType();

    /**
     * @param ProductPriceTypeInterface $type
     * @return $this
     */
    public function setType(ProductPriceTypeInterface $type);
}
