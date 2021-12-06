<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemAttributesRequest StructType
 * @subpackage Structs
 */
class GetSellItemAttributesRequest extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetSellItemAttributesRequest
     * @uses GetSellItemAttributesRequest::setItemId()
     * @uses GetSellItemAttributesRequest::setAttributeName()
     * @uses GetSellItemAttributesRequest::setUnitName()
     * @param int $itemId
     * @param string $attributeName
     * @param string $unitName
     */
    public function __construct(?int $itemId = null, ?string $attributeName = null, ?string $unitName = null)
    {
        $this
            ->setItemId($itemId)
            ->setAttributeName($attributeName)
            ->setUnitName($unitName);
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemAttributesRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemAttributesRequest
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemAttributesRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
