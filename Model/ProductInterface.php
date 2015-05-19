<?php
namespace BlackBoxCode\Pando\ProductSaleBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface ProductInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getSlug();

    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug);

    /**
     * @return ArrayCollection<ProductInterface>
     */
    public function getParents();

    /**
     * @param ProductInterface $parent
     * @return $this
     */
    public function addParent(ProductInterface $parent);

    /**
     * @param ProductInterface $parent
     */
    public function removeParent(ProductInterface $parent);

    /**
     * @return ArrayCollection<ProductInterface>
     */
    public function getChildren();

    /**
     * @param ProductInterface $child
     * @return $this
     */
    public function addChild(ProductInterface $child);

    /**
     * @param ProductInterface $child
     */
    public function removeChild(ProductInterface $child);

    /**
     * @return ArrayCollection<ProductVariantInterface>
     */
    public function getVariants();

    /**
     * @param ProductVariantInterface $variant
     * @return $this
     */
    public function addVariant(ProductVariantInterface $variant);

    /**
     * @param ProductVariantInterface $variant
     */
    public function removeVariant(ProductVariantInterface $variant);

    /**
     * @return ArrayCollection<ProductPriceInterface>
     */
    public function getPrices();

    /**
     * @param ProductPriceInterface $price
     * @return $this
     */
    public function addPrice(ProductPriceInterface $price);

    /**
     * @param ProductPriceInterface $price
     */
    public function removePrice(ProductPriceInterface $price);

    /**
     * @return ArrayCollection<RegionInterface>
     */
    public function getAvailabilityRegions();

    /**
     * @param RegionInterface $availabilityRegion
     * @return $this
     */
    public function addAvailabilityRegion(RegionInterface $availabilityRegion);

    /**
     * @param RegionInterface $availabilityRegion
     */
    public function removeAvailabilityRegion(RegionInterface $availabilityRegion);

    /**
     * @return ArrayCollection<RegionZoneInterface>
     */
    public function getAvailabilityRegionZones();

    /**
     * @param RegionZoneInterface $availabilityRegionZone
     * @return $this
     */
    public function addAvailabilityRegionZone(RegionZoneInterface $availabilityRegionZone);

    /**
     * @param RegionZoneInterface $availabilityRegionZone
     * @return $this
     */
    public function removeAvailabilityRegionZone(RegionZoneInterface $availabilityRegionZone);
}
