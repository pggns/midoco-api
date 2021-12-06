<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBalanceListSumsType StructType
 * @subpackage Structs
 */
class MidocoBalanceListSumsType extends AbstractStructBase
{
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
     * Constructor method for MidocoBalanceListSumsType
     * @uses MidocoBalanceListSumsType::setDebitAmount()
     * @uses MidocoBalanceListSumsType::setCreditAmount()
     * @uses MidocoBalanceListSumsType::setBalance()
     * @param float $debitAmount
     * @param float $creditAmount
     * @param float $balance
     */
    public function __construct(?float $debitAmount = null, ?float $creditAmount = null, ?float $balance = null)
    {
        $this
            ->setDebitAmount($debitAmount)
            ->setCreditAmount($creditAmount)
            ->setBalance($balance);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListSumsType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListSumsType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListSumsType
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
}
