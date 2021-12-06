<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDepositListSumsType StructType
 * @subpackage Structs
 */
class MidocoDepositListSumsType extends AbstractStructBase
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
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * Constructor method for MidocoDepositListSumsType
     * @uses MidocoDepositListSumsType::setOrgUnit()
     * @uses MidocoDepositListSumsType::setInvoicedAmount()
     * @uses MidocoDepositListSumsType::setPayedAmount()
     * @uses MidocoDepositListSumsType::setOrderNo()
     * @uses MidocoDepositListSumsType::setCustomerId()
     * @uses MidocoDepositListSumsType::setStartTravel()
     * @uses MidocoDepositListSumsType::setInkassoPrice()
     * @param string $orgUnit
     * @param float $invoicedAmount
     * @param float $payedAmount
     * @param int $orderNo
     * @param int $customerId
     * @param string $startTravel
     * @param float $inkassoPrice
     */
    public function __construct(?string $orgUnit = null, ?float $invoicedAmount = null, ?float $payedAmount = null, ?int $orderNo = null, ?int $customerId = null, ?string $startTravel = null, ?float $inkassoPrice = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setInvoicedAmount($invoicedAmount)
            ->setPayedAmount($payedAmount)
            ->setOrderNo($orderNo)
            ->setCustomerId($customerId)
            ->setStartTravel($startTravel)
            ->setInkassoPrice($inkassoPrice);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListSumsType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListSumsType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListSumsType
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
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListSumsType
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListSumsType
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
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListSumsType
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoDepositListSumsType
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
}
