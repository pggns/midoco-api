<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierAgencySettlement StructType
 * @subpackage Structs
 */
class MidocoSupplierAgencySettlement extends SupplierAgencySettlementDTO
{
    /**
     * The statusChecked
     * @var string|null
     */
    protected ?string $statusChecked = null;
    /**
     * The statusBooked
     * @var string|null
     */
    protected ?string $statusBooked = null;
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
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * Constructor method for MidocoSupplierAgencySettlement
     * @uses MidocoSupplierAgencySettlement::setStatusChecked()
     * @uses MidocoSupplierAgencySettlement::setStatusBooked()
     * @uses MidocoSupplierAgencySettlement::setStatus()
     * @uses MidocoSupplierAgencySettlement::setSupplierId()
     * @uses MidocoSupplierAgencySettlement::setChecked()
     * @param string $statusChecked
     * @param string $statusBooked
     * @param string $status
     * @param string $supplierId
     * @param bool $checked
     */
    public function __construct(?string $statusChecked = null, ?string $statusBooked = null, ?string $status = null, ?string $supplierId = null, ?bool $checked = null)
    {
        $this
            ->setStatusChecked($statusChecked)
            ->setStatusBooked($statusBooked)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setChecked($checked);
    }
    /**
     * Get statusChecked value
     * @return string|null
     */
    public function getStatusChecked(): ?string
    {
        return $this->statusChecked;
    }
    /**
     * Set statusChecked value
     * @param string $statusChecked
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement
     */
    public function setStatusChecked(?string $statusChecked = null): self
    {
        // validation for constraint: string
        if (!is_null($statusChecked) && !is_string($statusChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusChecked, true), gettype($statusChecked)), __LINE__);
        }
        $this->statusChecked = $statusChecked;
        
        return $this;
    }
    /**
     * Get statusBooked value
     * @return string|null
     */
    public function getStatusBooked(): ?string
    {
        return $this->statusBooked;
    }
    /**
     * Set statusBooked value
     * @param string $statusBooked
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement
     */
    public function setStatusBooked(?string $statusBooked = null): self
    {
        // validation for constraint: string
        if (!is_null($statusBooked) && !is_string($statusBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusBooked, true), gettype($statusBooked)), __LINE__);
        }
        $this->statusBooked = $statusBooked;
        
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement
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
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSupplierAgencySettlement
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
}
