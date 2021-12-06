<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemPrintSelect StructType
 * @subpackage Structs
 */
class SellItemPrintSelect extends AbstractStructBase
{
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * The needsInvoicePrint
     * @var bool|null
     */
    protected ?bool $needsInvoicePrint = null;
    /**
     * The editable
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $editable = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The sellingMode
     * @var int|null
     */
    protected ?int $sellingMode = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * Constructor method for SellItemPrintSelect
     * @uses SellItemPrintSelect::setConfirmationGroup()
     * @uses SellItemPrintSelect::setSelected()
     * @uses SellItemPrintSelect::setNeedsInvoicePrint()
     * @uses SellItemPrintSelect::setEditable()
     * @uses SellItemPrintSelect::setItemId()
     * @uses SellItemPrintSelect::setType()
     * @uses SellItemPrintSelect::setSellingMode()
     * @uses SellItemPrintSelect::setStatus()
     * @uses SellItemPrintSelect::setSupplierId()
     * @uses SellItemPrintSelect::setBookingId()
     * @uses SellItemPrintSelect::setTotalPrice()
     * @param string $confirmationGroup
     * @param bool $selected
     * @param bool $needsInvoicePrint
     * @param bool $editable
     * @param int $itemId
     * @param string $type
     * @param int $sellingMode
     * @param string $status
     * @param string $supplierId
     * @param string $bookingId
     * @param float $totalPrice
     */
    public function __construct(?string $confirmationGroup = null, ?bool $selected = null, ?bool $needsInvoicePrint = null, ?bool $editable = true, ?int $itemId = null, ?string $type = null, ?int $sellingMode = null, ?string $status = null, ?string $supplierId = null, ?string $bookingId = null, ?float $totalPrice = null)
    {
        $this
            ->setConfirmationGroup($confirmationGroup)
            ->setSelected($selected)
            ->setNeedsInvoicePrint($needsInvoicePrint)
            ->setEditable($editable)
            ->setItemId($itemId)
            ->setType($type)
            ->setSellingMode($sellingMode)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setTotalPrice($totalPrice);
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
        return $this;
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        
        return $this;
    }
    /**
     * Get needsInvoicePrint value
     * @return bool|null
     */
    public function getNeedsInvoicePrint(): ?bool
    {
        return $this->needsInvoicePrint;
    }
    /**
     * Set needsInvoicePrint value
     * @param bool $needsInvoicePrint
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setNeedsInvoicePrint(?bool $needsInvoicePrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsInvoicePrint) && !is_bool($needsInvoicePrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsInvoicePrint, true), gettype($needsInvoicePrint)), __LINE__);
        }
        $this->needsInvoicePrint = $needsInvoicePrint;
        
        return $this;
    }
    /**
     * Get editable value
     * @return bool|null
     */
    public function getEditable(): ?bool
    {
        return $this->editable;
    }
    /**
     * Set editable value
     * @param bool $editable
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setEditable(?bool $editable = true): self
    {
        // validation for constraint: boolean
        if (!is_null($editable) && !is_bool($editable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editable, true), gettype($editable)), __LINE__);
        }
        $this->editable = $editable;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get sellingMode value
     * @return int|null
     */
    public function getSellingMode(): ?int
    {
        return $this->sellingMode;
    }
    /**
     * Set sellingMode value
     * @param int $sellingMode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setSellingMode(?int $sellingMode = null): self
    {
        // validation for constraint: int
        if (!is_null($sellingMode) && !(is_int($sellingMode) || ctype_digit($sellingMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellingMode, true), gettype($sellingMode)), __LINE__);
        }
        $this->sellingMode = $sellingMode;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
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
}
