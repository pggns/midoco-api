<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition $MidocoSupplierSettlPaymentCondition = null;
    /**
     * Constructor method for SaveSupplierSettlPaymentConditionRequest
     * @uses SaveSupplierSettlPaymentConditionRequest::setMidocoSupplierSettlPaymentCondition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null)
    {
        $this
            ->setMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition);
    }
    /**
     * Get MidocoSupplierSettlPaymentCondition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    public function getMidocoSupplierSettlPaymentCondition(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition
    {
        return $this->MidocoSupplierSettlPaymentCondition;
    }
    /**
     * Set MidocoSupplierSettlPaymentCondition value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierSettlPaymentConditionRequest
     */
    public function setMidocoSupplierSettlPaymentCondition(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null): self
    {
        $this->MidocoSupplierSettlPaymentCondition = $midocoSupplierSettlPaymentCondition;
        
        return $this;
    }
}
