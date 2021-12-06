<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelListRequest StructType
 * @subpackage Structs
 */
class HotelListRequest extends AbstractStructBase
{
    /**
     * The MidocoHotelListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoHotelListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType $MidocoHotelListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for HotelListRequest
     * @uses HotelListRequest::setMidocoHotelListCriteria()
     * @uses HotelListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType $midocoHotelListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType $midocoHotelListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoHotelListCriteria($midocoHotelListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoHotelListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType|null
     */
    public function getMidocoHotelListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType
    {
        return $this->MidocoHotelListCriteria;
    }
    /**
     * Set MidocoHotelListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType $midocoHotelListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\HotelListRequest
     */
    public function setMidocoHotelListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListCriteriaType $midocoHotelListCriteria = null): self
    {
        $this->MidocoHotelListCriteria = $midocoHotelListCriteria;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\HotelListRequest
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
