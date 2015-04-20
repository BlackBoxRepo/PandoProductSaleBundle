<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;

interface ProductVariantInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * @return ProductVariantInventoryInterface
     */
    public function getInventory();

    /**
     * @param ProductVariantInventoryInterface $inventory
     * @return $this
     */
    public function setInventory(ProductVariantInventoryInterface $inventory);

    /**
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * @param ProductInterface $product
     * @return $this
     */
    public function setProduct(ProductInterface $product);
}
