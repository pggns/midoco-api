<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PushBackSequenceValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PushBackSequenceValueRequest extends AbstractStructBase
{
    /**
     * The sequenceId
     * @var int|null
     */
    protected ?int $sequenceId = null;
    /**
     * The value
     * @var int|null
     */
    protected ?int $value = null;
    /**
     * Constructor method for PushBackSequenceValueRequest
     * @uses PushBackSequenceValueRequest::setSequenceId()
     * @uses PushBackSequenceValueRequest::setValue()
     * @param int $sequenceId
     * @param int $value
     */
    public function __construct(?int $sequenceId = null, ?int $value = null)
    {
        $this
            ->setSequenceId($sequenceId)
            ->setValue($value);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\PushBackSequenceValueRequest
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
    /**
     * Get value value
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\PushBackSequenceValueRequest
     */
    public function setValue(?int $value = null): self
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
