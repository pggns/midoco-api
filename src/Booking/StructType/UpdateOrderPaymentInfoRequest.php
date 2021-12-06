<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateOrderPaymentInfoRequest StructType
 * @subpackage Structs
 */
class UpdateOrderPaymentInfoRequest extends AbstractStructBase
{
    /**
     * The payment_info
     * Meta information extracted from the WSDL
     * - ref: mbm:payment-info
     * @var \Pggns\MidocoApi\Booking\StructType\Payment_info|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\Payment_info $payment_info = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for UpdateOrderPaymentInfoRequest
     * @uses UpdateOrderPaymentInfoRequest::setPayment_info()
     * @uses UpdateOrderPaymentInfoRequest::setOrderId()
     * @param \Pggns\MidocoApi\Booking\StructType\Payment_info $payment_info
     * @param int $orderId
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\Payment_info $payment_info = null, ?int $orderId = null)
    {
        $this
            ->setPayment_info($payment_info)
            ->setOrderId($orderId);
    }
    /**
     * Get payment_info value
     * @return \Pggns\MidocoApi\Booking\StructType\Payment_info|null
     */
    public function getPayment_info(): ?\Pggns\MidocoApi\Booking\StructType\Payment_info
    {
        return $this->{'payment-info'};
    }
    /**
     * Set payment_info value
     * @param \Pggns\MidocoApi\Booking\StructType\Payment_info $payment_info
     * @return \Pggns\MidocoApi\Booking\StructType\UpdateOrderPaymentInfoRequest
     */
    public function setPayment_info(?\Pggns\MidocoApi\Booking\StructType\Payment_info $payment_info = null): self
    {
        $this->payment_info = $this->{'payment-info'} = $payment_info;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Booking\StructType\UpdateOrderPaymentInfoRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
