<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsedVolumeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUsedVolumeRequest extends AbstractStructBase
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
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * Constructor method for GetUsedVolumeRequest
     * @uses GetUsedVolumeRequest::setStoreDate()
     * @uses GetUsedVolumeRequest::setUnitName()
     * @uses GetUsedVolumeRequest::setDocumentNatureId()
     * @param string $storeDate
     * @param string $unitName
     * @param string $documentNatureId
     */
    public function __construct(?string $storeDate = null, ?string $unitName = null, ?string $documentNatureId = null)
    {
        $this
            ->setStoreDate($storeDate)
            ->setUnitName($unitName)
            ->setDocumentNatureId($documentNatureId);
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetUsedVolumeRequest
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetUsedVolumeRequest
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
    /**
     * Get documentNatureId value
     * @return string|null
     */
    public function getDocumentNatureId(): ?string
    {
        return $this->documentNatureId;
    }
    /**
     * Set documentNatureId value
     * @param string $documentNatureId
     * @return \Pggns\MidocoApi\Documents\StructType\GetUsedVolumeRequest
     */
    public function setDocumentNatureId(?string $documentNatureId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNatureId) && !is_string($documentNatureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNatureId, true), gettype($documentNatureId)), __LINE__);
        }
        $this->documentNatureId = $documentNatureId;
        
        return $this;
    }
}
