<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListBySupplierRequest StructType
 * @subpackage Structs
 */
class SalesListBySupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoSalesListBySupplierCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSalesListBySupplierCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $MidocoSalesListBySupplierCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SalesListBySupplierRequest
     * @uses SalesListBySupplierRequest::setMidocoSalesListBySupplierCriteria()
     * @uses SalesListBySupplierRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSalesListBySupplierCriteria($midocoSalesListBySupplierCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoSalesListBySupplierCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType|null
     */
    public function getMidocoSalesListBySupplierCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType
    {
        return $this->MidocoSalesListBySupplierCriteria;
    }
    /**
     * Set MidocoSalesListBySupplierCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListBySupplierRequest
     */
    public function setMidocoSalesListBySupplierCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListBySupplierCriteriaType $midocoSalesListBySupplierCriteria = null): self
    {
        $this->MidocoSalesListBySupplierCriteria = $midocoSalesListBySupplierCriteria;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListBySupplierRequest
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
