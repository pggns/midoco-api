<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListsBySupplierGroupType StructType
 * @subpackage Structs
 */
class MidocoSalesListsBySupplierGroupType extends AbstractStructBase
{
    /**
     * The supplierGroup
     * @var string|null
     */
    protected ?string $supplierGroup = null;
    /**
     * The saleAmount
     * @var float|null
     */
    protected ?float $saleAmount = null;
    /**
     * The percentage
     * @var float|null
     */
    protected ?float $percentage = null;
    /**
     * The paxCount
     * @var int|null
     */
    protected ?int $paxCount = null;
    /**
     * The saleAmountPerPax
     * @var float|null
     */
    protected ?float $saleAmountPerPax = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for MidocoSalesListsBySupplierGroupType
     * @uses MidocoSalesListsBySupplierGroupType::setSupplierGroup()
     * @uses MidocoSalesListsBySupplierGroupType::setSaleAmount()
     * @uses MidocoSalesListsBySupplierGroupType::setPercentage()
     * @uses MidocoSalesListsBySupplierGroupType::setPaxCount()
     * @uses MidocoSalesListsBySupplierGroupType::setSaleAmountPerPax()
     * @uses MidocoSalesListsBySupplierGroupType::setStatus()
     * @param string $supplierGroup
     * @param float $saleAmount
     * @param float $percentage
     * @param int $paxCount
     * @param float $saleAmountPerPax
     * @param string $status
     */
    public function __construct(?string $supplierGroup = null, ?float $saleAmount = null, ?float $percentage = null, ?int $paxCount = null, ?float $saleAmountPerPax = null, ?string $status = null)
    {
        $this
            ->setSupplierGroup($supplierGroup)
            ->setSaleAmount($saleAmount)
            ->setPercentage($percentage)
            ->setPaxCount($paxCount)
            ->setSaleAmountPerPax($saleAmountPerPax)
            ->setStatus($status);
    }
    /**
     * Get supplierGroup value
     * @return string|null
     */
    public function getSupplierGroup(): ?string
    {
        return $this->supplierGroup;
    }
    /**
     * Set supplierGroup value
     * @param string $supplierGroup
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierGroupType
     */
    public function setSupplierGroup(?string $supplierGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierGroup) && !is_string($supplierGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierGroup, true), gettype($supplierGroup)), __LINE__);
        }
        $this->supplierGroup = $supplierGroup;
        
        return $this;
    }
    /**
     * Get saleAmount value
     * @return float|null
     */
    public function getSaleAmount(): ?float
    {
        return $this->saleAmount;
    }
    /**
     * Set saleAmount value
     * @param float $saleAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierGroupType
     */
    public function setSaleAmount(?float $saleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($saleAmount) && !(is_float($saleAmount) || is_numeric($saleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($saleAmount, true), gettype($saleAmount)), __LINE__);
        }
        $this->saleAmount = $saleAmount;
        
        return $this;
    }
    /**
     * Get percentage value
     * @return float|null
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }
    /**
     * Set percentage value
     * @param float $percentage
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierGroupType
     */
    public function setPercentage(?float $percentage = null): self
    {
        // validation for constraint: float
        if (!is_null($percentage) && !(is_float($percentage) || is_numeric($percentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        $this->percentage = $percentage;
        
        return $this;
    }
    /**
     * Get paxCount value
     * @return int|null
     */
    public function getPaxCount(): ?int
    {
        return $this->paxCount;
    }
    /**
     * Set paxCount value
     * @param int $paxCount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierGroupType
     */
    public function setPaxCount(?int $paxCount = null): self
    {
        // validation for constraint: int
        if (!is_null($paxCount) && !(is_int($paxCount) || ctype_digit($paxCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxCount, true), gettype($paxCount)), __LINE__);
        }
        $this->paxCount = $paxCount;
        
        return $this;
    }
    /**
     * Get saleAmountPerPax value
     * @return float|null
     */
    public function getSaleAmountPerPax(): ?float
    {
        return $this->saleAmountPerPax;
    }
    /**
     * Set saleAmountPerPax value
     * @param float $saleAmountPerPax
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierGroupType
     */
    public function setSaleAmountPerPax(?float $saleAmountPerPax = null): self
    {
        // validation for constraint: float
        if (!is_null($saleAmountPerPax) && !(is_float($saleAmountPerPax) || is_numeric($saleAmountPerPax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($saleAmountPerPax, true), gettype($saleAmountPerPax)), __LINE__);
        }
        $this->saleAmountPerPax = $saleAmountPerPax;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsBySupplierGroupType
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
}
