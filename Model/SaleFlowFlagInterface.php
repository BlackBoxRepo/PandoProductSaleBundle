<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;

interface SaleFlowFlagInterface extends IdInterface
{
    /**
     * @return \DateTime
     */
    public function getAddedDate();

    /**
     * @param \DateTime $addedDate
     * @return $this
     */
    public function setAddedDate(\DateTime $addedDate);

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
     * @return SaleFlowFlagTypeInterface
     */
    public function getType();

    /**
     * @param SaleFlowFlagTypeInterface $type
     * @return $this
     */
    public function setType(SaleFlowFlagTypeInterface $type);
}
