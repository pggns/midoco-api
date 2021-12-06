<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParameterValue StructType
 * @subpackage Structs
 */
class ParameterValue extends AbstractStructBase
{
    /**
     * The isIncluded
     * @var bool|null
     */
    protected ?bool $isIncluded = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for ParameterValue
     * @uses ParameterValue::setIsIncluded()
     * @uses ParameterValue::setValue()
     * @param bool $isIncluded
     * @param string $value
     */
    public function __construct(?bool $isIncluded = null, ?string $value = null)
    {
        $this
            ->setIsIncluded($isIncluded)
            ->setValue($value);
    }
    /**
     * Get isIncluded value
     * @return bool|null
     */
    public function getIsIncluded(): ?bool
    {
        return $this->isIncluded;
    }
    /**
     * Set isIncluded value
     * @param bool $isIncluded
     * @return \Pggns\MidocoApi\Mis\StructType\ParameterValue
     */
    public function setIsIncluded(?bool $isIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIncluded) && !is_bool($isIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIncluded, true), gettype($isIncluded)), __LINE__);
        }
        $this->isIncluded = $isIncluded;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Mis\StructType\ParameterValue
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
