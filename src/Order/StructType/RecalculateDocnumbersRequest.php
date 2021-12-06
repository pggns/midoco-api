<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecalculateDocnumbersRequest StructType
 * @subpackage Structs
 */
class RecalculateDocnumbersRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The mdocSince
     * @var string|null
     */
    protected ?string $mdocSince = null;
    /**
     * Constructor method for RecalculateDocnumbersRequest
     * @uses RecalculateDocnumbersRequest::setUnitName()
     * @uses RecalculateDocnumbersRequest::setMdocSince()
     * @param string $unitName
     * @param string $mdocSince
     */
    public function __construct(?string $unitName = null, ?string $mdocSince = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMdocSince($mdocSince);
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
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateDocnumbersRequest
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
     * Get mdocSince value
     * @return string|null
     */
    public function getMdocSince(): ?string
    {
        return $this->mdocSince;
    }
    /**
     * Set mdocSince value
     * @param string $mdocSince
     * @return \Pggns\MidocoApi\Order\StructType\RecalculateDocnumbersRequest
     */
    public function setMdocSince(?string $mdocSince = null): self
    {
        // validation for constraint: string
        if (!is_null($mdocSince) && !is_string($mdocSince)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdocSince, true), gettype($mdocSince)), __LINE__);
        }
        $this->mdocSince = $mdocSince;
        
        return $this;
    }
}
