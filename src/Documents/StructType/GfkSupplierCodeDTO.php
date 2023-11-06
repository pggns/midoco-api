<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GfkSupplierCodeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GfkSupplierCodeDTO extends AbstractStructBase
{
    /**
     * The gfkCode
     * @var int|null
     */
    protected ?int $gfkCode = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GfkSupplierCodeDTO
     * @uses GfkSupplierCodeDTO::setGfkCode()
     * @uses GfkSupplierCodeDTO::setSupplierId()
     * @uses GfkSupplierCodeDTO::setUnitName()
     * @param int $gfkCode
     * @param string $supplierId
     * @param string $unitName
     */
    public function __construct(?int $gfkCode = null, ?string $supplierId = null, ?string $unitName = null)
    {
        $this
            ->setGfkCode($gfkCode)
            ->setSupplierId($supplierId)
            ->setUnitName($unitName);
    }
    /**
     * Get gfkCode value
     * @return int|null
     */
    public function getGfkCode(): ?int
    {
        return $this->gfkCode;
    }
    /**
     * Set gfkCode value
     * @param int $gfkCode
     * @return \Pggns\MidocoApi\Documents\StructType\GfkSupplierCodeDTO
     */
    public function setGfkCode(?int $gfkCode = null): self
    {
        // validation for constraint: int
        if (!is_null($gfkCode) && !(is_int($gfkCode) || ctype_digit($gfkCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gfkCode, true), gettype($gfkCode)), __LINE__);
        }
        $this->gfkCode = $gfkCode;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Documents\StructType\GfkSupplierCodeDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\GfkSupplierCodeDTO
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
