<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByProductTypeRequest StructType
 * @subpackage Structs
 */
class SalesListByProductTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSalesListByProductTypeCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSalesListByProductTypeCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType $MidocoSalesListByProductTypeCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SalesListByProductTypeRequest
     * @uses SalesListByProductTypeRequest::setMidocoSalesListByProductTypeCriteria()
     * @uses SalesListByProductTypeRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType $midocoSalesListByProductTypeCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType $midocoSalesListByProductTypeCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSalesListByProductTypeCriteria($midocoSalesListByProductTypeCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoSalesListByProductTypeCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType|null
     */
    public function getMidocoSalesListByProductTypeCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType
    {
        return $this->MidocoSalesListByProductTypeCriteria;
    }
    /**
     * Set MidocoSalesListByProductTypeCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType $midocoSalesListByProductTypeCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByProductTypeRequest
     */
    public function setMidocoSalesListByProductTypeCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListByProductTypeCriteriaType $midocoSalesListByProductTypeCriteria = null): self
    {
        $this->MidocoSalesListByProductTypeCriteria = $midocoSalesListByProductTypeCriteria;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SalesListByProductTypeRequest
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
