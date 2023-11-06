<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVatReconciliationType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoVatReconciliationType extends AbstractStructBase
{
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatDescription
     * @var string|null
     */
    protected ?string $vatDescription = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The bookingPeriod
     * @var int|null
     */
    protected ?int $bookingPeriod = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The account
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * The bookingAmount
     * @var float|null
     */
    protected ?float $bookingAmount = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * Constructor method for MidocoVatReconciliationType
     * @uses MidocoVatReconciliationType::setVatCode()
     * @uses MidocoVatReconciliationType::setVatDescription()
     * @uses MidocoVatReconciliationType::setVatPercent()
     * @uses MidocoVatReconciliationType::setBookingPeriod()
     * @uses MidocoVatReconciliationType::setBookingYear()
     * @uses MidocoVatReconciliationType::setAccount()
     * @uses MidocoVatReconciliationType::setBookingAmount()
     * @uses MidocoVatReconciliationType::setVatAmount()
     * @param string $vatCode
     * @param string $vatDescription
     * @param float $vatPercent
     * @param int $bookingPeriod
     * @param int $bookingYear
     * @param string $account
     * @param float $bookingAmount
     * @param float $vatAmount
     */
    public function __construct(?string $vatCode = null, ?string $vatDescription = null, ?float $vatPercent = null, ?int $bookingPeriod = null, ?int $bookingYear = null, ?string $account = null, ?float $bookingAmount = null, ?float $vatAmount = null)
    {
        $this
            ->setVatCode($vatCode)
            ->setVatDescription($vatDescription)
            ->setVatPercent($vatPercent)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingYear($bookingYear)
            ->setAccount($account)
            ->setBookingAmount($bookingAmount)
            ->setVatAmount($vatAmount);
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get vatDescription value
     * @return string|null
     */
    public function getVatDescription(): ?string
    {
        return $this->vatDescription;
    }
    /**
     * Set vatDescription value
     * @param string $vatDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
     */
    public function setVatDescription(?string $vatDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($vatDescription) && !is_string($vatDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatDescription, true), gettype($vatDescription)), __LINE__);
        }
        $this->vatDescription = $vatDescription;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
    /**
     * Get bookingPeriod value
     * @return int|null
     */
    public function getBookingPeriod(): ?int
    {
        return $this->bookingPeriod;
    }
    /**
     * Set bookingPeriod value
     * @param int $bookingPeriod
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
     */
    public function setBookingPeriod(?int $bookingPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriod) && !(is_int($bookingPeriod) || ctype_digit($bookingPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriod, true), gettype($bookingPeriod)), __LINE__);
        }
        $this->bookingPeriod = $bookingPeriod;
        
        return $this;
    }
    /**
     * Get bookingYear value
     * @return int|null
     */
    public function getBookingYear(): ?int
    {
        return $this->bookingYear;
    }
    /**
     * Set bookingYear value
     * @param int $bookingYear
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
     */
    public function setBookingYear(?int $bookingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYear) && !(is_int($bookingYear) || ctype_digit($bookingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYear, true), gettype($bookingYear)), __LINE__);
        }
        $this->bookingYear = $bookingYear;
        
        return $this;
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
        return $this;
    }
    /**
     * Get bookingAmount value
     * @return float|null
     */
    public function getBookingAmount(): ?float
    {
        return $this->bookingAmount;
    }
    /**
     * Set bookingAmount value
     * @param float $bookingAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
     */
    public function setBookingAmount(?float $bookingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingAmount) && !(is_float($bookingAmount) || is_numeric($bookingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingAmount, true), gettype($bookingAmount)), __LINE__);
        }
        $this->bookingAmount = $bookingAmount;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType
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
}
