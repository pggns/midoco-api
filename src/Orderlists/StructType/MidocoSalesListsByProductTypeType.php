<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListsByProductTypeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSalesListsByProductTypeType extends AbstractStructBase
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
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * Constructor method for MidocoSalesListsByProductTypeType
     * @uses MidocoSalesListsByProductTypeType::setSupplier()
     * @uses MidocoSalesListsByProductTypeType::setSaleAmount()
     * @uses MidocoSalesListsByProductTypeType::setPercentage()
     * @uses MidocoSalesListsByProductTypeType::setPaxCount()
     * @uses MidocoSalesListsByProductTypeType::setSaleAmountPerPax()
     * @uses MidocoSalesListsByProductTypeType::setStatus()
     * @uses MidocoSalesListsByProductTypeType::setProductType()
     * @param string $supplier
     * @param float $saleAmount
     * @param float $percentage
     * @param int $paxCount
     * @param float $saleAmountPerPax
     * @param string $status
     * @param string $productType
     */
    public function __construct(?string $supplier = null, ?float $saleAmount = null, ?float $percentage = null, ?int $paxCount = null, ?float $saleAmountPerPax = null, ?string $status = null, ?string $productType = null)
    {
        $this
            ->setSupplier($supplier)
            ->setSaleAmount($saleAmount)
            ->setPercentage($percentage)
            ->setPaxCount($paxCount)
            ->setSaleAmountPerPax($saleAmountPerPax)
            ->setStatus($status)
            ->setProductType($productType);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
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
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByProductTypeType
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
}
