<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface RegionInterface extends \BlackBoxCode\Pando\ContactInfoBundle\Model\RegionInterface
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
