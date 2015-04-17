<?php
namespace BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait ProductTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="children")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="parent_id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="child_id", nullable=false)}
     * )
     */
    private $parents;

    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="parents")
     */
    private $children;

    /**
     * @ORM\OneToMany(targetEntity="ProductVariant", mappedBy="product")
     */
    private $variants;

    /**
     * @ORM\OneToMany(targetEntity="ProductPrice", mappedBy="product")
     */
    private $prices;

    /**
     * @ORM\ManyToMany(targetEntity="Region", inversedBy="availabilityProducts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $availabilityRegions;

    /**
     * @ORM\ManyToMany(targetEntity="RegionZone", inversedBy="availabilityProducts")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $availabilityRegionZones;
}
