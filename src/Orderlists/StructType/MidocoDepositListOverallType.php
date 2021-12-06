<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDepositListOverallType StructType
 * @subpackage Structs
 */
class MidocoDepositListOverallType extends AbstractStructBase
{
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The payedAmount
     * @var float|null
     */
    protected ?float $payedAmount = null;
    /**
     * Constructor method for MidocoDepositListOverallType
     * @uses MidocoDepositListOverallType::setOrgUnit()
     * @uses MidocoDepositListOverallType::setInvoicedAmount()
     * @uses MidocoDepositListOverallType::setPayedAmount()
     * @param string $orgUnit
     * @param float $invoicedAmount
     * @param float $payedAmount
     */
    public function __construct(?string $orgUnit = null, ?float $invoicedAmount = null, ?float $payedAmount = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setInvoicedAmount($invoicedAmount)
            ->setPayedAmount($payedAmount);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType
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
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
        return $this;
    }
    /**
     * Get payedAmount value
     * @return float|null
     */
    public function getPayedAmount(): ?float
    {
        return $this->payedAmount;
    }
    /**
     * Set payedAmount value
     * @param float $payedAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType
     */
    public function setPayedAmount(?float $payedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($payedAmount) && !(is_float($payedAmount) || is_numeric($payedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payedAmount, true), gettype($payedAmount)), __LINE__);
        }
        $this->payedAmount = $payedAmount;
        
        return $this;
    }
}
