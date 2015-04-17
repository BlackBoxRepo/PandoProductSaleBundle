<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait TransactionTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * @ORM\ManyToOne(targetEntity="TransactionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="TransactionStatusType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(nullable=false)
     */
    private $currency;

    /**
     * @ORM\ManyToOne(targetEntity="Sale", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sale;

    /**
     * @ORM\ManyToMany(targetEntity="Transaction", inversedBy="children")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="parent_id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="child_id", nullable=false, unique=true)}
     * )
     */
    private $parent;

    /**
     * @ORM\ManyToMany(targetEntity="Transaction", mappedBy="parents")
     */
    private $children;
}
