<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait RegionZoneTrait
{
    /**
     * @var ArrayCollection<ProductInterface>
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="availabilityRegionZones")
     */
    private $availabilityProducts;


    /**
     * {@inheritdoc}
     */
    public function getAvailabilityProducts()
    {
        if (is_null($this->availabilityProducts)) $this->availabilityProducts = new ArrayCollection();

        return $this->availabilityProducts;
    }

    /**
     * {@inheritdoc}
     */
    public function addAvailabilityProduct(ProductInterface $availabilityProduct)
    {
        if (is_null($this->availabilityProducts)) $this->availabilityProducts = new ArrayCollection();
        $this->availabilityProducts->add($availabilityProduct);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAvailabilityProduct(ProductInterface $availabilityProduct)
    {
        if (is_null($this->availabilityProducts)) $this->availabilityProducts = new ArrayCollection();
        $this->availabilityProducts->removeElement($availabilityProduct);
    }
}
