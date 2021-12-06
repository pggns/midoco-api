<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListBySupplierGroupRequest StructType
 * @subpackage Structs
 */
class SalesListBySupplierGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoSalesListBySupplierGroupCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSalesListBySupplierGroupCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType $MidocoSalesListBySupplierGroupCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SalesListBySupplierGroupRequest
     * @uses SalesListBySupplierGroupRequest::setMidocoSalesListBySupplierGroupCriteria()
     * @uses SalesListBySupplierGroupRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType $midocoSalesListBySupplierGroupCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType $midocoSalesListBySupplierGroupCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSalesListBySupplierGroupCriteria($midocoSalesListBySupplierGroupCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoSalesListBySupplierGroupCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType|null
     */
    public function getMidocoSalesListBySupplierGroupCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType
    {
        return $this->MidocoSalesListBySupplierGroupCriteria;
    }
    /**
     * Set MidocoSalesListBySupplierGroupCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType $midocoSalesListBySupplierGroupCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupRequest
     */
    public function setMidocoSalesListBySupplierGroupCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListBySupplierGroupCriteriaType $midocoSalesListBySupplierGroupCriteria = null): self
    {
        $this->MidocoSalesListBySupplierGroupCriteria = $midocoSalesListBySupplierGroupCriteria;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupRequest
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
