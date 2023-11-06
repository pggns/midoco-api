<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoucherInfo extends AbstractStructBase
{
    /**
     * The voucherId
     * @var string|null
     */
    protected ?string $voucherId = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The expiryDate
     * @var string|null
     */
    protected ?string $expiryDate = null;
    /**
     * Constructor method for VoucherInfo
     * @uses VoucherInfo::setVoucherId()
     * @uses VoucherInfo::setSecurityCode()
     * @uses VoucherInfo::setSupplierId()
     * @uses VoucherInfo::setExpiryDate()
     * @param string $voucherId
     * @param string $securityCode
     * @param string $supplierId
     * @param string $expiryDate
     */
    public function __construct(?string $voucherId = null, ?string $securityCode = null, ?string $supplierId = null, ?string $expiryDate = null)
    {
        $this
            ->setVoucherId($voucherId)
            ->setSecurityCode($securityCode)
            ->setSupplierId($supplierId)
            ->setExpiryDate($expiryDate);
    }
    /**
     * Get voucherId value
     * @return string|null
     */
    public function getVoucherId(): ?string
    {
        return $this->voucherId;
    }
    /**
     * Set voucherId value
     * @param string $voucherId
     * @return \Pggns\MidocoApi\Booking\StructType\VoucherInfo
     */
    public function setVoucherId(?string $voucherId = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherId) && !is_string($voucherId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherId, true), gettype($voucherId)), __LINE__);
        }
        $this->voucherId = $voucherId;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $securityCode
     * @return \Pggns\MidocoApi\Booking\StructType\VoucherInfo
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
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
     * @return \Pggns\MidocoApi\Booking\StructType\VoucherInfo
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
     * Get expiryDate value
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }
    /**
     * Set expiryDate value
     * @param string $expiryDate
     * @return \Pggns\MidocoApi\Booking\StructType\VoucherInfo
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->expiryDate = $expiryDate;
        
        return $this;
    }
}
