<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginExtListType StructType
 * @subpackage Structs
 */
class MidocoMarginExtListType extends AbstractStructBase
{
    /**
     * The businessDivision
     * @var string|null
     */
    protected ?string $businessDivision = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The orderType
     * @var string|null
     */
    protected ?string $orderType = null;
    /**
     * The authorizedByName
     * @var string|null
     */
    protected ?string $authorizedByName = null;
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The orderNo
     * @var string|null
     */
    protected ?string $orderNo = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The vkPrice
     * @var float|null
     */
    protected ?float $vkPrice = null;
    /**
     * The ekPrice
     * @var float|null
     */
    protected ?float $ekPrice = null;
    /**
     * The dbAbsAmount
     * @var float|null
     */
    protected ?float $dbAbsAmount = null;
    /**
     * The dbPercent
     * @var float|null
     */
    protected ?float $dbPercent = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * Constructor method for MidocoMarginExtListType
     * @uses MidocoMarginExtListType::setBusinessDivision()
     * @uses MidocoMarginExtListType::setUnitName()
     * @uses MidocoMarginExtListType::setStatus()
     * @uses MidocoMarginExtListType::setOrderType()
     * @uses MidocoMarginExtListType::setAuthorizedByName()
     * @uses MidocoMarginExtListType::setCustomerId()
     * @uses MidocoMarginExtListType::setCustomerName()
     * @uses MidocoMarginExtListType::setOrderNo()
     * @uses MidocoMarginExtListType::setStartTravel()
     * @uses MidocoMarginExtListType::setBookingDate()
     * @uses MidocoMarginExtListType::setPrice()
     * @uses MidocoMarginExtListType::setVkPrice()
     * @uses MidocoMarginExtListType::setEkPrice()
     * @uses MidocoMarginExtListType::setDbAbsAmount()
     * @uses MidocoMarginExtListType::setDbPercent()
     * @uses MidocoMarginExtListType::setComment()
     * @param string $businessDivision
     * @param string $unitName
     * @param string $status
     * @param string $orderType
     * @param string $authorizedByName
     * @param string $customerId
     * @param string $customerName
     * @param string $orderNo
     * @param string $startTravel
     * @param string $bookingDate
     * @param float $price
     * @param float $vkPrice
     * @param float $ekPrice
     * @param float $dbAbsAmount
     * @param float $dbPercent
     * @param string $comment
     */
    public function __construct(?string $businessDivision = null, ?string $unitName = null, ?string $status = null, ?string $orderType = null, ?string $authorizedByName = null, ?string $customerId = null, ?string $customerName = null, ?string $orderNo = null, ?string $startTravel = null, ?string $bookingDate = null, ?float $price = null, ?float $vkPrice = null, ?float $ekPrice = null, ?float $dbAbsAmount = null, ?float $dbPercent = null, ?string $comment = null)
    {
        $this
            ->setBusinessDivision($businessDivision)
            ->setUnitName($unitName)
            ->setStatus($status)
            ->setOrderType($orderType)
            ->setAuthorizedByName($authorizedByName)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setOrderNo($orderNo)
            ->setStartTravel($startTravel)
            ->setBookingDate($bookingDate)
            ->setPrice($price)
            ->setVkPrice($vkPrice)
            ->setEkPrice($ekPrice)
            ->setDbAbsAmount($dbAbsAmount)
            ->setDbPercent($dbPercent)
            ->setComment($comment);
    }
    /**
     * Get businessDivision value
     * @return string|null
     */
    public function getBusinessDivision(): ?string
    {
        return $this->businessDivision;
    }
    /**
     * Set businessDivision value
     * @param string $businessDivision
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setBusinessDivision(?string $businessDivision = null): self
    {
        // validation for constraint: string
        if (!is_null($businessDivision) && !is_string($businessDivision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessDivision, true), gettype($businessDivision)), __LINE__);
        }
        $this->businessDivision = $businessDivision;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get orderType value
     * @return string|null
     */
    public function getOrderType(): ?string
    {
        return $this->orderType;
    }
    /**
     * Set orderType value
     * @param string $orderType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setOrderType(?string $orderType = null): self
    {
        // validation for constraint: string
        if (!is_null($orderType) && !is_string($orderType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderType, true), gettype($orderType)), __LINE__);
        }
        $this->orderType = $orderType;
        
        return $this;
    }
    /**
     * Get authorizedByName value
     * @return string|null
     */
    public function getAuthorizedByName(): ?string
    {
        return $this->authorizedByName;
    }
    /**
     * Set authorizedByName value
     * @param string $authorizedByName
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setAuthorizedByName(?string $authorizedByName = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizedByName) && !is_string($authorizedByName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizedByName, true), gettype($authorizedByName)), __LINE__);
        }
        $this->authorizedByName = $authorizedByName;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param string $orderNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setOrderNo(?string $orderNo = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
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
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get vkPrice value
     * @return float|null
     */
    public function getVkPrice(): ?float
    {
        return $this->vkPrice;
    }
    /**
     * Set vkPrice value
     * @param float $vkPrice
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setVkPrice(?float $vkPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($vkPrice) && !(is_float($vkPrice) || is_numeric($vkPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vkPrice, true), gettype($vkPrice)), __LINE__);
        }
        $this->vkPrice = $vkPrice;
        
        return $this;
    }
    /**
     * Get ekPrice value
     * @return float|null
     */
    public function getEkPrice(): ?float
    {
        return $this->ekPrice;
    }
    /**
     * Set ekPrice value
     * @param float $ekPrice
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setEkPrice(?float $ekPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($ekPrice) && !(is_float($ekPrice) || is_numeric($ekPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ekPrice, true), gettype($ekPrice)), __LINE__);
        }
        $this->ekPrice = $ekPrice;
        
        return $this;
    }
    /**
     * Get dbAbsAmount value
     * @return float|null
     */
    public function getDbAbsAmount(): ?float
    {
        return $this->dbAbsAmount;
    }
    /**
     * Set dbAbsAmount value
     * @param float $dbAbsAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setDbAbsAmount(?float $dbAbsAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($dbAbsAmount) && !(is_float($dbAbsAmount) || is_numeric($dbAbsAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dbAbsAmount, true), gettype($dbAbsAmount)), __LINE__);
        }
        $this->dbAbsAmount = $dbAbsAmount;
        
        return $this;
    }
    /**
     * Get dbPercent value
     * @return float|null
     */
    public function getDbPercent(): ?float
    {
        return $this->dbPercent;
    }
    /**
     * Set dbPercent value
     * @param float $dbPercent
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setDbPercent(?float $dbPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($dbPercent) && !(is_float($dbPercent) || is_numeric($dbPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dbPercent, true), gettype($dbPercent)), __LINE__);
        }
        $this->dbPercent = $dbPercent;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginExtListType
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
}
