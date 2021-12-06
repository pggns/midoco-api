<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVoucherExtended StructType
 * @subpackage Structs
 */
class MidocoVoucherExtended extends VoucherDTO
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The allowPartialUse
     * @var bool|null
     */
    protected ?bool $allowPartialUse = null;
    /**
     * The forCustomer
     * @var string|null
     */
    protected ?string $forCustomer = null;
    /**
     * The fromCustomer
     * @var string|null
     */
    protected ?string $fromCustomer = null;
    /**
     * Constructor method for MidocoVoucherExtended
     * @uses MidocoVoucherExtended::setOrderNo()
     * @uses MidocoVoucherExtended::setAllowPartialUse()
     * @uses MidocoVoucherExtended::setForCustomer()
     * @uses MidocoVoucherExtended::setFromCustomer()
     * @param int $orderNo
     * @param bool $allowPartialUse
     * @param string $forCustomer
     * @param string $fromCustomer
     */
    public function __construct(?int $orderNo = null, ?bool $allowPartialUse = null, ?string $forCustomer = null, ?string $fromCustomer = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setAllowPartialUse($allowPartialUse)
            ->setForCustomer($forCustomer)
            ->setFromCustomer($fromCustomer);
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucherExtended
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
     * Get allowPartialUse value
     * @return bool|null
     */
    public function getAllowPartialUse(): ?bool
    {
        return $this->allowPartialUse;
    }
    /**
     * Set allowPartialUse value
     * @param bool $allowPartialUse
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucherExtended
     */
    public function setAllowPartialUse(?bool $allowPartialUse = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowPartialUse) && !is_bool($allowPartialUse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowPartialUse, true), gettype($allowPartialUse)), __LINE__);
        }
        $this->allowPartialUse = $allowPartialUse;
        
        return $this;
    }
    /**
     * Get forCustomer value
     * @return string|null
     */
    public function getForCustomer(): ?string
    {
        return $this->forCustomer;
    }
    /**
     * Set forCustomer value
     * @param string $forCustomer
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucherExtended
     */
    public function setForCustomer(?string $forCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($forCustomer) && !is_string($forCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forCustomer, true), gettype($forCustomer)), __LINE__);
        }
        $this->forCustomer = $forCustomer;
        
        return $this;
    }
    /**
     * Get fromCustomer value
     * @return string|null
     */
    public function getFromCustomer(): ?string
    {
        return $this->fromCustomer;
    }
    /**
     * Set fromCustomer value
     * @param string $fromCustomer
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucherExtended
     */
    public function setFromCustomer(?string $fromCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCustomer) && !is_string($fromCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCustomer, true), gettype($fromCustomer)), __LINE__);
        }
        $this->fromCustomer = $fromCustomer;
        
        return $this;
    }
}
