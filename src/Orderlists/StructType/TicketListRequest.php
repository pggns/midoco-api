<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketListRequest StructType
 * @subpackage Structs
 */
class TicketListRequest extends AbstractStructBase
{
    /**
     * The MidocoTicketListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoTicketListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType $MidocoTicketListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for TicketListRequest
     * @uses TicketListRequest::setMidocoTicketListCriteria()
     * @uses TicketListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType $midocoTicketListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType $midocoTicketListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoTicketListCriteria($midocoTicketListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoTicketListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType|null
     */
    public function getMidocoTicketListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType
    {
        return $this->MidocoTicketListCriteria;
    }
    /**
     * Set MidocoTicketListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType $midocoTicketListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TicketListRequest
     */
    public function setMidocoTicketListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListCriteriaType $midocoTicketListCriteria = null): self
    {
        $this->MidocoTicketListCriteria = $midocoTicketListCriteria;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TicketListRequest
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
