<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierAgencySettlementBooking StructType
 * @subpackage Structs
 */
class MidocoSupplierAgencySettlementBooking extends SupplAgencySettlemBookDTO
{
    /**
     * The revenueDiff
     * @var float|null
     */
    protected ?float $revenueDiff = null;
    /**
     * The settlementsSum
     * @var float|null
     */
    protected ?float $settlementsSum = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The siDiff
     * @var float|null
     */
    protected ?float $siDiff = null;
    /**
     * The siInkassoMode
     * @var string|null
     */
    protected ?string $siInkassoMode = null;
    /**
     * The settlementsInkassoMode
     * @var string|null
     */
    protected ?string $settlementsInkassoMode = null;
    /**
     * The hasComment
     * @var bool|null
     */
    protected ?bool $hasComment = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The settlementTypeDebit
     * @var string|null
     */
    protected ?string $settlementTypeDebit = null;
    /**
     * Constructor method for MidocoSupplierAgencySettlementBooking
     * @uses MidocoSupplierAgencySettlementBooking::setRevenueDiff()
     * @uses MidocoSupplierAgencySettlementBooking::setSettlementsSum()
     * @uses MidocoSupplierAgencySettlementBooking::setOrderNo()
     * @uses MidocoSupplierAgencySettlementBooking::setSiDiff()
     * @uses MidocoSupplierAgencySettlementBooking::setSiInkassoMode()
     * @uses MidocoSupplierAgencySettlementBooking::setSettlementsInkassoMode()
     * @uses MidocoSupplierAgencySettlementBooking::setHasComment()
     * @uses MidocoSupplierAgencySettlementBooking::setNettoAmount()
     * @uses MidocoSupplierAgencySettlementBooking::setIsDeposit()
     * @uses MidocoSupplierAgencySettlementBooking::setSettlementType()
     * @uses MidocoSupplierAgencySettlementBooking::setSettlementTypeDebit()
     * @param float $revenueDiff
     * @param float $settlementsSum
     * @param int $orderNo
     * @param float $siDiff
     * @param string $siInkassoMode
     * @param string $settlementsInkassoMode
     * @param bool $hasComment
     * @param float $nettoAmount
     * @param bool $isDeposit
     * @param string $settlementType
     * @param string $settlementTypeDebit
     */
    public function __construct(?float $revenueDiff = null, ?float $settlementsSum = null, ?int $orderNo = null, ?float $siDiff = null, ?string $siInkassoMode = null, ?string $settlementsInkassoMode = null, ?bool $hasComment = null, ?float $nettoAmount = null, ?bool $isDeposit = null, ?string $settlementType = null, ?string $settlementTypeDebit = null)
    {
        $this
            ->setRevenueDiff($revenueDiff)
            ->setSettlementsSum($settlementsSum)
            ->setOrderNo($orderNo)
            ->setSiDiff($siDiff)
            ->setSiInkassoMode($siInkassoMode)
            ->setSettlementsInkassoMode($settlementsInkassoMode)
            ->setHasComment($hasComment)
            ->setNettoAmount($nettoAmount)
            ->setIsDeposit($isDeposit)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit);
    }
    /**
     * Get revenueDiff value
     * @return float|null
     */
    public function getRevenueDiff(): ?float
    {
        return $this->revenueDiff;
    }
    /**
     * Set revenueDiff value
     * @param float $revenueDiff
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setRevenueDiff(?float $revenueDiff = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueDiff) && !(is_float($revenueDiff) || is_numeric($revenueDiff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueDiff, true), gettype($revenueDiff)), __LINE__);
        }
        $this->revenueDiff = $revenueDiff;
        
        return $this;
    }
    /**
     * Get settlementsSum value
     * @return float|null
     */
    public function getSettlementsSum(): ?float
    {
        return $this->settlementsSum;
    }
    /**
     * Set settlementsSum value
     * @param float $settlementsSum
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setSettlementsSum(?float $settlementsSum = null): self
    {
        // validation for constraint: float
        if (!is_null($settlementsSum) && !(is_float($settlementsSum) || is_numeric($settlementsSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($settlementsSum, true), gettype($settlementsSum)), __LINE__);
        }
        $this->settlementsSum = $settlementsSum;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
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
     * Get siDiff value
     * @return float|null
     */
    public function getSiDiff(): ?float
    {
        return $this->siDiff;
    }
    /**
     * Set siDiff value
     * @param float $siDiff
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setSiDiff(?float $siDiff = null): self
    {
        // validation for constraint: float
        if (!is_null($siDiff) && !(is_float($siDiff) || is_numeric($siDiff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($siDiff, true), gettype($siDiff)), __LINE__);
        }
        $this->siDiff = $siDiff;
        
        return $this;
    }
    /**
     * Get siInkassoMode value
     * @return string|null
     */
    public function getSiInkassoMode(): ?string
    {
        return $this->siInkassoMode;
    }
    /**
     * Set siInkassoMode value
     * @param string $siInkassoMode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setSiInkassoMode(?string $siInkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($siInkassoMode) && !is_string($siInkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siInkassoMode, true), gettype($siInkassoMode)), __LINE__);
        }
        $this->siInkassoMode = $siInkassoMode;
        
        return $this;
    }
    /**
     * Get settlementsInkassoMode value
     * @return string|null
     */
    public function getSettlementsInkassoMode(): ?string
    {
        return $this->settlementsInkassoMode;
    }
    /**
     * Set settlementsInkassoMode value
     * @param string $settlementsInkassoMode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setSettlementsInkassoMode(?string $settlementsInkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementsInkassoMode) && !is_string($settlementsInkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementsInkassoMode, true), gettype($settlementsInkassoMode)), __LINE__);
        }
        $this->settlementsInkassoMode = $settlementsInkassoMode;
        
        return $this;
    }
    /**
     * Get hasComment value
     * @return bool|null
     */
    public function getHasComment(): ?bool
    {
        return $this->hasComment;
    }
    /**
     * Set hasComment value
     * @param bool $hasComment
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setHasComment(?bool $hasComment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasComment) && !is_bool($hasComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasComment, true), gettype($hasComment)), __LINE__);
        }
        $this->hasComment = $hasComment;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
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
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get settlementTypeDebit value
     * @return string|null
     */
    public function getSettlementTypeDebit(): ?string
    {
        return $this->settlementTypeDebit;
    }
    /**
     * Set settlementTypeDebit value
     * @param string $settlementTypeDebit
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierAgencySettlementBooking
     */
    public function setSettlementTypeDebit(?string $settlementTypeDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementTypeDebit) && !is_string($settlementTypeDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementTypeDebit, true), gettype($settlementTypeDebit)), __LINE__);
        }
        $this->settlementTypeDebit = $settlementTypeDebit;
        
        return $this;
    }
}
