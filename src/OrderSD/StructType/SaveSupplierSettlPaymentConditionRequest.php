<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierSettlPaymentConditionRequest StructType
 * @subpackage Structs
 */
class SaveSupplierSettlPaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlPaymentCondition
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition $MidocoSupplierSettlPaymentCondition = null;
    /**
     * Constructor method for SaveSupplierSettlPaymentConditionRequest
     * @uses SaveSupplierSettlPaymentConditionRequest::setMidocoSupplierSettlPaymentCondition()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null)
    {
        $this
            ->setMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition);
    }
    /**
     * Get MidocoSupplierSettlPaymentCondition value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    public function getMidocoSupplierSettlPaymentCondition(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition
    {
        return $this->MidocoSupplierSettlPaymentCondition;
    }
    /**
     * Set MidocoSupplierSettlPaymentCondition value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SaveSupplierSettlPaymentConditionRequest
     */
    public function setMidocoSupplierSettlPaymentCondition(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null): self
    {
        $this->MidocoSupplierSettlPaymentCondition = $midocoSupplierSettlPaymentCondition;
        
        return $this;
    }
}