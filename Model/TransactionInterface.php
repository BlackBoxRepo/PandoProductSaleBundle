<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface TransactionInterface
{
    /**
     * @return float
     */
    public function getAmount();

    /**
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount);

    /**
     * @return TransactionTypeInterface
     */
    public function getType();

    /**
     * @param TransactionTypeInterface $type
     * @return $this
     */
    public function setType(TransactionTypeInterface $type);

    /**
     * @return TransactionStatusTypeInterface
     */
    public function getStatus();

    /**
     * @param TransactionStatusTypeInterface $status
     * @return $this
     */
    public function setStatus(TransactionStatusTypeInterface $status);

    /**
     * @return CurrencyInterface
     */
    public function getCurrency();

    /**
     * @param CurrencyInterface $currency
     * @return $this
     */
    public function setCurrency(CurrencyInterface $currency);

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
     * @return TransactionInterface
     */
    public function getParent();

    /**
     * @param TransactionInterface $parent
     * @return $this
     */
    public function setParent(TransactionInterface $parent);

    /**
     * @return ArrayCollection<TransactionInterface>
     */
    public function getChildren();

    /**
     * @param TransactionInterface $child
     * @return $this
     */
    public function addChild(TransactionInterface $child);

    /**
     * @param TransactionInterface $child
     */
    public function removeChild(TransactionInterface $child);

    /**
     * @return TransactionPathResultInterface
     */
    public function getSource();

    /**
     * @param TransactionPathResultInterface $source
     * @return $this
     */
    public function setSource(TransactionPathResultInterface $source);

    /**
     * @return TransactionPathResultInterface
     */
    public function getDestination();

    /**
     * @param TransactionPathResultInterface $destination
     * @return $this
     */
    public function setDestination(TransactionPathResultInterface $destination);
}
