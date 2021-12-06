<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierCancelConditionRequest StructType
 * @subpackage Structs
 */
class SaveSupplierCancelConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCancelCondition
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition $MidocoSupplierCancelCondition = null;
    /**
     * Constructor method for SaveSupplierCancelConditionRequest
     * @uses SaveSupplierCancelConditionRequest::setMidocoSupplierCancelCondition()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition = null)
    {
        $this
            ->setMidocoSupplierCancelCondition($midocoSupplierCancelCondition);
    }
    /**
     * Get MidocoSupplierCancelCondition value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition|null
     */
    public function getMidocoSupplierCancelCondition(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition
    {
        return $this->MidocoSupplierCancelCondition;
    }
    /**
     * Set MidocoSupplierCancelCondition value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierCancelConditionRequest
     */
    public function setMidocoSupplierCancelCondition(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition = null): self
    {
        $this->MidocoSupplierCancelCondition = $midocoSupplierCancelCondition;
        
        return $this;
    }
}
