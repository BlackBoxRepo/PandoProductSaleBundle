<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface AccountInterface extends \BlackBoxCode\Pando\AccountBundle\Model\AccountInterface
{
    /**
     * @return ArrayCollection<SaleInterface>
     */
    public function getSales();

    /**
     * @param SaleInterface $sale
     * @return $this
     */
    public function addSale(SaleInterface $sale);

    /**
     * @param SaleInterface $sale
     */
    public function removeSale(SaleInterface $sale);
}
