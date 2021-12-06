<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListUsedVolumeRequest StructType
 * @subpackage Structs
 */
class ListUsedVolumeRequest extends AbstractStructBase
{
    /**
     * The storeDate
     * @var string|null
     */
    protected ?string $storeDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for ListUsedVolumeRequest
     * @uses ListUsedVolumeRequest::setStoreDate()
     * @uses ListUsedVolumeRequest::setUnitName()
     * @param string $storeDate
     * @param string $unitName
     */
    public function __construct(?string $storeDate = null, ?string $unitName = null)
    {
        $this
            ->setStoreDate($storeDate)
            ->setUnitName($unitName);
    }
    /**
     * Get storeDate value
     * @return string|null
     */
    public function getStoreDate(): ?string
    {
        return $this->storeDate;
    }
    /**
     * Set storeDate value
     * @param string $storeDate
     * @return \Pggns\MidocoApi\Documents\StructType\ListUsedVolumeRequest
     */
    public function setStoreDate(?string $storeDate = null): self
    {
        // validation for constraint: string
        if (!is_null($storeDate) && !is_string($storeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeDate, true), gettype($storeDate)), __LINE__);
        }
        $this->storeDate = $storeDate;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\ListUsedVolumeRequest
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
