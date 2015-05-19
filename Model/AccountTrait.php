<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait AccountTrait
{
    /**
     * @var ArrayCollection<SaleInterface>
     *
     * @ORM\OneToMany(targetEntity="Sale", mappedBy="account")
     */
    private $sales;


    /**
     * {@inheritdoc}
     */
    public function getSales()
    {
        if (is_null($this->sales)) $this->sales = new ArrayCollection();

        return $this->sales;
    }

    /**
     * {@inheritdoc}
     */
    public function addSale(SaleInterface $sale)
    {
        if (is_null($this->sales)) $this->sales = new ArrayCollection();
        $this->sales->add($sale);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeSale(SaleInterface $sale)
    {
        if (is_null($this->sales)) $this->sales = new ArrayCollection();
        $this->sales->removeElement($sale);
    }
}
