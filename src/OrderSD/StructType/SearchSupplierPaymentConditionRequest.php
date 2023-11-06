<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierPaymentConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierPaymentCondition
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition $MidocoSupplierPaymentCondition = null;
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierPaymentConditionRequest
     * @uses SearchSupplierPaymentConditionRequest::setMidocoSupplierPaymentCondition()
     * @uses SearchSupplierPaymentConditionRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition = null, ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition)
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplierPaymentCondition value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition|null
     */
    public function getMidocoSupplierPaymentCondition(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition
    {
        return $this->MidocoSupplierPaymentCondition;
    }
    /**
     * Set MidocoSupplierPaymentCondition value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition
     * @return \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierPaymentConditionRequest
     */
    public function setMidocoSupplierPaymentCondition(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierPaymentCondition $midocoSupplierPaymentCondition = null): self
    {
        $this->MidocoSupplierPaymentCondition = $midocoSupplierPaymentCondition;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\OrderSD\StructType\SearchSupplierPaymentConditionRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
