<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait ProductTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    private $slug;

    /**
     * @var ArrayCollection<ProductInterface>
     *
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="children")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="parent_id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="child_id", nullable=false)}
     * )
     */
    private $parents;

    /**
     * @var ArrayCollection<ProductInterface>
     *
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="parents")
     */
    private $children;

    /**
     * @var ArrayCollection<ProductVariantInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductVariant", mappedBy="product")
     */
    private $variants;

    /**
     * @var ArrayCollection<ProductPriceInterface>
     *
     * @ORM\OneToMany(targetEntity="ProductPrice", mappedBy="product")
     */
    private $prices;

    /**
     * @var ArrayCollection<RegionInterface>
     *
     * @ORM\ManyToMany(targetEntity="Region", inversedBy="availabilityProducts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $availabilityRegions;

    /**
     * @var ArrayCollection<RegionZoneInterface>
     *
     * @ORM\ManyToMany(targetEntity="RegionZone", inversedBy="availabilityProducts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $availabilityRegionZones;

    
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * {@inheritdoc}
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getParents()
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();

        return $this->parents;
    }

    /**
     * {@inheritdoc}
     */
    public function addParent(ProductInterface $parent)
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();
        $this->parents->add($parent);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeParent(ProductInterface $parent)
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();
        $this->parents->removeElement($parent);
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
    public function addChild(ProductInterface $child)
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();
        $this->children->add($child);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeChild(ProductInterface $child)
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();
        $this->children->removeElement($child);
    }

    /**
     * {@inheritdoc}
     */
    public function getVariants()
    {
        if (is_null($this->variants)) $this->variants = new ArrayCollection();

        return $this->variants;
    }

    /**
     * {@inheritdoc}
     */
    public function addVariant(ProductVariantInterface $variant)
    {
        if (is_null($this->variants)) $this->variants = new ArrayCollection();
        $this->variants->add($variant);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeVariant(ProductVariantInterface $variant)
    {
        if (is_null($this->variants)) $this->variants = new ArrayCollection();
        $this->variants->removeElement($variant);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrices()
    {
        if (is_null($this->prices)) $this->prices = new ArrayCollection();

        return $this->prices;
    }

    /**
     * {@inheritdoc}
     */
    public function addPrice(ProductPriceInterface $price)
    {
        if (is_null($this->prices)) $this->prices = new ArrayCollection();
        $this->prices->add($price);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removePrice(ProductPriceInterface $price)
    {
        if (is_null($this->prices)) $this->prices = new ArrayCollection();
        $this->prices->removeElement($price);
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailabilityRegions()
    {
        if (is_null($this->availabilityRegions)) $this->availabilityRegions = new ArrayCollection();

        return $this->availabilityRegions;
    }

    /**
     * {@inheritdoc}
     */
    public function addAvailabilityRegion(RegionInterface $availabilityRegion)
    {
        if (is_null($this->availabilityRegions)) $this->availabilityRegions = new ArrayCollection();
        $this->availabilityRegions->add($availabilityRegion);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAvailabilityRegion(RegionInterface $availabilityRegion)
    {
        if (is_null($this->availabilityRegions)) $this->availabilityRegions = new ArrayCollection();
        $this->availabilityRegions->removeElement($availabilityRegion);
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailabilityRegionZones()
    {
        if (is_null($this->availabilityRegionZones)) $this->availabilityRegionZones = new ArrayCollection();

        return $this->availabilityRegionZones;
    }

    /**
     * {@inheritdoc}
     */
    public function addAvailabilityRegionZone(RegionZoneInterface $availabilityRegionZone)
    {
        if (is_null($this->availabilityRegionZones)) $this->availabilityRegionZones = new ArrayCollection();
        $this->availabilityRegionZones->add($availabilityRegionZone);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeAvailabilityRegionZone(RegionZoneInterface $availabilityRegionZone)
    {
        if (is_null($this->availabilityRegionZones)) $this->availabilityRegionZones = new ArrayCollection();
        $this->availabilityRegionZones->removeElement($availabilityRegionZone);
    }
}
