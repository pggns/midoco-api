<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionValueRequest StructType
 * @subpackage Structs
 */
class SaveCommissionValueRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionValue
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionValue
     * @var \Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO $MidocoCommissionValue = null;
    /**
     * Constructor method for SaveCommissionValueRequest
     * @uses SaveCommissionValueRequest::setMidocoCommissionValue()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO $midocoCommissionValue
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO $midocoCommissionValue = null)
    {
        $this
            ->setMidocoCommissionValue($midocoCommissionValue);
    }
    /**
     * Get MidocoCommissionValue value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO|null
     */
    public function getMidocoCommissionValue(): ?\Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO
    {
        return $this->MidocoCommissionValue;
    }
    /**
     * Set MidocoCommissionValue value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO $midocoCommissionValue
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveCommissionValueRequest
     */
    public function setMidocoCommissionValue(?\Pggns\MidocoApi\CrmSD\StructType\CommissionValueDTO $midocoCommissionValue = null): self
    {
        $this->MidocoCommissionValue = $midocoCommissionValue;
        
        return $this;
    }
}
