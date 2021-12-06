<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoForCustomer StructType
 * @subpackage Structs
 */
class InfoForCustomer extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The projectNo
     * @var string|null
     */
    protected ?string $projectNo = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The travelFrom
     * @var string|null
     */
    protected ?string $travelFrom = null;
    /**
     * The travelUntil
     * @var string|null
     */
    protected ?string $travelUntil = null;
    /**
     * The traveller
     * @var string|null
     */
    protected ?string $traveller = null;
    /**
     * The personalNo
     * @var string|null
     */
    protected ?string $personalNo = null;
    /**
     * The customerCostCenter
     * @var string|null
     */
    protected ?string $customerCostCenter = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The feeCode
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The feeDescription
     * @var string|null
     */
    protected ?string $feeDescription = null;
    /**
     * The feePrice
     * @var float|null
     */
    protected ?float $feePrice = null;
    /**
     * The originalBookingId
     * @var string|null
     */
    protected ?string $originalBookingId = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The hotelNo
     * @var string|null
     */
    protected ?string $hotelNo = null;
    /**
     * The trainNo
     * @var string|null
     */
    protected ?string $trainNo = null;
    /**
     * The carNo
     * @var string|null
     */
    protected ?string $carNo = null;
    /**
     * The airline
     * @var string|null
     */
    protected ?string $airline = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The flightPrice
     * @var float|null
     */
    protected ?float $flightPrice = null;
    /**
     * Constructor method for InfoForCustomer
     * @uses InfoForCustomer::setOrderNo()
     * @uses InfoForCustomer::setTravelType()
     * @uses InfoForCustomer::setProjectNo()
     * @uses InfoForCustomer::setCreationDate()
     * @uses InfoForCustomer::setTotalPrice()
     * @uses InfoForCustomer::setTravelFrom()
     * @uses InfoForCustomer::setTravelUntil()
     * @uses InfoForCustomer::setTraveller()
     * @uses InfoForCustomer::setPersonalNo()
     * @uses InfoForCustomer::setCustomerCostCenter()
     * @uses InfoForCustomer::setRemark()
     * @uses InfoForCustomer::setFeeCode()
     * @uses InfoForCustomer::setFeeDescription()
     * @uses InfoForCustomer::setFeePrice()
     * @uses InfoForCustomer::setOriginalBookingId()
     * @uses InfoForCustomer::setCreationTime()
     * @uses InfoForCustomer::setFlightNo()
     * @uses InfoForCustomer::setHotelNo()
     * @uses InfoForCustomer::setTrainNo()
     * @uses InfoForCustomer::setCarNo()
     * @uses InfoForCustomer::setAirline()
     * @uses InfoForCustomer::setDestination()
     * @uses InfoForCustomer::setFlightPrice()
     * @param int $orderNo
     * @param string $travelType
     * @param string $projectNo
     * @param string $creationDate
     * @param float $totalPrice
     * @param string $travelFrom
     * @param string $travelUntil
     * @param string $traveller
     * @param string $personalNo
     * @param string $customerCostCenter
     * @param string $remark
     * @param string $feeCode
     * @param string $feeDescription
     * @param float $feePrice
     * @param string $originalBookingId
     * @param string $creationTime
     * @param string $flightNo
     * @param string $hotelNo
     * @param string $trainNo
     * @param string $carNo
     * @param string $airline
     * @param string $destination
     * @param float $flightPrice
     */
    public function __construct(?int $orderNo = null, ?string $travelType = null, ?string $projectNo = null, ?string $creationDate = null, ?float $totalPrice = null, ?string $travelFrom = null, ?string $travelUntil = null, ?string $traveller = null, ?string $personalNo = null, ?string $customerCostCenter = null, ?string $remark = null, ?string $feeCode = null, ?string $feeDescription = null, ?float $feePrice = null, ?string $originalBookingId = null, ?string $creationTime = null, ?string $flightNo = null, ?string $hotelNo = null, ?string $trainNo = null, ?string $carNo = null, ?string $airline = null, ?string $destination = null, ?float $flightPrice = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setTravelType($travelType)
            ->setProjectNo($projectNo)
            ->setCreationDate($creationDate)
            ->setTotalPrice($totalPrice)
            ->setTravelFrom($travelFrom)
            ->setTravelUntil($travelUntil)
            ->setTraveller($traveller)
            ->setPersonalNo($personalNo)
            ->setCustomerCostCenter($customerCostCenter)
            ->setRemark($remark)
            ->setFeeCode($feeCode)
            ->setFeeDescription($feeDescription)
            ->setFeePrice($feePrice)
            ->setOriginalBookingId($originalBookingId)
            ->setCreationTime($creationTime)
            ->setFlightNo($flightNo)
            ->setHotelNo($hotelNo)
            ->setTrainNo($trainNo)
            ->setCarNo($carNo)
            ->setAirline($airline)
            ->setDestination($destination)
            ->setFlightPrice($flightPrice);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
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
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get projectNo value
     * @return string|null
     */
    public function getProjectNo(): ?string
    {
        return $this->projectNo;
    }
    /**
     * Set projectNo value
     * @param string $projectNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setProjectNo(?string $projectNo = null): self
    {
        // validation for constraint: string
        if (!is_null($projectNo) && !is_string($projectNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($projectNo, true), gettype($projectNo)), __LINE__);
        }
        $this->projectNo = $projectNo;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
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
     * Get travelFrom value
     * @return string|null
     */
    public function getTravelFrom(): ?string
    {
        return $this->travelFrom;
    }
    /**
     * Set travelFrom value
     * @param string $travelFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setTravelFrom(?string $travelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelFrom) && !is_string($travelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelFrom, true), gettype($travelFrom)), __LINE__);
        }
        $this->travelFrom = $travelFrom;
        
        return $this;
    }
    /**
     * Get travelUntil value
     * @return string|null
     */
    public function getTravelUntil(): ?string
    {
        return $this->travelUntil;
    }
    /**
     * Set travelUntil value
     * @param string $travelUntil
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setTravelUntil(?string $travelUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($travelUntil) && !is_string($travelUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelUntil, true), gettype($travelUntil)), __LINE__);
        }
        $this->travelUntil = $travelUntil;
        
        return $this;
    }
    /**
     * Get traveller value
     * @return string|null
     */
    public function getTraveller(): ?string
    {
        return $this->traveller;
    }
    /**
     * Set traveller value
     * @param string $traveller
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setTraveller(?string $traveller = null): self
    {
        // validation for constraint: string
        if (!is_null($traveller) && !is_string($traveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveller, true), gettype($traveller)), __LINE__);
        }
        $this->traveller = $traveller;
        
        return $this;
    }
    /**
     * Get personalNo value
     * @return string|null
     */
    public function getPersonalNo(): ?string
    {
        return $this->personalNo;
    }
    /**
     * Set personalNo value
     * @param string $personalNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setPersonalNo(?string $personalNo = null): self
    {
        // validation for constraint: string
        if (!is_null($personalNo) && !is_string($personalNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personalNo, true), gettype($personalNo)), __LINE__);
        }
        $this->personalNo = $personalNo;
        
        return $this;
    }
    /**
     * Get customerCostCenter value
     * @return string|null
     */
    public function getCustomerCostCenter(): ?string
    {
        return $this->customerCostCenter;
    }
    /**
     * Set customerCostCenter value
     * @param string $customerCostCenter
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setCustomerCostCenter(?string $customerCostCenter = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCostCenter) && !is_string($customerCostCenter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCostCenter, true), gettype($customerCostCenter)), __LINE__);
        }
        $this->customerCostCenter = $customerCostCenter;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Get feeCode value
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->feeCode;
    }
    /**
     * Set feeCode value
     * @param string $feeCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->feeCode = $feeCode;
        
        return $this;
    }
    /**
     * Get feeDescription value
     * @return string|null
     */
    public function getFeeDescription(): ?string
    {
        return $this->feeDescription;
    }
    /**
     * Set feeDescription value
     * @param string $feeDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setFeeDescription(?string $feeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($feeDescription) && !is_string($feeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeDescription, true), gettype($feeDescription)), __LINE__);
        }
        $this->feeDescription = $feeDescription;
        
        return $this;
    }
    /**
     * Get feePrice value
     * @return float|null
     */
    public function getFeePrice(): ?float
    {
        return $this->feePrice;
    }
    /**
     * Set feePrice value
     * @param float $feePrice
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setFeePrice(?float $feePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($feePrice) && !(is_float($feePrice) || is_numeric($feePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feePrice, true), gettype($feePrice)), __LINE__);
        }
        $this->feePrice = $feePrice;
        
        return $this;
    }
    /**
     * Get originalBookingId value
     * @return string|null
     */
    public function getOriginalBookingId(): ?string
    {
        return $this->originalBookingId;
    }
    /**
     * Set originalBookingId value
     * @param string $originalBookingId
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setOriginalBookingId(?string $originalBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($originalBookingId) && !is_string($originalBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBookingId, true), gettype($originalBookingId)), __LINE__);
        }
        $this->originalBookingId = $originalBookingId;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
        return $this;
    }
    /**
     * Get hotelNo value
     * @return string|null
     */
    public function getHotelNo(): ?string
    {
        return $this->hotelNo;
    }
    /**
     * Set hotelNo value
     * @param string $hotelNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setHotelNo(?string $hotelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelNo) && !is_string($hotelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelNo, true), gettype($hotelNo)), __LINE__);
        }
        $this->hotelNo = $hotelNo;
        
        return $this;
    }
    /**
     * Get trainNo value
     * @return string|null
     */
    public function getTrainNo(): ?string
    {
        return $this->trainNo;
    }
    /**
     * Set trainNo value
     * @param string $trainNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setTrainNo(?string $trainNo = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNo) && !is_string($trainNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNo, true), gettype($trainNo)), __LINE__);
        }
        $this->trainNo = $trainNo;
        
        return $this;
    }
    /**
     * Get carNo value
     * @return string|null
     */
    public function getCarNo(): ?string
    {
        return $this->carNo;
    }
    /**
     * Set carNo value
     * @param string $carNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setCarNo(?string $carNo = null): self
    {
        // validation for constraint: string
        if (!is_null($carNo) && !is_string($carNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carNo, true), gettype($carNo)), __LINE__);
        }
        $this->carNo = $carNo;
        
        return $this;
    }
    /**
     * Get airline value
     * @return string|null
     */
    public function getAirline(): ?string
    {
        return $this->airline;
    }
    /**
     * Set airline value
     * @param string $airline
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setAirline(?string $airline = null): self
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airline, true), gettype($airline)), __LINE__);
        }
        $this->airline = $airline;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
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
     * Get flightPrice value
     * @return float|null
     */
    public function getFlightPrice(): ?float
    {
        return $this->flightPrice;
    }
    /**
     * Set flightPrice value
     * @param float $flightPrice
     * @return \Pggns\MidocoApi\Orderlists\StructType\InfoForCustomer
     */
    public function setFlightPrice(?float $flightPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($flightPrice) && !(is_float($flightPrice) || is_numeric($flightPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($flightPrice, true), gettype($flightPrice)), __LINE__);
        }
        $this->flightPrice = $flightPrice;
        
        return $this;
    }
}
