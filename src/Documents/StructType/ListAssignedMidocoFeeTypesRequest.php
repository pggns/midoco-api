<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListAssignedMidocoFeeTypesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: list the fee types after a criteria
 * @subpackage Structs
 */
class ListAssignedMidocoFeeTypesRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * The referenceDate
     * @var string|null
     */
    protected ?string $referenceDate = null;
    /**
     * Constructor method for ListAssignedMidocoFeeTypesRequest
     * @uses ListAssignedMidocoFeeTypesRequest::setMidocoFeeType()
     * @uses ListAssignedMidocoFeeTypesRequest::setReferenceDate()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType $midocoFeeType
     * @param string $referenceDate
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType $midocoFeeType = null, ?string $referenceDate = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType)
            ->setReferenceDate($referenceDate);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\Api\Documents\StructType\ListAssignedMidocoFeeTypesRequest
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
    /**
     * Get referenceDate value
     * @return string|null
     */
    public function getReferenceDate(): ?string
    {
        return $this->referenceDate;
    }
    /**
     * Set referenceDate value
     * @param string $referenceDate
     * @return \Pggns\MidocoApi\Api\Documents\StructType\ListAssignedMidocoFeeTypesRequest
     */
    public function setReferenceDate(?string $referenceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceDate) && !is_string($referenceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceDate, true), gettype($referenceDate)), __LINE__);
        }
        $this->referenceDate = $referenceDate;
        
        return $this;
    }
}
