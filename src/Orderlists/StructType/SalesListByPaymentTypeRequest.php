<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByPaymentTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalesListByPaymentTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSalesListByPaymentTypeCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoSalesListByPaymentTypeCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType $MidocoSalesListByPaymentTypeCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for SalesListByPaymentTypeRequest
     * @uses SalesListByPaymentTypeRequest::setMidocoSalesListByPaymentTypeCriteria()
     * @uses SalesListByPaymentTypeRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType $midocoSalesListByPaymentTypeCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType $midocoSalesListByPaymentTypeCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoSalesListByPaymentTypeCriteria($midocoSalesListByPaymentTypeCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoSalesListByPaymentTypeCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType|null
     */
    public function getMidocoSalesListByPaymentTypeCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType
    {
        return $this->MidocoSalesListByPaymentTypeCriteria;
    }
    /**
     * Set MidocoSalesListByPaymentTypeCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType $midocoSalesListByPaymentTypeCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeRequest
     */
    public function setMidocoSalesListByPaymentTypeCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeCriteriaType $midocoSalesListByPaymentTypeCriteria = null): self
    {
        $this->MidocoSalesListByPaymentTypeCriteria = $midocoSalesListByPaymentTypeCriteria;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeRequest
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
