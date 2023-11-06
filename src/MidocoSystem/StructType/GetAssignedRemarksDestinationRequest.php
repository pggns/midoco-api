<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedRemarksDestinationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedRemarksDestinationRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The printDestId
     * @var string|null
     */
    protected ?string $printDestId = null;
    /**
     * Constructor method for GetAssignedRemarksDestinationRequest
     * @uses GetAssignedRemarksDestinationRequest::setUnitName()
     * @uses GetAssignedRemarksDestinationRequest::setPrintDestId()
     * @param string $unitName
     * @param string $printDestId
     */
    public function __construct(?string $unitName = null, ?string $printDestId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setPrintDestId($printDestId);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAssignedRemarksDestinationRequest
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
     * Get printDestId value
     * @return string|null
     */
    public function getPrintDestId(): ?string
    {
        return $this->printDestId;
    }
    /**
     * Set printDestId value
     * @param string $printDestId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAssignedRemarksDestinationRequest
     */
    public function setPrintDestId(?string $printDestId = null): self
    {
        // validation for constraint: string
        if (!is_null($printDestId) && !is_string($printDestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDestId, true), gettype($printDestId)), __LINE__);
        }
        $this->printDestId = $printDestId;
        
        return $this;
    }
}
