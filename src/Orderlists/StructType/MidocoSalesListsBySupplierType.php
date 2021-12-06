<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListsBySupplierType StructType
 * @subpackage Structs
 */
class MidocoSalesListsBySupplierType extends AbstractStructBase
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
     * The contributionMargin
     * @var float|null
     */
    protected ?float $contributionMargin = null;
    /**
     * The netSaleAmount
     * @var float|null
     */
    protected ?float $netSaleAmount = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The alternativeUnitName
     * @var string|null
     */
    protected ?string $alternativeUnitName = null;
    /**
     * Constructor method for MidocoSalesListsBySupplierType
     * @uses MidocoSalesListsBySupplierType::setSupplier()
     * @uses MidocoSalesListsBySupplierType::setSaleAmount()
     * @uses MidocoSalesListsBySupplierType::setPercentage()
     * @uses MidocoSalesListsBySupplierType::setPaxCount()
     * @uses MidocoSalesListsBySupplierType::setSaleAmountPerPax()
     * @uses MidocoSalesListsBySupplierType::setStatus()
     * @uses MidocoSalesListsBySupplierType::setContributionMargin()
     * @uses MidocoSalesListsBySupplierType::setNetSaleAmount()
     * @uses MidocoSalesListsBySupplierType::setUnitName()
     * @uses MidocoSalesListsBySupplierType::setAlternativeUnitName()
     * @param string $supplier
     * @param float $saleAmount
     * @param float $percentage
     * @param int $paxCount
     * @param float $saleAmountPerPax
     * @param string $status
     * @param float $contributionMargin
     * @param float $netSaleAmount
     * @param string $unitName
     * @param string $alternativeUnitName
     */
    public function __construct(?string $supplier = null, ?float $saleAmount = null, ?float $percentage = null, ?int $paxCount = null, ?float $saleAmountPerPax = null, ?string $status = null, ?float $contributionMargin = null, ?float $netSaleAmount = null, ?string $unitName = null, ?string $alternativeUnitName = null)
    {
        $this
            ->setSupplier($supplier)
            ->setSaleAmount($saleAmount)
            ->setPercentage($percentage)
            ->setPaxCount($paxCount)
            ->setSaleAmountPerPax($saleAmountPerPax)
            ->setStatus($status)
            ->setContributionMargin($contributionMargin)
            ->setNetSaleAmount($netSaleAmount)
            ->setUnitName($unitName)
            ->setAlternativeUnitName($alternativeUnitName);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
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
     * Get contributionMargin value
     * @return float|null
     */
    public function getContributionMargin(): ?float
    {
        return $this->contributionMargin;
    }
    /**
     * Set contributionMargin value
     * @param float $contributionMargin
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
     */
    public function setContributionMargin(?float $contributionMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($contributionMargin) && !(is_float($contributionMargin) || is_numeric($contributionMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($contributionMargin, true), gettype($contributionMargin)), __LINE__);
        }
        $this->contributionMargin = $contributionMargin;
        
        return $this;
    }
    /**
     * Get netSaleAmount value
     * @return float|null
     */
    public function getNetSaleAmount(): ?float
    {
        return $this->netSaleAmount;
    }
    /**
     * Set netSaleAmount value
     * @param float $netSaleAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
     */
    public function setNetSaleAmount(?float $netSaleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($netSaleAmount) && !(is_float($netSaleAmount) || is_numeric($netSaleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netSaleAmount, true), gettype($netSaleAmount)), __LINE__);
        }
        $this->netSaleAmount = $netSaleAmount;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get alternativeUnitName value
     * @return string|null
     */
    public function getAlternativeUnitName(): ?string
    {
        return $this->alternativeUnitName;
    }
    /**
     * Set alternativeUnitName value
     * @param string $alternativeUnitName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierType
     */
    public function setAlternativeUnitName(?string $alternativeUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($alternativeUnitName) && !is_string($alternativeUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternativeUnitName, true), gettype($alternativeUnitName)), __LINE__);
        }
        $this->alternativeUnitName = $alternativeUnitName;
        
        return $this;
    }
}
