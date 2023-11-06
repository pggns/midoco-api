<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCampaignFieldExt StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCampaignFieldExt extends CampaignFieldType
{
    /**
     * The typeAsString
     * @var string|null
     */
    protected ?string $typeAsString = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * Constructor method for MidocoCampaignFieldExt
     * @uses MidocoCampaignFieldExt::setTypeAsString()
     * @uses MidocoCampaignFieldExt::setCategory()
     * @param string $typeAsString
     * @param string $category
     */
    public function __construct(?string $typeAsString = null, ?string $category = null)
    {
        $this
            ->setTypeAsString($typeAsString)
            ->setCategory($category);
    }
    /**
     * Get typeAsString value
     * @return string|null
     */
    public function getTypeAsString(): ?string
    {
        return $this->typeAsString;
    }
    /**
     * Set typeAsString value
     * @param string $typeAsString
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt
     */
    public function setTypeAsString(?string $typeAsString = null): self
    {
        // validation for constraint: string
        if (!is_null($typeAsString) && !is_string($typeAsString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeAsString, true), gettype($typeAsString)), __LINE__);
        }
        $this->typeAsString = $typeAsString;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCampaignFieldExt
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
}
