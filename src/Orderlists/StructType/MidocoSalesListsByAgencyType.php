<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListsByAgencyType StructType
 * @subpackage Structs
 */
class MidocoSalesListsByAgencyType extends AbstractStructBase
{
    /**
     * The agency
     * @var string|null
     */
    protected ?string $agency = null;
    /**
     * The agencyName
     * @var string|null
     */
    protected ?string $agencyName = null;
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
     * The percentageFromAllAgencies
     * @var float|null
     */
    protected ?float $percentageFromAllAgencies = null;
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
     * Constructor method for MidocoSalesListsByAgencyType
     * @uses MidocoSalesListsByAgencyType::setAgency()
     * @uses MidocoSalesListsByAgencyType::setAgencyName()
     * @uses MidocoSalesListsByAgencyType::setSupplier()
     * @uses MidocoSalesListsByAgencyType::setSaleAmount()
     * @uses MidocoSalesListsByAgencyType::setPercentage()
     * @uses MidocoSalesListsByAgencyType::setPercentageFromAllAgencies()
     * @uses MidocoSalesListsByAgencyType::setPaxCount()
     * @uses MidocoSalesListsByAgencyType::setSaleAmountPerPax()
     * @uses MidocoSalesListsByAgencyType::setStatus()
     * @param string $agency
     * @param string $agencyName
     * @param string $supplier
     * @param float $saleAmount
     * @param float $percentage
     * @param float $percentageFromAllAgencies
     * @param int $paxCount
     * @param float $saleAmountPerPax
     * @param string $status
     */
    public function __construct(?string $agency = null, ?string $agencyName = null, ?string $supplier = null, ?float $saleAmount = null, ?float $percentage = null, ?float $percentageFromAllAgencies = null, ?int $paxCount = null, ?float $saleAmountPerPax = null, ?string $status = null)
    {
        $this
            ->setAgency($agency)
            ->setAgencyName($agencyName)
            ->setSupplier($supplier)
            ->setSaleAmount($saleAmount)
            ->setPercentage($percentage)
            ->setPercentageFromAllAgencies($percentageFromAllAgencies)
            ->setPaxCount($paxCount)
            ->setSaleAmountPerPax($saleAmountPerPax)
            ->setStatus($status);
    }
    /**
     * Get agency value
     * @return string|null
     */
    public function getAgency(): ?string
    {
        return $this->agency;
    }
    /**
     * Set agency value
     * @param string $agency
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
     */
    public function setAgency(?string $agency = null): self
    {
        // validation for constraint: string
        if (!is_null($agency) && !is_string($agency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agency, true), gettype($agency)), __LINE__);
        }
        $this->agency = $agency;
        
        return $this;
    }
    /**
     * Get agencyName value
     * @return string|null
     */
    public function getAgencyName(): ?string
    {
        return $this->agencyName;
    }
    /**
     * Set agencyName value
     * @param string $agencyName
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
     */
    public function setAgencyName(?string $agencyName = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyName) && !is_string($agencyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyName, true), gettype($agencyName)), __LINE__);
        }
        $this->agencyName = $agencyName;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
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
     * Get percentageFromAllAgencies value
     * @return float|null
     */
    public function getPercentageFromAllAgencies(): ?float
    {
        return $this->percentageFromAllAgencies;
    }
    /**
     * Set percentageFromAllAgencies value
     * @param float $percentageFromAllAgencies
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
     */
    public function setPercentageFromAllAgencies(?float $percentageFromAllAgencies = null): self
    {
        // validation for constraint: float
        if (!is_null($percentageFromAllAgencies) && !(is_float($percentageFromAllAgencies) || is_numeric($percentageFromAllAgencies))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentageFromAllAgencies, true), gettype($percentageFromAllAgencies)), __LINE__);
        }
        $this->percentageFromAllAgencies = $percentageFromAllAgencies;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListsByAgencyType
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
