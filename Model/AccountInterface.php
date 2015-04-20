<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface AccountInterface extends \BlackBoxCode\Pando\Bundle\AccountBundle\Model\AccountInterface
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
