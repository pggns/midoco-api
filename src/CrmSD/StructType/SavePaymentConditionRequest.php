<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO $MidocoPaymentCondition = null;
    /**
     * Constructor method for SavePaymentConditionRequest
     * @uses SavePaymentConditionRequest::setMidocoPaymentCondition()
     * @param \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition = null)
    {
        $this
            ->setMidocoPaymentCondition($midocoPaymentCondition);
    }
    /**
     * Get MidocoPaymentCondition value
     * @return \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO|null
     */
    public function getMidocoPaymentCondition(): ?\Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO
    {
        return $this->MidocoPaymentCondition;
    }
    /**
     * Set MidocoPaymentCondition value
     * @param \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition
     * @return \Pggns\MidocoApi\CrmSD\StructType\SavePaymentConditionRequest
     */
    public function setMidocoPaymentCondition(?\Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO $midocoPaymentCondition = null): self
    {
        $this->MidocoPaymentCondition = $midocoPaymentCondition;
        
        return $this;
    }
}
