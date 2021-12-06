<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CCAccessListRequest StructType
 * @subpackage Structs
 */
class CCAccessListRequest extends AbstractStructBase
{
    /**
     * The MidocoCCAccessListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoCCAccessListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType $MidocoCCAccessListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for CCAccessListRequest
     * @uses CCAccessListRequest::setMidocoCCAccessListCriteria()
     * @uses CCAccessListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType $midocoCCAccessListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType $midocoCCAccessListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoCCAccessListCriteria($midocoCCAccessListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoCCAccessListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType|null
     */
    public function getMidocoCCAccessListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType
    {
        return $this->MidocoCCAccessListCriteria;
    }
    /**
     * Set MidocoCCAccessListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType $midocoCCAccessListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\CCAccessListRequest
     */
    public function setMidocoCCAccessListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType $midocoCCAccessListCriteria = null): self
    {
        $this->MidocoCCAccessListCriteria = $midocoCCAccessListCriteria;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\CCAccessListRequest
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
