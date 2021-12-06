<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByEmployeeRequest StructType
 * @subpackage Structs
 */
class SalesListByEmployeeRequest extends AbstractStructBase
{
    /**
     * The MidocoSalesListByEmployeeCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSalesListByEmployeeCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType $MidocoSalesListByEmployeeCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SalesListByEmployeeRequest
     * @uses SalesListByEmployeeRequest::setMidocoSalesListByEmployeeCriteria()
     * @uses SalesListByEmployeeRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType $midocoSalesListByEmployeeCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType $midocoSalesListByEmployeeCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSalesListByEmployeeCriteria($midocoSalesListByEmployeeCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoSalesListByEmployeeCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType|null
     */
    public function getMidocoSalesListByEmployeeCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType
    {
        return $this->MidocoSalesListByEmployeeCriteria;
    }
    /**
     * Set MidocoSalesListByEmployeeCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType $midocoSalesListByEmployeeCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByEmployeeRequest
     */
    public function setMidocoSalesListByEmployeeCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByEmployeeCriteriaType $midocoSalesListByEmployeeCriteria = null): self
    {
        $this->MidocoSalesListByEmployeeCriteria = $midocoSalesListByEmployeeCriteria;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByEmployeeRequest
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
