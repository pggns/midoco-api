<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDebitPaymentResponse StructType
 * @subpackage Structs
 */
class GetOrderDebitPaymentResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDebitPayment
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment $MidocoDebitPayment = null;
    /**
     * Constructor method for GetOrderDebitPaymentResponse
     * @uses GetOrderDebitPaymentResponse::setMidocoDebitPayment()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment $midocoDebitPayment
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment $midocoDebitPayment = null)
    {
        $this
            ->setMidocoDebitPayment($midocoDebitPayment);
    }
    /**
     * Get MidocoDebitPayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment|null
     */
    public function getMidocoDebitPayment(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment
    {
        return $this->MidocoDebitPayment;
    }
    /**
     * Set MidocoDebitPayment value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment $midocoDebitPayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderDebitPaymentResponse
     */
    public function setMidocoDebitPayment(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDebitPayment $midocoDebitPayment = null): self
    {
        $this->MidocoDebitPayment = $midocoDebitPayment;
        
        return $this;
    }
}
