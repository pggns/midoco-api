<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgedDebtorCreditorReportsPosition StructType
 * @subpackage Structs
 */
class MidocoAgedDebtorCreditorReportsPosition extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The transactionNo
     * @var string|null
     */
    protected ?string $transactionNo = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The passenger
     * @var string|null
     */
    protected ?string $passenger = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The balanceDueDate
     * @var string|null
     */
    protected ?string $balanceDueDate = null;
    /**
     * The transactionAmount
     * @var float|null
     */
    protected ?float $transactionAmount = null;
    /**
     * The outstandingAmount
     * @var float|null
     */
    protected ?float $outstandingAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for MidocoAgedDebtorCreditorReportsPosition
     * @uses MidocoAgedDebtorCreditorReportsPosition::setAccountId()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setTransactionNo()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setIssueDate()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setPassenger()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setDestination()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setDepartureDate()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setBalanceDueDate()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setTransactionAmount()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setOutstandingAmount()
     * @uses MidocoAgedDebtorCreditorReportsPosition::setCurrency()
     * @param string $accountId
     * @param string $transactionNo
     * @param string $issueDate
     * @param string $passenger
     * @param string $destination
     * @param string $departureDate
     * @param string $balanceDueDate
     * @param float $transactionAmount
     * @param float $outstandingAmount
     * @param string $currency
     */
    public function __construct(?string $accountId = null, ?string $transactionNo = null, ?string $issueDate = null, ?string $passenger = null, ?string $destination = null, ?string $departureDate = null, ?string $balanceDueDate = null, ?float $transactionAmount = null, ?float $outstandingAmount = null, ?string $currency = null)
    {
        $this
            ->setAccountId($accountId)
            ->setTransactionNo($transactionNo)
            ->setIssueDate($issueDate)
            ->setPassenger($passenger)
            ->setDestination($destination)
            ->setDepartureDate($departureDate)
            ->setBalanceDueDate($balanceDueDate)
            ->setTransactionAmount($transactionAmount)
            ->setOutstandingAmount($outstandingAmount)
            ->setCurrency($currency);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
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
     * Get transactionNo value
     * @return string|null
     */
    public function getTransactionNo(): ?string
    {
        return $this->transactionNo;
    }
    /**
     * Set transactionNo value
     * @param string $transactionNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setTransactionNo(?string $transactionNo = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionNo) && !is_string($transactionNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNo, true), gettype($transactionNo)), __LINE__);
        }
        $this->transactionNo = $transactionNo;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get passenger value
     * @return string|null
     */
    public function getPassenger(): ?string
    {
        return $this->passenger;
    }
    /**
     * Set passenger value
     * @param string $passenger
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setPassenger(?string $passenger = null): self
    {
        // validation for constraint: string
        if (!is_null($passenger) && !is_string($passenger)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passenger, true), gettype($passenger)), __LINE__);
        }
        $this->passenger = $passenger;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get departureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }
    /**
     * Set departureDate value
     * @param string $departureDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->departureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get balanceDueDate value
     * @return string|null
     */
    public function getBalanceDueDate(): ?string
    {
        return $this->balanceDueDate;
    }
    /**
     * Set balanceDueDate value
     * @param string $balanceDueDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setBalanceDueDate(?string $balanceDueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($balanceDueDate) && !is_string($balanceDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balanceDueDate, true), gettype($balanceDueDate)), __LINE__);
        }
        $this->balanceDueDate = $balanceDueDate;
        
        return $this;
    }
    /**
     * Get transactionAmount value
     * @return float|null
     */
    public function getTransactionAmount(): ?float
    {
        return $this->transactionAmount;
    }
    /**
     * Set transactionAmount value
     * @param float $transactionAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setTransactionAmount(?float $transactionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($transactionAmount) && !(is_float($transactionAmount) || is_numeric($transactionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($transactionAmount, true), gettype($transactionAmount)), __LINE__);
        }
        $this->transactionAmount = $transactionAmount;
        
        return $this;
    }
    /**
     * Get outstandingAmount value
     * @return float|null
     */
    public function getOutstandingAmount(): ?float
    {
        return $this->outstandingAmount;
    }
    /**
     * Set outstandingAmount value
     * @param float $outstandingAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setOutstandingAmount(?float $outstandingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($outstandingAmount) && !(is_float($outstandingAmount) || is_numeric($outstandingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($outstandingAmount, true), gettype($outstandingAmount)), __LINE__);
        }
        $this->outstandingAmount = $outstandingAmount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoAgedDebtorCreditorReportsPosition
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
}
