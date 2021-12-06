<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByAgencyRequest StructType
 * @subpackage Structs
 */
class SalesListByAgencyRequest extends AbstractStructBase
{
    /**
     * The MidocoSalesListByAgencyCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSalesListByAgencyCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType $MidocoSalesListByAgencyCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SalesListByAgencyRequest
     * @uses SalesListByAgencyRequest::setMidocoSalesListByAgencyCriteria()
     * @uses SalesListByAgencyRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType $midocoSalesListByAgencyCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType $midocoSalesListByAgencyCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSalesListByAgencyCriteria($midocoSalesListByAgencyCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoSalesListByAgencyCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType|null
     */
    public function getMidocoSalesListByAgencyCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType
    {
        return $this->MidocoSalesListByAgencyCriteria;
    }
    /**
     * Set MidocoSalesListByAgencyCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType $midocoSalesListByAgencyCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByAgencyRequest
     */
    public function setMidocoSalesListByAgencyCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType $midocoSalesListByAgencyCriteria = null): self
    {
        $this->MidocoSalesListByAgencyCriteria = $midocoSalesListByAgencyCriteria;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByAgencyRequest
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
