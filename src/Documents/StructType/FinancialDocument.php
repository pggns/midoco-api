<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinancialDocument StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FinancialDocument extends StandardDocument
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentNumber
     * @var int|null
     */
    protected ?int $documentNumber = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNumber
     * @var int|null
     */
    protected ?int $orderNumber = null;
    /**
     * The invoiceNumber
     * @var int|null
     */
    protected ?int $invoiceNumber = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: address
     * @var \Pggns\MidocoApi\Documents\StructType\Address|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\Address $address = null;
    /**
     * The paymentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: paymentInfo
     * @var \Pggns\MidocoApi\Documents\StructType\PaymentInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\PaymentInfo $paymentInfo = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for FinancialDocument
     * @uses FinancialDocument::setDocumentId()
     * @uses FinancialDocument::setDocumentNumber()
     * @uses FinancialDocument::setOrderId()
     * @uses FinancialDocument::setOrderNumber()
     * @uses FinancialDocument::setInvoiceNumber()
     * @uses FinancialDocument::setAddress()
     * @uses FinancialDocument::setPaymentInfo()
     * @uses FinancialDocument::setTotalPrice()
     * @uses FinancialDocument::setCurrency()
     * @param int $documentId
     * @param int $documentNumber
     * @param int $orderId
     * @param int $orderNumber
     * @param int $invoiceNumber
     * @param \Pggns\MidocoApi\Documents\StructType\Address $address
     * @param \Pggns\MidocoApi\Documents\StructType\PaymentInfo $paymentInfo
     * @param float $totalPrice
     * @param string $currency
     */
    public function __construct(?int $documentId = null, ?int $documentNumber = null, ?int $orderId = null, ?int $orderNumber = null, ?int $invoiceNumber = null, ?\Pggns\MidocoApi\Documents\StructType\Address $address = null, ?\Pggns\MidocoApi\Documents\StructType\PaymentInfo $paymentInfo = null, ?float $totalPrice = null, ?string $currency = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setDocumentNumber($documentNumber)
            ->setOrderId($orderId)
            ->setOrderNumber($orderNumber)
            ->setInvoiceNumber($invoiceNumber)
            ->setAddress($address)
            ->setPaymentInfo($paymentInfo)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency);
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get documentNumber value
     * @return int|null
     */
    public function getDocumentNumber(): ?int
    {
        return $this->documentNumber;
    }
    /**
     * Set documentNumber value
     * @param int $documentNumber
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setDocumentNumber(?int $documentNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNumber) && !(is_int($documentNumber) || ctype_digit($documentNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        $this->documentNumber = $documentNumber;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
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
    /**
     * Get orderNumber value
     * @return int|null
     */
    public function getOrderNumber(): ?int
    {
        return $this->orderNumber;
    }
    /**
     * Set orderNumber value
     * @param int $orderNumber
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setOrderNumber(?int $orderNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNumber) && !(is_int($orderNumber) || ctype_digit($orderNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->orderNumber = $orderNumber;
        
        return $this;
    }
    /**
     * Get invoiceNumber value
     * @return int|null
     */
    public function getInvoiceNumber(): ?int
    {
        return $this->invoiceNumber;
    }
    /**
     * Set invoiceNumber value
     * @param int $invoiceNumber
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setInvoiceNumber(?int $invoiceNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNumber) && !(is_int($invoiceNumber) || ctype_digit($invoiceNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->invoiceNumber = $invoiceNumber;
        
        return $this;
    }
    /**
     * Get address value
     * @return \Pggns\MidocoApi\Documents\StructType\Address|null
     */
    public function getAddress(): ?\Pggns\MidocoApi\Documents\StructType\Address
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Pggns\MidocoApi\Documents\StructType\Address $address
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setAddress(?\Pggns\MidocoApi\Documents\StructType\Address $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get paymentInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\PaymentInfo|null
     */
    public function getPaymentInfo(): ?\Pggns\MidocoApi\Documents\StructType\PaymentInfo
    {
        return $this->paymentInfo;
    }
    /**
     * Set paymentInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\PaymentInfo $paymentInfo
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setPaymentInfo(?\Pggns\MidocoApi\Documents\StructType\PaymentInfo $paymentInfo = null): self
    {
        $this->paymentInfo = $paymentInfo;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Documents\StructType\FinancialDocument
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
}
