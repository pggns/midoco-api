<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingListResultsType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingListResultsType extends AbstractStructBase
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The numberOfPositions
     * @var int|null
     */
    protected ?int $numberOfPositions = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The totalVat
     * @var float|null
     */
    protected ?float $totalVat = null;
    /**
     * Constructor method for MidocoBillingListResultsType
     * @uses MidocoBillingListResultsType::setDebitorNo()
     * @uses MidocoBillingListResultsType::setAccountId()
     * @uses MidocoBillingListResultsType::setNumberOfPositions()
     * @uses MidocoBillingListResultsType::setTotalPrice()
     * @uses MidocoBillingListResultsType::setTotalVat()
     * @param string $debitorNo
     * @param string $accountId
     * @param int $numberOfPositions
     * @param float $totalPrice
     * @param float $totalVat
     */
    public function __construct(?string $debitorNo = null, ?string $accountId = null, ?int $numberOfPositions = null, ?float $totalPrice = null, ?float $totalVat = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setAccountId($accountId)
            ->setNumberOfPositions($numberOfPositions)
            ->setTotalPrice($totalPrice)
            ->setTotalVat($totalVat);
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListResultsType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListResultsType
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
     * Get numberOfPositions value
     * @return int|null
     */
    public function getNumberOfPositions(): ?int
    {
        return $this->numberOfPositions;
    }
    /**
     * Set numberOfPositions value
     * @param int $numberOfPositions
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListResultsType
     */
    public function setNumberOfPositions(?int $numberOfPositions = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfPositions) && !(is_int($numberOfPositions) || ctype_digit($numberOfPositions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPositions, true), gettype($numberOfPositions)), __LINE__);
        }
        $this->numberOfPositions = $numberOfPositions;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListResultsType
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get totalVat value
     * @return float|null
     */
    public function getTotalVat(): ?float
    {
        return $this->totalVat;
    }
    /**
     * Set totalVat value
     * @param float $totalVat
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingListResultsType
     */
    public function setTotalVat(?float $totalVat = null): self
    {
        // validation for constraint: float
        if (!is_null($totalVat) && !(is_float($totalVat) || is_numeric($totalVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalVat, true), gettype($totalVat)), __LINE__);
        }
        $this->totalVat = $totalVat;
        
        return $this;
    }
}
