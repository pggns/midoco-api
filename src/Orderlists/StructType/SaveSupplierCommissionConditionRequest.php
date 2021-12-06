<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierCommissionConditionRequest StructType
 * @subpackage Structs
 */
class SaveSupplierCommissionConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCommissionCondition
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition $MidocoSupplierCommissionCondition = null;
    /**
     * Constructor method for SaveSupplierCommissionConditionRequest
     * @uses SaveSupplierCommissionConditionRequest::setMidocoSupplierCommissionCondition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition = null)
    {
        $this
            ->setMidocoSupplierCommissionCondition($midocoSupplierCommissionCondition);
    }
    /**
     * Get MidocoSupplierCommissionCondition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition|null
     */
    public function getMidocoSupplierCommissionCondition(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition
    {
        return $this->MidocoSupplierCommissionCondition;
    }
    /**
     * Set MidocoSupplierCommissionCondition value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveSupplierCommissionConditionRequest
     */
    public function setMidocoSupplierCommissionCondition(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierCommissionCondition $midocoSupplierCommissionCondition = null): self
    {
        $this->MidocoSupplierCommissionCondition = $midocoSupplierCommissionCondition;
        
        return $this;
    }
}
