<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitSequenceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgUnitSequenceResponse extends AbstractStructBase
{
    /**
     * The seqValue
     * @var int|null
     */
    protected ?int $seqValue = null;
    /**
     * Constructor method for GetOrgUnitSequenceResponse
     * @uses GetOrgUnitSequenceResponse::setSeqValue()
     * @param int $seqValue
     */
    public function __construct(?int $seqValue = null)
    {
        $this
            ->setSeqValue($seqValue);
    }
    /**
     * Get seqValue value
     * @return int|null
     */
    public function getSeqValue(): ?int
    {
        return $this->seqValue;
    }
    /**
     * Set seqValue value
     * @param int $seqValue
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitSequenceResponse
     */
    public function setSeqValue(?int $seqValue = null): self
    {
        // validation for constraint: int
        if (!is_null($seqValue) && !(is_int($seqValue) || ctype_digit($seqValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($seqValue, true), gettype($seqValue)), __LINE__);
        }
        $this->seqValue = $seqValue;
        
        return $this;
    }
}
