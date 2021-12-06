<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO $MidocoCommissionValue = null;
    /**
     * Constructor method for SaveCommissionValueRequest
     * @uses SaveCommissionValueRequest::setMidocoCommissionValue()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO $midocoCommissionValue
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO $midocoCommissionValue = null)
    {
        $this
            ->setMidocoCommissionValue($midocoCommissionValue);
    }
    /**
     * Get MidocoCommissionValue value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO|null
     */
    public function getMidocoCommissionValue(): ?\Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO
    {
        return $this->MidocoCommissionValue;
    }
    /**
     * Set MidocoCommissionValue value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO $midocoCommissionValue
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveCommissionValueRequest
     */
    public function setMidocoCommissionValue(?\Pggns\MidocoApi\Api\Crm\StructType\CommissionValueDTO $midocoCommissionValue = null): self
    {
        $this->MidocoCommissionValue = $midocoCommissionValue;
        
        return $this;
    }
}