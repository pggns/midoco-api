<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListsBySupplierAndMonthType StructType
 * @subpackage Structs
 */
class MidocoSalesListsBySupplierAndMonthType extends AbstractStructBase
{
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
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
     * The month
     * @var string|null
     */
    protected ?string $month = null;
    /**
     * Constructor method for MidocoSalesListsBySupplierAndMonthType
     * @uses MidocoSalesListsBySupplierAndMonthType::setSupplier()
     * @uses MidocoSalesListsBySupplierAndMonthType::setSaleAmount()
     * @uses MidocoSalesListsBySupplierAndMonthType::setPercentage()
     * @uses MidocoSalesListsBySupplierAndMonthType::setPaxCount()
     * @uses MidocoSalesListsBySupplierAndMonthType::setSaleAmountPerPax()
     * @uses MidocoSalesListsBySupplierAndMonthType::setStatus()
     * @uses MidocoSalesListsBySupplierAndMonthType::setMonth()
     * @param string $supplier
     * @param float $saleAmount
     * @param float $percentage
     * @param int $paxCount
     * @param float $saleAmountPerPax
     * @param string $status
     * @param string $month
     */
    public function __construct(?string $supplier = null, ?float $saleAmount = null, ?float $percentage = null, ?int $paxCount = null, ?float $saleAmountPerPax = null, ?string $status = null, ?string $month = null)
    {
        $this
            ->setSupplier($supplier)
            ->setSaleAmount($saleAmount)
            ->setPercentage($percentage)
            ->setPaxCount($paxCount)
            ->setSaleAmountPerPax($saleAmountPerPax)
            ->setStatus($status)
            ->setMonth($month);
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType
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
     * Get month value
     * @return string|null
     */
    public function getMonth(): ?string
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param string $month
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierAndMonthType
     */
    public function setMonth(?string $month = null): self
    {
        // validation for constraint: string
        if (!is_null($month) && !is_string($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
}
