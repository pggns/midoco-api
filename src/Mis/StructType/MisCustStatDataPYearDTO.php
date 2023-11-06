<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCustStatDataPYearDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCustStatDataPYearDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The priceSumYear
     * @var float|null
     */
    protected ?float $priceSumYear = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * Constructor method for MisCustStatDataPYearDTO
     * @uses MisCustStatDataPYearDTO::setCustomerId()
     * @uses MisCustStatDataPYearDTO::setOrgUnit()
     * @uses MisCustStatDataPYearDTO::setPriceSumYear()
     * @uses MisCustStatDataPYearDTO::setStartDate()
     * @param int $customerId
     * @param string $orgUnit
     * @param float $priceSumYear
     * @param string $startDate
     */
    public function __construct(?int $customerId = null, ?string $orgUnit = null, ?float $priceSumYear = null, ?string $startDate = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setOrgUnit($orgUnit)
            ->setPriceSumYear($priceSumYear)
            ->setStartDate($startDate);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataPYearDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataPYearDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get priceSumYear value
     * @return float|null
     */
    public function getPriceSumYear(): ?float
    {
        return $this->priceSumYear;
    }
    /**
     * Set priceSumYear value
     * @param float $priceSumYear
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataPYearDTO
     */
    public function setPriceSumYear(?float $priceSumYear = null): self
    {
        // validation for constraint: float
        if (!is_null($priceSumYear) && !(is_float($priceSumYear) || is_numeric($priceSumYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceSumYear, true), gettype($priceSumYear)), __LINE__);
        }
        $this->priceSumYear = $priceSumYear;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataPYearDTO
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
}
