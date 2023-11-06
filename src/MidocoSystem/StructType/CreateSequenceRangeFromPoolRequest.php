<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateSequenceRangeFromPoolRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateSequenceRangeFromPoolRequest extends AbstractStructBase
{
    /**
     * The sequenceName
     * @var string|null
     */
    protected ?string $sequenceName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for CreateSequenceRangeFromPoolRequest
     * @uses CreateSequenceRangeFromPoolRequest::setSequenceName()
     * @uses CreateSequenceRangeFromPoolRequest::setUnitName()
     * @param string $sequenceName
     * @param string $unitName
     */
    public function __construct(?string $sequenceName = null, ?string $unitName = null)
    {
        $this
            ->setSequenceName($sequenceName)
            ->setUnitName($unitName);
    }
    /**
     * Get sequenceName value
     * @return string|null
     */
    public function getSequenceName(): ?string
    {
        return $this->sequenceName;
    }
    /**
     * Set sequenceName value
     * @param string $sequenceName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CreateSequenceRangeFromPoolRequest
     */
    public function setSequenceName(?string $sequenceName = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceName) && !is_string($sequenceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceName, true), gettype($sequenceName)), __LINE__);
        }
        $this->sequenceName = $sequenceName;
        
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CreateSequenceRangeFromPoolRequest
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
