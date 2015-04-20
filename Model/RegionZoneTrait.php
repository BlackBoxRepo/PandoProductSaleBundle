<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
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
    public function addAvailabilityProduct(AvailabilityProductInterface $availabilityProduct)
    {
        if (is_null($this->availabilityProducts)) $this->availabilityProducts = new ArrayCollection();
        $this->availabilityProducts->add($availabilityProduct);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAvailabilityProduct(AvailabilityProductInterface $availabilityProduct)
    {
        if (is_null($this->availabilityProducts)) $this->availabilityProducts = new ArrayCollection();
        $this->availabilityProducts->removeElement($availabilityProduct);
    }
}
