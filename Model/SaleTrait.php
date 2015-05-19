<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait SaleTrait
{
    use IdTrait;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", unique=true, options={"unsigned":true})
     */
    private $number;

    /**
     * @var ArrayCollection<SaleFlowFlagInterface>
     *
     * @ORM\OneToMany(targetEntity="SaleFlowFlag", mappedBy="sale")
     */
    private $flags;

    /**
     * @var ArrayCollection<SaleItemInterface>
     *
     * @ORM\OneToMany(targetEntity="SaleItem", mappedBy="sale")
     */
    private $items;

    /**
     * @var ArrayCollection<Transaction>
     *
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="sale")
     */
    private $transactions;

    /**
     * @var AccountInterface
     *
     * @ORM\ManyToOne(targetEntity="Account", inversedBy="sales")
     * @ORM\JoinColumn(nullable=false)
     */
    private $account;


    /**
     * {@inheritdoc}
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFlags()
    {
        if (is_null($this->flags)) $this->flags = new ArrayCollection();

        return $this->flags;
    }

    /**
     * {@inheritdoc}
     */
    public function addFlag(SaleFlowFlagInterface $flag)
    {
        if (is_null($this->flags)) $this->flags = new ArrayCollection();
        $this->flags->add($flag);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeFlag(SaleFlowFlagInterface $flag)
    {
        if (is_null($this->flags)) $this->flags = new ArrayCollection();
        $this->flags->removeElement($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        if (is_null($this->items)) $this->items = new ArrayCollection();

        return $this->items;
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(SaleItemInterface $item)
    {
        if (is_null($this->items)) $this->items = new ArrayCollection();
        $this->items->add($item);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem(SaleItemInterface $item)
    {
        if (is_null($this->items)) $this->items = new ArrayCollection();
        $this->items->removeElement($item);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getTransactions()
    {
        if (is_null($this->transactions)) $this->transactions = new ArrayCollection();
        
        return $this->transactions;
    }
    
    /**
     * {@inheritdoc}
     */
    public function addTransaction(TransactionInterface $transaction)
    {
        if (is_null($this->transactions)) $this->transactions = new ArrayCollection();
        $this->transactions->add($transaction);
    
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function removeTransaction(TransactionInterface $transaction)
    {
        if (is_null($this->transactions)) $this->transactions = new ArrayCollection();
        $this->transactions->removeElement($transaction);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getAccount()
    {
        return $this->account;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setAccount(AccountInterface $account)
    {
        $this->account = $account;
        
        return $this;
    }
}
