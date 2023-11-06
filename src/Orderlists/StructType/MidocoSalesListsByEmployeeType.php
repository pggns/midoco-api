<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListsByEmployeeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSalesListsByEmployeeType extends AbstractStructBase
{
    /**
     * The employeeLogin
     * @var string|null
     */
    protected ?string $employeeLogin = null;
    /**
     * The employee
     * @var string|null
     */
    protected ?string $employee = null;
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
     * The percentageFromAllEmployees
     * @var float|null
     */
    protected ?float $percentageFromAllEmployees = null;
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
     * Constructor method for MidocoSalesListsByEmployeeType
     * @uses MidocoSalesListsByEmployeeType::setEmployeeLogin()
     * @uses MidocoSalesListsByEmployeeType::setEmployee()
     * @uses MidocoSalesListsByEmployeeType::setSupplier()
     * @uses MidocoSalesListsByEmployeeType::setSaleAmount()
     * @uses MidocoSalesListsByEmployeeType::setPercentage()
     * @uses MidocoSalesListsByEmployeeType::setPercentageFromAllEmployees()
     * @uses MidocoSalesListsByEmployeeType::setPaxCount()
     * @uses MidocoSalesListsByEmployeeType::setSaleAmountPerPax()
     * @uses MidocoSalesListsByEmployeeType::setStatus()
     * @uses MidocoSalesListsByEmployeeType::setContributionMargin()
     * @uses MidocoSalesListsByEmployeeType::setNetSaleAmount()
     * @uses MidocoSalesListsByEmployeeType::setUnitName()
     * @uses MidocoSalesListsByEmployeeType::setAlternativeUnitName()
     * @param string $employeeLogin
     * @param string $employee
     * @param string $supplier
     * @param float $saleAmount
     * @param float $percentage
     * @param float $percentageFromAllEmployees
     * @param int $paxCount
     * @param float $saleAmountPerPax
     * @param string $status
     * @param float $contributionMargin
     * @param float $netSaleAmount
     * @param string $unitName
     * @param string $alternativeUnitName
     */
    public function __construct(?string $employeeLogin = null, ?string $employee = null, ?string $supplier = null, ?float $saleAmount = null, ?float $percentage = null, ?float $percentageFromAllEmployees = null, ?int $paxCount = null, ?float $saleAmountPerPax = null, ?string $status = null, ?float $contributionMargin = null, ?float $netSaleAmount = null, ?string $unitName = null, ?string $alternativeUnitName = null)
    {
        $this
            ->setEmployeeLogin($employeeLogin)
            ->setEmployee($employee)
            ->setSupplier($supplier)
            ->setSaleAmount($saleAmount)
            ->setPercentage($percentage)
            ->setPercentageFromAllEmployees($percentageFromAllEmployees)
            ->setPaxCount($paxCount)
            ->setSaleAmountPerPax($saleAmountPerPax)
            ->setStatus($status)
            ->setContributionMargin($contributionMargin)
            ->setNetSaleAmount($netSaleAmount)
            ->setUnitName($unitName)
            ->setAlternativeUnitName($alternativeUnitName);
    }
    /**
     * Get employeeLogin value
     * @return string|null
     */
    public function getEmployeeLogin(): ?string
    {
        return $this->employeeLogin;
    }
    /**
     * Set employeeLogin value
     * @param string $employeeLogin
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
     */
    public function setEmployeeLogin(?string $employeeLogin = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeLogin) && !is_string($employeeLogin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeLogin, true), gettype($employeeLogin)), __LINE__);
        }
        $this->employeeLogin = $employeeLogin;
        
        return $this;
    }
    /**
     * Get employee value
     * @return string|null
     */
    public function getEmployee(): ?string
    {
        return $this->employee;
    }
    /**
     * Set employee value
     * @param string $employee
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
     */
    public function setEmployee(?string $employee = null): self
    {
        // validation for constraint: string
        if (!is_null($employee) && !is_string($employee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee, true), gettype($employee)), __LINE__);
        }
        $this->employee = $employee;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * Get percentageFromAllEmployees value
     * @return float|null
     */
    public function getPercentageFromAllEmployees(): ?float
    {
        return $this->percentageFromAllEmployees;
    }
    /**
     * Set percentageFromAllEmployees value
     * @param float $percentageFromAllEmployees
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
     */
    public function setPercentageFromAllEmployees(?float $percentageFromAllEmployees = null): self
    {
        // validation for constraint: float
        if (!is_null($percentageFromAllEmployees) && !(is_float($percentageFromAllEmployees) || is_numeric($percentageFromAllEmployees))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentageFromAllEmployees, true), gettype($percentageFromAllEmployees)), __LINE__);
        }
        $this->percentageFromAllEmployees = $percentageFromAllEmployees;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
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
