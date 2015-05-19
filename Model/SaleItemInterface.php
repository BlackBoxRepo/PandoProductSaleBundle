<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;

interface SaleItemInterface extends IdInterface
{
    /**
     * @return integer
     */
    public function getQuantity();

    /**
     * @param $quantity
     * @return $this
     */
    public function setQuantity($quantity);

    /**
     * @return SaleInterface
     */
    public function getSale();

    /**
     * @param SaleInterface $sale
     * @return $this
     */
    public function setSale(SaleInterface $sale);

    /**
     * @return ProductVariantInterface
     */
    public function getProductVariant();

    /**
     * @param ProductVariantInterface $productVariant
     * @return $this
     */
    public function setProductVariant(ProductVariantInterface $productVariant);
}
