<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface SaleInterface extends IdInterface
{
    /**
     * @return integer
     */
    public function getNumber();

    /**
     * @param integer $number
     * @return $this
     */
    public function setNumber($number);

    /**
     * @return ArrayCollection<SaleFlowFlagInterface>
     */
    public function getFlags();

    /**
     * @param SaleFlowFlagInterface $flag
     * @return $this
     */
    public function addFlag(SaleFlowFlagInterface $flag);

    /**
     * @param SaleFlowFlagInterface $flag
     */
    public function removeFlag(SaleFlowFlagInterface $flag);

    /**
     * @return ArrayCollection<SaleItemInterface>
     */
    public function getItems();

    /**
     * @param SaleItemInterface $item
     * @return $this
     */
    public function addItem(SaleItemInterface $item);

    /**
     * @param SaleItemInterface $item
     */
    public function removeItem(SaleItemInterface $item);

    /**
     * @return ArrayCollection<Transaction>
     */
    public function getTransactions();

    /**
     * @param TransactionInterface $transaction
     * @return $this
     */
    public function addTransaction(TransactionInterface $transaction);

    /**
     * @param TransactionInterface $transaction
     */
    public function removeTransaction(TransactionInterface $transaction);

    /**
     * @return AccountInterface
     */
    public function getAccount();

    /**
     * @param AccountInterface $account
     * @return $this
     */
    public function setAccount(AccountInterface $account);
}
