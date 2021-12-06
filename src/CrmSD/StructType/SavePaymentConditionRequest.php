<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePaymentConditionRequest StructType
 * @subpackage Structs
 */
class SavePaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoPaymentCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPaymentCondition
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO $MidocoPaymentCondition = null;
    /**
     * Constructor method for SavePaymentConditionRequest
     * @uses SavePaymentConditionRequest::setMidocoPaymentCondition()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition = null)
    {
        $this
            ->setMidocoPaymentCondition($midocoPaymentCondition);
    }
    /**
     * Get MidocoPaymentCondition value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO|null
     */
    public function getMidocoPaymentCondition(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO
    {
        return $this->MidocoPaymentCondition;
    }
    /**
     * Set MidocoPaymentCondition value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SavePaymentConditionRequest
     */
    public function setMidocoPaymentCondition(?\Pggns\MidocoApi\Api\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition = null): self
    {
        $this->MidocoPaymentCondition = $midocoPaymentCondition;
        
        return $this;
    }
}
