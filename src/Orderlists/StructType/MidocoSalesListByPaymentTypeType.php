<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListByPaymentTypeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSalesListByPaymentTypeType extends AbstractStructBase
{
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The paymentMethod
     * @var string|null
     */
    protected ?string $paymentMethod = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The saleAmount
     * @var float|null
     */
    protected ?float $saleAmount = null;
    /**
     * The percentageSaleAmount
     * @var float|null
     */
    protected ?float $percentageSaleAmount = null;
    /**
     * The paxCount
     * @var int|null
     */
    protected ?int $paxCount = null;
    /**
     * The percentagePax
     * @var float|null
     */
    protected ?float $percentagePax = null;
    /**
     * Constructor method for MidocoSalesListByPaymentTypeType
     * @uses MidocoSalesListByPaymentTypeType::setPaymentType()
     * @uses MidocoSalesListByPaymentTypeType::setPaymentMethod()
     * @uses MidocoSalesListByPaymentTypeType::setCcType()
     * @uses MidocoSalesListByPaymentTypeType::setOrgUnit()
     * @uses MidocoSalesListByPaymentTypeType::setSaleAmount()
     * @uses MidocoSalesListByPaymentTypeType::setPercentageSaleAmount()
     * @uses MidocoSalesListByPaymentTypeType::setPaxCount()
     * @uses MidocoSalesListByPaymentTypeType::setPercentagePax()
     * @param string $paymentType
     * @param string $paymentMethod
     * @param string $ccType
     * @param string $orgUnit
     * @param float $saleAmount
     * @param float $percentageSaleAmount
     * @param int $paxCount
     * @param float $percentagePax
     */
    public function __construct(?string $paymentType = null, ?string $paymentMethod = null, ?string $ccType = null, ?string $orgUnit = null, ?float $saleAmount = null, ?float $percentageSaleAmount = null, ?int $paxCount = null, ?float $percentagePax = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPaymentMethod($paymentMethod)
            ->setCcType($ccType)
            ->setOrgUnit($orgUnit)
            ->setSaleAmount($saleAmount)
            ->setPercentageSaleAmount($percentageSaleAmount)
            ->setPaxCount($paxCount)
            ->setPercentagePax($percentagePax);
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @param string $paymentMethod
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
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
     * Get saleAmount value
     * @return float|null
     */
    public function getSaleAmount(): ?float
    {
        return $this->saleAmount;
    }
    /**
     * Set saleAmount value
     * @param float $saleAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
     */
    public function setSaleAmount(?float $saleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($saleAmount) && !(is_float($saleAmount) || is_numeric($saleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($saleAmount, true), gettype($saleAmount)), __LINE__);
        }
        $this->saleAmount = $saleAmount;
        
        return $this;
    }
    /**
     * Get percentageSaleAmount value
     * @return float|null
     */
    public function getPercentageSaleAmount(): ?float
    {
        return $this->percentageSaleAmount;
    }
    /**
     * Set percentageSaleAmount value
     * @param float $percentageSaleAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
     */
    public function setPercentageSaleAmount(?float $percentageSaleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($percentageSaleAmount) && !(is_float($percentageSaleAmount) || is_numeric($percentageSaleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentageSaleAmount, true), gettype($percentageSaleAmount)), __LINE__);
        }
        $this->percentageSaleAmount = $percentageSaleAmount;
        
        return $this;
    }
    /**
     * Get paxCount value
     * @return int|null
     */
    public function getPaxCount(): ?int
    {
        return $this->paxCount;
    }
    /**
     * Set paxCount value
     * @param int $paxCount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
     */
    public function setPaxCount(?int $paxCount = null): self
    {
        // validation for constraint: int
        if (!is_null($paxCount) && !(is_int($paxCount) || ctype_digit($paxCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxCount, true), gettype($paxCount)), __LINE__);
        }
        $this->paxCount = $paxCount;
        
        return $this;
    }
    /**
     * Get percentagePax value
     * @return float|null
     */
    public function getPercentagePax(): ?float
    {
        return $this->percentagePax;
    }
    /**
     * Set percentagePax value
     * @param float $percentagePax
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByPaymentTypeType
     */
    public function setPercentagePax(?float $percentagePax = null): self
    {
        // validation for constraint: float
        if (!is_null($percentagePax) && !(is_float($percentagePax) || is_numeric($percentagePax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentagePax, true), gettype($percentagePax)), __LINE__);
        }
        $this->percentagePax = $percentagePax;
        
        return $this;
    }
}
