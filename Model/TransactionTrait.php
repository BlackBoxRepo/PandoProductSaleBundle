<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait TransactionTrait
{
    use IdTrait;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * @var TransactionTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="TransactionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @var TransactionStatusTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="TransactionStatusType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    /**
     * @var CurrencyInterface
     *
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(nullable=false)
     */
    private $currency;

    /**
     * @var SaleInterface
     *
     * @ORM\ManyToOne(targetEntity="Sale", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sale;

    /**
     * @var ArrayCollection<Transaction>
     *
     * @ORM\ManyToMany(targetEntity="Transaction", inversedBy="children")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="parent_id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="child_id", nullable=false, unique=true)}
     * )
     */
    private $parents;

    /**
     * @var ArrayCollection<Transaction>
     *
     * @ORM\ManyToMany(targetEntity="Transaction", mappedBy="parents")
     */
    private $children;


    /**
     * {@inheritdoc}
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * {@inheritdoc}
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

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
    public function setType(TransactionTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus(TransactionStatusTypeInterface $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrency(CurrencyInterface $currency)
    {
        $this->currency = $currency;

        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getSale()
    {
        return $this->sale;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setSale(SaleInterface $sale)
    {
        $this->sale = $sale;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();

        return $this->parents->first() ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function setParent(TransactionInterface $parent)
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();
        $this->parents->clear();
        $this->parents->add($parent);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();

        return $this->children;
    }

    /**
     * {@inheritdoc}
     */
    public function addChild(TransactionInterface $child)
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();
        $this->children->add($child);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeChild(TransactionInterface $child)
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();
        $this->children->removeElement($child);
    }
}
