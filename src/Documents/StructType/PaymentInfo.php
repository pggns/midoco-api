<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentInfo extends AbstractStructBase
{
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The creditCardType
     * @var string|null
     */
    protected ?string $creditCardType = null;
    /**
     * The maskCreditCardNumber
     * @var string|null
     */
    protected ?string $maskCreditCardNumber = null;
    /**
     * The IBAN
     * @var string|null
     */
    protected ?string $IBAN = null;
    /**
     * Constructor method for paymentInfo
     * @uses PaymentInfo::setPaymentType()
     * @uses PaymentInfo::setCreditCardType()
     * @uses PaymentInfo::setMaskCreditCardNumber()
     * @uses PaymentInfo::setIBAN()
     * @param string $paymentType
     * @param string $creditCardType
     * @param string $maskCreditCardNumber
     * @param string $iBAN
     */
    public function __construct(?string $paymentType = null, ?string $creditCardType = null, ?string $maskCreditCardNumber = null, ?string $iBAN = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setCreditCardType($creditCardType)
            ->setMaskCreditCardNumber($maskCreditCardNumber)
            ->setIBAN($iBAN);
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Documents\StructType\PaymentInfo
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get creditCardType value
     * @return string|null
     */
    public function getCreditCardType(): ?string
    {
        return $this->creditCardType;
    }
    /**
     * Set creditCardType value
     * @param string $creditCardType
     * @return \Pggns\MidocoApi\Documents\StructType\PaymentInfo
     */
    public function setCreditCardType(?string $creditCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardType) && !is_string($creditCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardType, true), gettype($creditCardType)), __LINE__);
        }
        $this->creditCardType = $creditCardType;
        
        return $this;
    }
    /**
     * Get maskCreditCardNumber value
     * @return string|null
     */
    public function getMaskCreditCardNumber(): ?string
    {
        return $this->maskCreditCardNumber;
    }
    /**
     * Set maskCreditCardNumber value
     * @param string $maskCreditCardNumber
     * @return \Pggns\MidocoApi\Documents\StructType\PaymentInfo
     */
    public function setMaskCreditCardNumber(?string $maskCreditCardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($maskCreditCardNumber) && !is_string($maskCreditCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maskCreditCardNumber, true), gettype($maskCreditCardNumber)), __LINE__);
        }
        $this->maskCreditCardNumber = $maskCreditCardNumber;
        
        return $this;
    }
    /**
     * Get IBAN value
     * @return string|null
     */
    public function getIBAN(): ?string
    {
        return $this->IBAN;
    }
    /**
     * Set IBAN value
     * @param string $iBAN
     * @return \Pggns\MidocoApi\Documents\StructType\PaymentInfo
     */
    public function setIBAN(?string $iBAN = null): self
    {
        // validation for constraint: string
        if (!is_null($iBAN) && !is_string($iBAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iBAN, true), gettype($iBAN)), __LINE__);
        }
        $this->IBAN = $iBAN;
        
        return $this;
    }
}
