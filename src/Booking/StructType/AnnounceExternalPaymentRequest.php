<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceExternalPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Service to send a payment referenced to an existing order.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceExternalPaymentRequest extends AbstractStructBase
{
    /**
     * The ExternalPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: mbm:ExternalPayment
     * @var \Pggns\MidocoApi\Booking\StructType\ExternalPayment[]
     */
    protected array $ExternalPayment;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * Constructor method for AnnounceExternalPaymentRequest
     * @uses AnnounceExternalPaymentRequest::setExternalPayment()
     * @uses AnnounceExternalPaymentRequest::setOrderId()
     * @param \Pggns\MidocoApi\Booking\StructType\ExternalPayment[] $externalPayment
     * @param int $orderId
     */
    public function __construct(array $externalPayment, int $orderId)
    {
        $this
            ->setExternalPayment($externalPayment)
            ->setOrderId($orderId);
    }
    /**
     * Get ExternalPayment value
     * @return \Pggns\MidocoApi\Booking\StructType\ExternalPayment[]
     */
    public function getExternalPayment(): array
    {
        return $this->ExternalPayment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPaymentForArrayConstraintFromSetExternalPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceExternalPaymentRequestExternalPaymentItem) {
            // validation for constraint: itemType
            if (!$announceExternalPaymentRequestExternalPaymentItem instanceof \Pggns\MidocoApi\Booking\StructType\ExternalPayment) {
                $invalidValues[] = is_object($announceExternalPaymentRequestExternalPaymentItem) ? get_class($announceExternalPaymentRequestExternalPaymentItem) : sprintf('%s(%s)', gettype($announceExternalPaymentRequestExternalPaymentItem), var_export($announceExternalPaymentRequestExternalPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Booking\StructType\ExternalPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\ExternalPayment[] $externalPayment
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentRequest
     */
    public function setExternalPayment(array $externalPayment): self
    {
        // validation for constraint: array
        if ('' !== ($externalPaymentArrayErrorMessage = self::validateExternalPaymentForArrayConstraintFromSetExternalPayment($externalPayment))) {
            throw new InvalidArgumentException($externalPaymentArrayErrorMessage, __LINE__);
        }
        $this->ExternalPayment = $externalPayment;
        
        return $this;
    }
    /**
     * Add item to ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Booking\StructType\ExternalPayment $item
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentRequest
     */
    public function addToExternalPayment(\Pggns\MidocoApi\Booking\StructType\ExternalPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Booking\StructType\ExternalPayment) {
            throw new InvalidArgumentException(sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Booking\StructType\ExternalPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPayment[] = $item;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentRequest
     */
    public function setOrderId(int $orderId): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
