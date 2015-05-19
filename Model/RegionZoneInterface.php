<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface RegionZoneInterface extends \BlackBoxCode\Pando\ContactInfoBundle\Model\RegionZoneInterface
{
    /**
     * @return ArrayCollection<ProductInterface>
     */
    public function getAvailabilityProducts();

    /**
     * @param ProductInterface $availabilityProduct
     * @return $this
     */
    public function addAvailabilityProduct(ProductInterface $availabilityProduct);

    /**
     * @param ProductInterface $availabilityProduct
     */
    public function removeAvailabilityProduct(ProductInterface $availabilityProduct);
}
