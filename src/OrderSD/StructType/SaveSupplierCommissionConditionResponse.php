<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierCommissionConditionResponse StructType
 * @subpackage Structs
 */
class SaveSupplierCommissionConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCommissionCondition
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition $MidocoSupplierCommissionCondition = null;
    /**
     * Constructor method for SaveSupplierCommissionConditionResponse
     * @uses SaveSupplierCommissionConditionResponse::setMidocoSupplierCommissionCondition()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition = null)
    {
        $this
            ->setMidocoSupplierCommissionCondition($midocoSupplierCommissionCondition);
    }
    /**
     * Get MidocoSupplierCommissionCondition value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition|null
     */
    public function getMidocoSupplierCommissionCondition(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition
    {
        return $this->MidocoSupplierCommissionCondition;
    }
    /**
     * Set MidocoSupplierCommissionCondition value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCommissionConditionResponse
     */
    public function setMidocoSupplierCommissionCondition(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition = null): self
    {
        $this->MidocoSupplierCommissionCondition = $midocoSupplierCommissionCondition;
        
        return $this;
    }
}
