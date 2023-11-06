<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncrementSequenceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IncrementSequenceResponse extends AbstractStructBase
{
    /**
     * The currentValue
     * @var int|null
     */
    protected ?int $currentValue = null;
    /**
     * The sequenceId
     * @var int|null
     */
    protected ?int $sequenceId = null;
    /**
     * Constructor method for IncrementSequenceResponse
     * @uses IncrementSequenceResponse::setCurrentValue()
     * @uses IncrementSequenceResponse::setSequenceId()
     * @param int $currentValue
     * @param int $sequenceId
     */
    public function __construct(?int $currentValue = null, ?int $sequenceId = null)
    {
        $this
            ->setCurrentValue($currentValue)
            ->setSequenceId($sequenceId);
    }
    /**
     * Get currentValue value
     * @return int|null
     */
    public function getCurrentValue(): ?int
    {
        return $this->currentValue;
    }
    /**
     * Set currentValue value
     * @param int $currentValue
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IncrementSequenceResponse
     */
    public function setCurrentValue(?int $currentValue = null): self
    {
        // validation for constraint: int
        if (!is_null($currentValue) && !(is_int($currentValue) || ctype_digit($currentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currentValue, true), gettype($currentValue)), __LINE__);
        }
        $this->currentValue = $currentValue;
        
        return $this;
    }
    /**
     * Get sequenceId value
     * @return int|null
     */
    public function getSequenceId(): ?int
    {
        return $this->sequenceId;
    }
    /**
     * Set sequenceId value
     * @param int $sequenceId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IncrementSequenceResponse
     */
    public function setSequenceId(?int $sequenceId = null): self
    {
        // validation for constraint: int
        if (!is_null($sequenceId) && !(is_int($sequenceId) || ctype_digit($sequenceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequenceId, true), gettype($sequenceId)), __LINE__);
        }
        $this->sequenceId = $sequenceId;
        
        return $this;
    }
}
