<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait SaleTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="integer", unique=true, options={"unsigned":true})
     */
    private $number;

    /**
     * @ORM\OneToMany(targetEntity="SaleFlowFlag", mappedBy="sale")
     */
    private $flags;

    /**
     * @ORM\OneToMany(targetEntity="SaleItem", mappedBy="sale")
     */
    private $items;

    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="sale")
     */
    private $transactions;

    /**
     * @ORM\ManyToOne(targetEntity="Account", inversedBy="sales")
     * @ORM\JoinColumn(nullable=false)
     */
    private $account;
}
