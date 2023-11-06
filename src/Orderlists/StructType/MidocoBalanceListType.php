<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBalanceListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBalanceListType extends AbstractStructBase
{
    /**
     * The bookingPeriod
     * @var int|null
     */
    protected ?int $bookingPeriod = null;
    /**
     * The balanceSheetPosition
     * @var string|null
     */
    protected ?string $balanceSheetPosition = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The debitAmount
     * @var float|null
     */
    protected ?float $debitAmount = null;
    /**
     * The creditAmount
     * @var float|null
     */
    protected ?float $creditAmount = null;
    /**
     * The balance
     * @var float|null
     */
    protected ?float $balance = null;
    /**
     * The costUnit
     * @var string|null
     */
    protected ?string $costUnit = null;
    /**
     * Constructor method for MidocoBalanceListType
     * @uses MidocoBalanceListType::setBookingPeriod()
     * @uses MidocoBalanceListType::setBalanceSheetPosition()
     * @uses MidocoBalanceListType::setAccountId()
     * @uses MidocoBalanceListType::setAccountName()
     * @uses MidocoBalanceListType::setDebitAmount()
     * @uses MidocoBalanceListType::setCreditAmount()
     * @uses MidocoBalanceListType::setBalance()
     * @uses MidocoBalanceListType::setCostUnit()
     * @param int $bookingPeriod
     * @param string $balanceSheetPosition
     * @param string $accountId
     * @param string $accountName
     * @param float $debitAmount
     * @param float $creditAmount
     * @param float $balance
     * @param string $costUnit
     */
    public function __construct(?int $bookingPeriod = null, ?string $balanceSheetPosition = null, ?string $accountId = null, ?string $accountName = null, ?float $debitAmount = null, ?float $creditAmount = null, ?float $balance = null, ?string $costUnit = null)
    {
        $this
            ->setBookingPeriod($bookingPeriod)
            ->setBalanceSheetPosition($balanceSheetPosition)
            ->setAccountId($accountId)
            ->setAccountName($accountName)
            ->setDebitAmount($debitAmount)
            ->setCreditAmount($creditAmount)
            ->setBalance($balance)
            ->setCostUnit($costUnit);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
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
     * Get balanceSheetPosition value
     * @return string|null
     */
    public function getBalanceSheetPosition(): ?string
    {
        return $this->balanceSheetPosition;
    }
    /**
     * Set balanceSheetPosition value
     * @param string $balanceSheetPosition
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
     */
    public function setBalanceSheetPosition(?string $balanceSheetPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($balanceSheetPosition) && !is_string($balanceSheetPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balanceSheetPosition, true), gettype($balanceSheetPosition)), __LINE__);
        }
        $this->balanceSheetPosition = $balanceSheetPosition;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get debitAmount value
     * @return float|null
     */
    public function getDebitAmount(): ?float
    {
        return $this->debitAmount;
    }
    /**
     * Set debitAmount value
     * @param float $debitAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
     */
    public function setDebitAmount(?float $debitAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($debitAmount) && !(is_float($debitAmount) || is_numeric($debitAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($debitAmount, true), gettype($debitAmount)), __LINE__);
        }
        $this->debitAmount = $debitAmount;
        
        return $this;
    }
    /**
     * Get creditAmount value
     * @return float|null
     */
    public function getCreditAmount(): ?float
    {
        return $this->creditAmount;
    }
    /**
     * Set creditAmount value
     * @param float $creditAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
     */
    public function setCreditAmount(?float $creditAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($creditAmount) && !(is_float($creditAmount) || is_numeric($creditAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditAmount, true), gettype($creditAmount)), __LINE__);
        }
        $this->creditAmount = $creditAmount;
        
        return $this;
    }
    /**
     * Get balance value
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param float $balance
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
     */
    public function setBalance(?float $balance = null): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->balance = $balance;
        
        return $this;
    }
    /**
     * Get costUnit value
     * @return string|null
     */
    public function getCostUnit(): ?string
    {
        return $this->costUnit;
    }
    /**
     * Set costUnit value
     * @param string $costUnit
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType
     */
    public function setCostUnit(?string $costUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($costUnit) && !is_string($costUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costUnit, true), gettype($costUnit)), __LINE__);
        }
        $this->costUnit = $costUnit;
        
        return $this;
    }
}
