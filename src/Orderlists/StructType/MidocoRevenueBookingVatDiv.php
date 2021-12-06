<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRevenueBookingVatDiv StructType
 * @subpackage Structs
 */
class MidocoRevenueBookingVatDiv extends RevenueBookingVatDivDTO
{
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The bruttoAmount
     * @var float|null
     */
    protected ?float $bruttoAmount = null;
    /**
     * Constructor method for MidocoRevenueBookingVatDiv
     * @uses MidocoRevenueBookingVatDiv::setNettoAmount()
     * @uses MidocoRevenueBookingVatDiv::setVatAmount()
     * @uses MidocoRevenueBookingVatDiv::setBruttoAmount()
     * @param float $nettoAmount
     * @param float $vatAmount
     * @param float $bruttoAmount
     */
    public function __construct(?float $nettoAmount = null, ?float $vatAmount = null, ?float $bruttoAmount = null)
    {
        $this
            ->setNettoAmount($nettoAmount)
            ->setVatAmount($vatAmount)
            ->setBruttoAmount($bruttoAmount);
    }
    /**
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoRevenueBookingVatDiv
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoRevenueBookingVatDiv
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get bruttoAmount value
     * @return float|null
     */
    public function getBruttoAmount(): ?float
    {
        return $this->bruttoAmount;
    }
    /**
     * Set bruttoAmount value
     * @param float $bruttoAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoRevenueBookingVatDiv
     */
    public function setBruttoAmount(?float $bruttoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bruttoAmount) && !(is_float($bruttoAmount) || is_numeric($bruttoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bruttoAmount, true), gettype($bruttoAmount)), __LINE__);
        }
        $this->bruttoAmount = $bruttoAmount;
        
        return $this;
    }
}
