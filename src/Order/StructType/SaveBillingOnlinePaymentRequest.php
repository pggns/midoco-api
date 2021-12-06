<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingOnlinePaymentRequest StructType
 * @subpackage Structs
 */
class SaveBillingOnlinePaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingOnlinePayment
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingOnlinePayment
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment $MidocoBillingOnlinePayment = null;
    /**
     * Constructor method for SaveBillingOnlinePaymentRequest
     * @uses SaveBillingOnlinePaymentRequest::setMidocoBillingOnlinePayment()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null)
    {
        $this
            ->setMidocoBillingOnlinePayment($midocoBillingOnlinePayment);
    }
    /**
     * Get MidocoBillingOnlinePayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment|null
     */
    public function getMidocoBillingOnlinePayment(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment
    {
        return $this->MidocoBillingOnlinePayment;
    }
    /**
     * Set MidocoBillingOnlinePayment value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingOnlinePaymentRequest
     */
    public function setMidocoBillingOnlinePayment(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingOnlinePayment $midocoBillingOnlinePayment = null): self
    {
        $this->MidocoBillingOnlinePayment = $midocoBillingOnlinePayment;
        
        return $this;
    }
}
