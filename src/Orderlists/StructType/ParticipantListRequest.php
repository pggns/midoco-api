<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParticipantListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ParticipantListRequest extends AbstractStructBase
{
    /**
     * The MidocoParticipantListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoParticipantListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType $MidocoParticipantListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for ParticipantListRequest
     * @uses ParticipantListRequest::setMidocoParticipantListCriteria()
     * @uses ParticipantListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType $midocoParticipantListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType $midocoParticipantListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoParticipantListCriteria($midocoParticipantListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoParticipantListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType|null
     */
    public function getMidocoParticipantListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
    {
        return $this->MidocoParticipantListCriteria;
    }
    /**
     * Set MidocoParticipantListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType $midocoParticipantListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\ParticipantListRequest
     */
    public function setMidocoParticipantListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType $midocoParticipantListCriteria = null): self
    {
        $this->MidocoParticipantListCriteria = $midocoParticipantListCriteria;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Orderlists\StructType\ParticipantListRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
}
