<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierSettlPaymentConditionRequest StructType
 * @subpackage Structs
 */
class SearchSupplierSettlPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlPaymentCondition
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition $MidocoSupplierSettlPaymentCondition = null;
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierSettlPaymentConditionRequest
     * @uses SearchSupplierSettlPaymentConditionRequest::setMidocoSupplierSettlPaymentCondition()
     * @uses SearchSupplierSettlPaymentConditionRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition)
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplierSettlPaymentCondition value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    public function getMidocoSupplierSettlPaymentCondition(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition
    {
        return $this->MidocoSupplierSettlPaymentCondition;
    }
    /**
     * Set MidocoSupplierSettlPaymentCondition value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     * @return \Pggns\MidocoApi\Documents\StructType\SearchSupplierSettlPaymentConditionRequest
     */
    public function setMidocoSupplierSettlPaymentCondition(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null): self
    {
        $this->MidocoSupplierSettlPaymentCondition = $midocoSupplierSettlPaymentCondition;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\SearchSupplierSettlPaymentConditionRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
