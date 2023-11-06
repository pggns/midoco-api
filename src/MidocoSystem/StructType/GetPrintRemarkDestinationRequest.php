<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintRemarkDestinationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintRemarkDestinationRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The isOnlyInherited
     * @var bool|null
     */
    protected ?bool $isOnlyInherited = null;
    /**
     * Constructor method for GetPrintRemarkDestinationRequest
     * @uses GetPrintRemarkDestinationRequest::setUnitName()
     * @uses GetPrintRemarkDestinationRequest::setIsOnlyInherited()
     * @param string $unitName
     * @param bool $isOnlyInherited
     */
    public function __construct(?string $unitName = null, ?bool $isOnlyInherited = null)
    {
        $this
            ->setUnitName($unitName)
            ->setIsOnlyInherited($isOnlyInherited);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintRemarkDestinationRequest
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
     * Get isOnlyInherited value
     * @return bool|null
     */
    public function getIsOnlyInherited(): ?bool
    {
        return $this->isOnlyInherited;
    }
    /**
     * Set isOnlyInherited value
     * @param bool $isOnlyInherited
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintRemarkDestinationRequest
     */
    public function setIsOnlyInherited(?bool $isOnlyInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOnlyInherited) && !is_bool($isOnlyInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOnlyInherited, true), gettype($isOnlyInherited)), __LINE__);
        }
        $this->isOnlyInherited = $isOnlyInherited;
        
        return $this;
    }
}
