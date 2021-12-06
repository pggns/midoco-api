<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Payment information
 * @subpackage Structs
 */
class PaymentInfo extends AbstractStructBase
{
    /**
     * The ccPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Order\StructType\CcPayment[]
     */
    protected ?array $ccPayment = null;
    /**
     * The debitPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Order\StructType\DebitPayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\DebitPayment $debitPayment = null;
    /**
     * The advisedPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment $advisedPayment = null;
    /**
     * The preferredPaymentType
     * @var string|null
     */
    protected ?string $preferredPaymentType = null;
    /**
     * Constructor method for paymentInfo
     * @uses PaymentInfo::setCcPayment()
     * @uses PaymentInfo::setDebitPayment()
     * @uses PaymentInfo::setAdvisedPayment()
     * @uses PaymentInfo::setPreferredPaymentType()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CcPayment[] $ccPayment
     * @param \Pggns\MidocoApi\Api\Order\StructType\DebitPayment $debitPayment
     * @param \Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment $advisedPayment
     * @param string $preferredPaymentType
     */
    public function __construct(?array $ccPayment = null, ?\Pggns\MidocoApi\Api\Order\StructType\DebitPayment $debitPayment = null, ?\Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment $advisedPayment = null, ?string $preferredPaymentType = null)
    {
        $this
            ->setCcPayment($ccPayment)
            ->setDebitPayment($debitPayment)
            ->setAdvisedPayment($advisedPayment)
            ->setPreferredPaymentType($preferredPaymentType);
    }
    /**
     * Get ccPayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CcPayment[]
     */
    public function getCcPayment(): ?array
    {
        return $this->ccPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setCcPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCcPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcPaymentForArrayConstraintsFromSetCcPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentInfoCcPaymentItem) {
            // validation for constraint: itemType
            if (!$paymentInfoCcPaymentItem instanceof \Pggns\MidocoApi\Api\Order\StructType\CcPayment) {
                $invalidValues[] = is_object($paymentInfoCcPaymentItem) ? get_class($paymentInfoCcPaymentItem) : sprintf('%s(%s)', gettype($paymentInfoCcPaymentItem), var_export($paymentInfoCcPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ccPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CcPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ccPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CcPayment[] $ccPayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\PaymentInfo
     */
    public function setCcPayment(?array $ccPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($ccPaymentArrayErrorMessage = self::validateCcPaymentForArrayConstraintsFromSetCcPayment($ccPayment))) {
            throw new InvalidArgumentException($ccPaymentArrayErrorMessage, __LINE__);
        }
        $this->ccPayment = $ccPayment;
        
        return $this;
    }
    /**
     * Add item to ccPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\CcPayment $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\PaymentInfo
     */
    public function addToCcPayment(\Pggns\MidocoApi\Api\Order\StructType\CcPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\CcPayment) {
            throw new InvalidArgumentException(sprintf('The ccPayment property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\CcPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ccPayment[] = $item;
        
        return $this;
    }
    /**
     * Get debitPayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\DebitPayment|null
     */
    public function getDebitPayment(): ?\Pggns\MidocoApi\Api\Order\StructType\DebitPayment
    {
        return $this->debitPayment;
    }
    /**
     * Set debitPayment value
     * @param \Pggns\MidocoApi\Api\Order\StructType\DebitPayment $debitPayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\PaymentInfo
     */
    public function setDebitPayment(?\Pggns\MidocoApi\Api\Order\StructType\DebitPayment $debitPayment = null): self
    {
        $this->debitPayment = $debitPayment;
        
        return $this;
    }
    /**
     * Get advisedPayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment|null
     */
    public function getAdvisedPayment(): ?\Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment
    {
        return $this->advisedPayment;
    }
    /**
     * Set advisedPayment value
     * @param \Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment $advisedPayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\PaymentInfo
     */
    public function setAdvisedPayment(?\Pggns\MidocoApi\Api\Order\StructType\AdvisedPayment $advisedPayment = null): self
    {
        $this->advisedPayment = $advisedPayment;
        
        return $this;
    }
    /**
     * Get preferredPaymentType value
     * @return string|null
     */
    public function getPreferredPaymentType(): ?string
    {
        return $this->preferredPaymentType;
    }
    /**
     * Set preferredPaymentType value
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\PaymentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\PaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $preferredPaymentType
     * @return \Pggns\MidocoApi\Api\Order\StructType\PaymentInfo
     */
    public function setPreferredPaymentType(?string $preferredPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Api\Order\EnumType\PaymentType::valueIsValid($preferredPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Api\Order\EnumType\PaymentType', is_array($preferredPaymentType) ? implode(', ', $preferredPaymentType) : var_export($preferredPaymentType, true), implode(', ', \Pggns\MidocoApi\Api\Order\EnumType\PaymentType::getValidValues())), __LINE__);
        }
        $this->preferredPaymentType = $preferredPaymentType;
        
        return $this;
    }
}