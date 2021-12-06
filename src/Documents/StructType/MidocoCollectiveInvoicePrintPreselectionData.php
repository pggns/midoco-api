<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCollectiveInvoicePrintPreselectionData StructType
 * @subpackage Structs
 */
class MidocoCollectiveInvoicePrintPreselectionData extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The email
     * @var bool|null
     */
    protected ?bool $email = null;
    /**
     * Constructor method for MidocoCollectiveInvoicePrintPreselectionData
     * @uses MidocoCollectiveInvoicePrintPreselectionData::setOrderNo()
     * @uses MidocoCollectiveInvoicePrintPreselectionData::setOrderId()
     * @uses MidocoCollectiveInvoicePrintPreselectionData::setCustomerId()
     * @uses MidocoCollectiveInvoicePrintPreselectionData::setCustomerName()
     * @uses MidocoCollectiveInvoicePrintPreselectionData::setPrice()
     * @uses MidocoCollectiveInvoicePrintPreselectionData::setEmail()
     * @param int $orderNo
     * @param int $orderId
     * @param int $customerId
     * @param string $customerName
     * @param float $price
     * @param bool $email
     */
    public function __construct(?int $orderNo = null, ?int $orderId = null, ?int $customerId = null, ?string $customerName = null, ?float $price = null, ?bool $email = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setOrderId($orderId)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setPrice($price)
            ->setEmail($email);
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveInvoicePrintPreselectionData
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveInvoicePrintPreselectionData
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveInvoicePrintPreselectionData
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveInvoicePrintPreselectionData
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveInvoicePrintPreselectionData
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get email value
     * @return bool|null
     */
    public function getEmail(): ?bool
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param bool $email
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveInvoicePrintPreselectionData
     */
    public function setEmail(?bool $email = null): self
    {
        // validation for constraint: boolean
        if (!is_null($email) && !is_bool($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
