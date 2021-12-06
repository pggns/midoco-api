<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDocument StructType
 * @subpackage Structs
 */
class OrderDocument extends StandardDocument
{
    /**
     * The OrderDocumentId
     * @var int|null
     */
    protected ?int $OrderDocumentId = null;
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
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: address
     * @var \Pggns\MidocoApi\Documents\StructType\Address|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\Address $address = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The startTravelDate
     * @var string|null
     */
    protected ?string $startTravelDate = null;
    /**
     * The endTravelDate
     * @var string|null
     */
    protected ?string $endTravelDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for OrderDocument
     * @uses OrderDocument::setOrderDocumentId()
     * @uses OrderDocument::setOrderId()
     * @uses OrderDocument::setOrderNumber()
     * @uses OrderDocument::setAddress()
     * @uses OrderDocument::setBookingId()
     * @uses OrderDocument::setStartTravelDate()
     * @uses OrderDocument::setEndTravelDate()
     * @uses OrderDocument::setSupplierId()
     * @param int $orderDocumentId
     * @param int $orderId
     * @param int $orderNumber
     * @param \Pggns\MidocoApi\Documents\StructType\Address $address
     * @param string $bookingId
     * @param string $startTravelDate
     * @param string $endTravelDate
     * @param string $supplierId
     */
    public function __construct(?int $orderDocumentId = null, ?int $orderId = null, ?int $orderNumber = null, ?\Pggns\MidocoApi\Documents\StructType\Address $address = null, ?string $bookingId = null, ?string $startTravelDate = null, ?string $endTravelDate = null, ?string $supplierId = null)
    {
        $this
            ->setOrderDocumentId($orderDocumentId)
            ->setOrderId($orderId)
            ->setOrderNumber($orderNumber)
            ->setAddress($address)
            ->setBookingId($bookingId)
            ->setStartTravelDate($startTravelDate)
            ->setEndTravelDate($endTravelDate)
            ->setSupplierId($supplierId);
    }
    /**
     * Get OrderDocumentId value
     * @return int|null
     */
    public function getOrderDocumentId(): ?int
    {
        return $this->OrderDocumentId;
    }
    /**
     * Set OrderDocumentId value
     * @param int $orderDocumentId
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
     */
    public function setOrderDocumentId(?int $orderDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderDocumentId) && !(is_int($orderDocumentId) || ctype_digit($orderDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderDocumentId, true), gettype($orderDocumentId)), __LINE__);
        }
        $this->OrderDocumentId = $orderDocumentId;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
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
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
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
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
     */
    public function setAddress(?\Pggns\MidocoApi\Documents\StructType\Address $address = null): self
    {
        $this->address = $address;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get startTravelDate value
     * @return string|null
     */
    public function getStartTravelDate(): ?string
    {
        return $this->startTravelDate;
    }
    /**
     * Set startTravelDate value
     * @param string $startTravelDate
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
     */
    public function setStartTravelDate(?string $startTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelDate) && !is_string($startTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelDate, true), gettype($startTravelDate)), __LINE__);
        }
        $this->startTravelDate = $startTravelDate;
        
        return $this;
    }
    /**
     * Get endTravelDate value
     * @return string|null
     */
    public function getEndTravelDate(): ?string
    {
        return $this->endTravelDate;
    }
    /**
     * Set endTravelDate value
     * @param string $endTravelDate
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
     */
    public function setEndTravelDate(?string $endTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelDate) && !is_string($endTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelDate, true), gettype($endTravelDate)), __LINE__);
        }
        $this->endTravelDate = $endTravelDate;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Documents\StructType\OrderDocument
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
