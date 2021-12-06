<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemDimensionDTO StructType
 * @subpackage Structs
 */
class SellItemDimensionDTO extends AbstractStructBase
{
    /**
     * The accomodationCode
     * @var string|null
     */
    protected ?string $accomodationCode = null;
    /**
     * The accomodationDescription
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The attrib10Value
     * @var string|null
     */
    protected ?string $attrib10Value = null;
    /**
     * The attrib1Value
     * @var string|null
     */
    protected ?string $attrib1Value = null;
    /**
     * The attrib2Value
     * @var string|null
     */
    protected ?string $attrib2Value = null;
    /**
     * The attrib3Value
     * @var string|null
     */
    protected ?string $attrib3Value = null;
    /**
     * The attrib4Value
     * @var string|null
     */
    protected ?string $attrib4Value = null;
    /**
     * The attrib5Value
     * @var string|null
     */
    protected ?string $attrib5Value = null;
    /**
     * The attrib6Value
     * @var string|null
     */
    protected ?string $attrib6Value = null;
    /**
     * The attrib7Value
     * @var string|null
     */
    protected ?string $attrib7Value = null;
    /**
     * The attrib8Value
     * @var string|null
     */
    protected ?string $attrib8Value = null;
    /**
     * The attrib9Value
     * @var string|null
     */
    protected ?string $attrib9Value = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The commisionLevelId
     * @var string|null
     */
    protected ?string $commisionLevelId = null;
    /**
     * The costCenter
     * @var string|null
     */
    protected ?string $costCenter = null;
    /**
     * The cruiseCode
     * @var string|null
     */
    protected ?string $cruiseCode = null;
    /**
     * The cruiseDescription
     * @var string|null
     */
    protected ?string $cruiseDescription = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDescription
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationDescription
     * @var string|null
     */
    protected ?string $destinationDescription = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The groupReservation
     * @var bool|null
     */
    protected ?bool $groupReservation = null;
    /**
     * The inkassoType
     * @var string|null
     */
    protected ?string $inkassoType = null;
    /**
     * The isChild
     * @var bool|null
     */
    protected ?bool $isChild = null;
    /**
     * The isPackage
     * @var bool|null
     */
    protected ?bool $isPackage = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The midocoItemId
     * @var int|null
     */
    protected ?int $midocoItemId = null;
    /**
     * The midocoOrderId
     * @var int|null
     */
    protected ?int $midocoOrderId = null;
    /**
     * The midocoOrgUnit
     * @var string|null
     */
    protected ?string $midocoOrgUnit = null;
    /**
     * The opicCode
     * @var int|null
     */
    protected ?int $opicCode = null;
    /**
     * The packageDestination
     * @var string|null
     */
    protected ?string $packageDestination = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The returnArrivalTime
     * @var string|null
     */
    protected ?string $returnArrivalTime = null;
    /**
     * The returnCarrier
     * @var string|null
     */
    protected ?string $returnCarrier = null;
    /**
     * The returnDepartureCode
     * @var string|null
     */
    protected ?string $returnDepartureCode = null;
    /**
     * The returnDepartureDescription
     * @var string|null
     */
    protected ?string $returnDepartureDescription = null;
    /**
     * The returnDepartureTime
     * @var string|null
     */
    protected ?string $returnDepartureTime = null;
    /**
     * The returnDestinationCode
     * @var string|null
     */
    protected ?string $returnDestinationCode = null;
    /**
     * The returnDestinationDescription
     * @var string|null
     */
    protected ?string $returnDestinationDescription = null;
    /**
     * The returnFlightNo
     * @var string|null
     */
    protected ?string $returnFlightNo = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The taxPartPercent
     * @var float|null
     */
    protected ?float $taxPartPercent = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The turnaroundPoint
     * @var string|null
     */
    protected ?string $turnaroundPoint = null;
    /**
     * Constructor method for SellItemDimensionDTO
     * @uses SellItemDimensionDTO::setAccomodationCode()
     * @uses SellItemDimensionDTO::setAccomodationDescription()
     * @uses SellItemDimensionDTO::setArrivalTime()
     * @uses SellItemDimensionDTO::setAttrib10Value()
     * @uses SellItemDimensionDTO::setAttrib1Value()
     * @uses SellItemDimensionDTO::setAttrib2Value()
     * @uses SellItemDimensionDTO::setAttrib3Value()
     * @uses SellItemDimensionDTO::setAttrib4Value()
     * @uses SellItemDimensionDTO::setAttrib5Value()
     * @uses SellItemDimensionDTO::setAttrib6Value()
     * @uses SellItemDimensionDTO::setAttrib7Value()
     * @uses SellItemDimensionDTO::setAttrib8Value()
     * @uses SellItemDimensionDTO::setAttrib9Value()
     * @uses SellItemDimensionDTO::setBookingId()
     * @uses SellItemDimensionDTO::setCarrier()
     * @uses SellItemDimensionDTO::setCommisionLevelId()
     * @uses SellItemDimensionDTO::setCostCenter()
     * @uses SellItemDimensionDTO::setCruiseCode()
     * @uses SellItemDimensionDTO::setCruiseDescription()
     * @uses SellItemDimensionDTO::setDepartureCode()
     * @uses SellItemDimensionDTO::setDepartureDescription()
     * @uses SellItemDimensionDTO::setDepartureTime()
     * @uses SellItemDimensionDTO::setDescription()
     * @uses SellItemDimensionDTO::setDestinationCode()
     * @uses SellItemDimensionDTO::setDestinationDescription()
     * @uses SellItemDimensionDTO::setExtSystem()
     * @uses SellItemDimensionDTO::setFlightNo()
     * @uses SellItemDimensionDTO::setGroupReservation()
     * @uses SellItemDimensionDTO::setInkassoType()
     * @uses SellItemDimensionDTO::setIsChild()
     * @uses SellItemDimensionDTO::setIsPackage()
     * @uses SellItemDimensionDTO::setItemType()
     * @uses SellItemDimensionDTO::setMidocoItemId()
     * @uses SellItemDimensionDTO::setMidocoOrderId()
     * @uses SellItemDimensionDTO::setMidocoOrgUnit()
     * @uses SellItemDimensionDTO::setOpicCode()
     * @uses SellItemDimensionDTO::setPackageDestination()
     * @uses SellItemDimensionDTO::setPaymentType()
     * @uses SellItemDimensionDTO::setReturnArrivalTime()
     * @uses SellItemDimensionDTO::setReturnCarrier()
     * @uses SellItemDimensionDTO::setReturnDepartureCode()
     * @uses SellItemDimensionDTO::setReturnDepartureDescription()
     * @uses SellItemDimensionDTO::setReturnDepartureTime()
     * @uses SellItemDimensionDTO::setReturnDestinationCode()
     * @uses SellItemDimensionDTO::setReturnDestinationDescription()
     * @uses SellItemDimensionDTO::setReturnFlightNo()
     * @uses SellItemDimensionDTO::setSellItemId()
     * @uses SellItemDimensionDTO::setStatus()
     * @uses SellItemDimensionDTO::setTaxPartPercent()
     * @uses SellItemDimensionDTO::setTravelType()
     * @uses SellItemDimensionDTO::setTurnaroundPoint()
     * @param string $accomodationCode
     * @param string $accomodationDescription
     * @param string $arrivalTime
     * @param string $attrib10Value
     * @param string $attrib1Value
     * @param string $attrib2Value
     * @param string $attrib3Value
     * @param string $attrib4Value
     * @param string $attrib5Value
     * @param string $attrib6Value
     * @param string $attrib7Value
     * @param string $attrib8Value
     * @param string $attrib9Value
     * @param string $bookingId
     * @param string $carrier
     * @param string $commisionLevelId
     * @param string $costCenter
     * @param string $cruiseCode
     * @param string $cruiseDescription
     * @param string $departureCode
     * @param string $departureDescription
     * @param string $departureTime
     * @param string $description
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param string $extSystem
     * @param string $flightNo
     * @param bool $groupReservation
     * @param string $inkassoType
     * @param bool $isChild
     * @param bool $isPackage
     * @param string $itemType
     * @param int $midocoItemId
     * @param int $midocoOrderId
     * @param string $midocoOrgUnit
     * @param int $opicCode
     * @param string $packageDestination
     * @param string $paymentType
     * @param string $returnArrivalTime
     * @param string $returnCarrier
     * @param string $returnDepartureCode
     * @param string $returnDepartureDescription
     * @param string $returnDepartureTime
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $returnFlightNo
     * @param int $sellItemId
     * @param string $status
     * @param float $taxPartPercent
     * @param string $travelType
     * @param string $turnaroundPoint
     */
    public function __construct(?string $accomodationCode = null, ?string $accomodationDescription = null, ?string $arrivalTime = null, ?string $attrib10Value = null, ?string $attrib1Value = null, ?string $attrib2Value = null, ?string $attrib3Value = null, ?string $attrib4Value = null, ?string $attrib5Value = null, ?string $attrib6Value = null, ?string $attrib7Value = null, ?string $attrib8Value = null, ?string $attrib9Value = null, ?string $bookingId = null, ?string $carrier = null, ?string $commisionLevelId = null, ?string $costCenter = null, ?string $cruiseCode = null, ?string $cruiseDescription = null, ?string $departureCode = null, ?string $departureDescription = null, ?string $departureTime = null, ?string $description = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $extSystem = null, ?string $flightNo = null, ?bool $groupReservation = null, ?string $inkassoType = null, ?bool $isChild = null, ?bool $isPackage = null, ?string $itemType = null, ?int $midocoItemId = null, ?int $midocoOrderId = null, ?string $midocoOrgUnit = null, ?int $opicCode = null, ?string $packageDestination = null, ?string $paymentType = null, ?string $returnArrivalTime = null, ?string $returnCarrier = null, ?string $returnDepartureCode = null, ?string $returnDepartureDescription = null, ?string $returnDepartureTime = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $returnFlightNo = null, ?int $sellItemId = null, ?string $status = null, ?float $taxPartPercent = null, ?string $travelType = null, ?string $turnaroundPoint = null)
    {
        $this
            ->setAccomodationCode($accomodationCode)
            ->setAccomodationDescription($accomodationDescription)
            ->setArrivalTime($arrivalTime)
            ->setAttrib10Value($attrib10Value)
            ->setAttrib1Value($attrib1Value)
            ->setAttrib2Value($attrib2Value)
            ->setAttrib3Value($attrib3Value)
            ->setAttrib4Value($attrib4Value)
            ->setAttrib5Value($attrib5Value)
            ->setAttrib6Value($attrib6Value)
            ->setAttrib7Value($attrib7Value)
            ->setAttrib8Value($attrib8Value)
            ->setAttrib9Value($attrib9Value)
            ->setBookingId($bookingId)
            ->setCarrier($carrier)
            ->setCommisionLevelId($commisionLevelId)
            ->setCostCenter($costCenter)
            ->setCruiseCode($cruiseCode)
            ->setCruiseDescription($cruiseDescription)
            ->setDepartureCode($departureCode)
            ->setDepartureDescription($departureDescription)
            ->setDepartureTime($departureTime)
            ->setDescription($description)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setExtSystem($extSystem)
            ->setFlightNo($flightNo)
            ->setGroupReservation($groupReservation)
            ->setInkassoType($inkassoType)
            ->setIsChild($isChild)
            ->setIsPackage($isPackage)
            ->setItemType($itemType)
            ->setMidocoItemId($midocoItemId)
            ->setMidocoOrderId($midocoOrderId)
            ->setMidocoOrgUnit($midocoOrgUnit)
            ->setOpicCode($opicCode)
            ->setPackageDestination($packageDestination)
            ->setPaymentType($paymentType)
            ->setReturnArrivalTime($returnArrivalTime)
            ->setReturnCarrier($returnCarrier)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDepartureTime($returnDepartureTime)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setReturnFlightNo($returnFlightNo)
            ->setSellItemId($sellItemId)
            ->setStatus($status)
            ->setTaxPartPercent($taxPartPercent)
            ->setTravelType($travelType)
            ->setTurnaroundPoint($turnaroundPoint);
    }
    /**
     * Get accomodationCode value
     * @return string|null
     */
    public function getAccomodationCode(): ?string
    {
        return $this->accomodationCode;
    }
    /**
     * Set accomodationCode value
     * @param string $accomodationCode
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAccomodationCode(?string $accomodationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationCode) && !is_string($accomodationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationCode, true), gettype($accomodationCode)), __LINE__);
        }
        $this->accomodationCode = $accomodationCode;
        
        return $this;
    }
    /**
     * Get accomodationDescription value
     * @return string|null
     */
    public function getAccomodationDescription(): ?string
    {
        return $this->accomodationDescription;
    }
    /**
     * Set accomodationDescription value
     * @param string $accomodationDescription
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAccomodationDescription(?string $accomodationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDescription) && !is_string($accomodationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDescription, true), gettype($accomodationDescription)), __LINE__);
        }
        $this->accomodationDescription = $accomodationDescription;
        
        return $this;
    }
    /**
     * Get arrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->arrivalTime;
    }
    /**
     * Set arrivalTime value
     * @param string $arrivalTime
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get attrib10Value value
     * @return string|null
     */
    public function getAttrib10Value(): ?string
    {
        return $this->attrib10Value;
    }
    /**
     * Set attrib10Value value
     * @param string $attrib10Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib10Value(?string $attrib10Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib10Value) && !is_string($attrib10Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib10Value, true), gettype($attrib10Value)), __LINE__);
        }
        $this->attrib10Value = $attrib10Value;
        
        return $this;
    }
    /**
     * Get attrib1Value value
     * @return string|null
     */
    public function getAttrib1Value(): ?string
    {
        return $this->attrib1Value;
    }
    /**
     * Set attrib1Value value
     * @param string $attrib1Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib1Value(?string $attrib1Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib1Value) && !is_string($attrib1Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib1Value, true), gettype($attrib1Value)), __LINE__);
        }
        $this->attrib1Value = $attrib1Value;
        
        return $this;
    }
    /**
     * Get attrib2Value value
     * @return string|null
     */
    public function getAttrib2Value(): ?string
    {
        return $this->attrib2Value;
    }
    /**
     * Set attrib2Value value
     * @param string $attrib2Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib2Value(?string $attrib2Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib2Value) && !is_string($attrib2Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib2Value, true), gettype($attrib2Value)), __LINE__);
        }
        $this->attrib2Value = $attrib2Value;
        
        return $this;
    }
    /**
     * Get attrib3Value value
     * @return string|null
     */
    public function getAttrib3Value(): ?string
    {
        return $this->attrib3Value;
    }
    /**
     * Set attrib3Value value
     * @param string $attrib3Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib3Value(?string $attrib3Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib3Value) && !is_string($attrib3Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib3Value, true), gettype($attrib3Value)), __LINE__);
        }
        $this->attrib3Value = $attrib3Value;
        
        return $this;
    }
    /**
     * Get attrib4Value value
     * @return string|null
     */
    public function getAttrib4Value(): ?string
    {
        return $this->attrib4Value;
    }
    /**
     * Set attrib4Value value
     * @param string $attrib4Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib4Value(?string $attrib4Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib4Value) && !is_string($attrib4Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib4Value, true), gettype($attrib4Value)), __LINE__);
        }
        $this->attrib4Value = $attrib4Value;
        
        return $this;
    }
    /**
     * Get attrib5Value value
     * @return string|null
     */
    public function getAttrib5Value(): ?string
    {
        return $this->attrib5Value;
    }
    /**
     * Set attrib5Value value
     * @param string $attrib5Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib5Value(?string $attrib5Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib5Value) && !is_string($attrib5Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib5Value, true), gettype($attrib5Value)), __LINE__);
        }
        $this->attrib5Value = $attrib5Value;
        
        return $this;
    }
    /**
     * Get attrib6Value value
     * @return string|null
     */
    public function getAttrib6Value(): ?string
    {
        return $this->attrib6Value;
    }
    /**
     * Set attrib6Value value
     * @param string $attrib6Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib6Value(?string $attrib6Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib6Value) && !is_string($attrib6Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib6Value, true), gettype($attrib6Value)), __LINE__);
        }
        $this->attrib6Value = $attrib6Value;
        
        return $this;
    }
    /**
     * Get attrib7Value value
     * @return string|null
     */
    public function getAttrib7Value(): ?string
    {
        return $this->attrib7Value;
    }
    /**
     * Set attrib7Value value
     * @param string $attrib7Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib7Value(?string $attrib7Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib7Value) && !is_string($attrib7Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib7Value, true), gettype($attrib7Value)), __LINE__);
        }
        $this->attrib7Value = $attrib7Value;
        
        return $this;
    }
    /**
     * Get attrib8Value value
     * @return string|null
     */
    public function getAttrib8Value(): ?string
    {
        return $this->attrib8Value;
    }
    /**
     * Set attrib8Value value
     * @param string $attrib8Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib8Value(?string $attrib8Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib8Value) && !is_string($attrib8Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib8Value, true), gettype($attrib8Value)), __LINE__);
        }
        $this->attrib8Value = $attrib8Value;
        
        return $this;
    }
    /**
     * Get attrib9Value value
     * @return string|null
     */
    public function getAttrib9Value(): ?string
    {
        return $this->attrib9Value;
    }
    /**
     * Set attrib9Value value
     * @param string $attrib9Value
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setAttrib9Value(?string $attrib9Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib9Value) && !is_string($attrib9Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib9Value, true), gettype($attrib9Value)), __LINE__);
        }
        $this->attrib9Value = $attrib9Value;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get commisionLevelId value
     * @return string|null
     */
    public function getCommisionLevelId(): ?string
    {
        return $this->commisionLevelId;
    }
    /**
     * Set commisionLevelId value
     * @param string $commisionLevelId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setCommisionLevelId(?string $commisionLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($commisionLevelId) && !is_string($commisionLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commisionLevelId, true), gettype($commisionLevelId)), __LINE__);
        }
        $this->commisionLevelId = $commisionLevelId;
        
        return $this;
    }
    /**
     * Get costCenter value
     * @return string|null
     */
    public function getCostCenter(): ?string
    {
        return $this->costCenter;
    }
    /**
     * Set costCenter value
     * @param string $costCenter
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setCostCenter(?string $costCenter = null): self
    {
        // validation for constraint: string
        if (!is_null($costCenter) && !is_string($costCenter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCenter, true), gettype($costCenter)), __LINE__);
        }
        $this->costCenter = $costCenter;
        
        return $this;
    }
    /**
     * Get cruiseCode value
     * @return string|null
     */
    public function getCruiseCode(): ?string
    {
        return $this->cruiseCode;
    }
    /**
     * Set cruiseCode value
     * @param string $cruiseCode
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setCruiseCode(?string $cruiseCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseCode) && !is_string($cruiseCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseCode, true), gettype($cruiseCode)), __LINE__);
        }
        $this->cruiseCode = $cruiseCode;
        
        return $this;
    }
    /**
     * Get cruiseDescription value
     * @return string|null
     */
    public function getCruiseDescription(): ?string
    {
        return $this->cruiseDescription;
    }
    /**
     * Set cruiseDescription value
     * @param string $cruiseDescription
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setCruiseDescription(?string $cruiseDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseDescription) && !is_string($cruiseDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseDescription, true), gettype($cruiseDescription)), __LINE__);
        }
        $this->cruiseDescription = $cruiseDescription;
        
        return $this;
    }
    /**
     * Get departureCode value
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->departureCode;
    }
    /**
     * Set departureCode value
     * @param string $departureCode
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
        return $this;
    }
    /**
     * Get departureDescription value
     * @return string|null
     */
    public function getDepartureDescription(): ?string
    {
        return $this->departureDescription;
    }
    /**
     * Set departureDescription value
     * @param string $departureDescription
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setDepartureDescription(?string $departureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDescription) && !is_string($departureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDescription, true), gettype($departureDescription)), __LINE__);
        }
        $this->departureDescription = $departureDescription;
        
        return $this;
    }
    /**
     * Get departureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }
    /**
     * Set departureTime value
     * @param string $departureTime
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->departureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get destinationDescription value
     * @return string|null
     */
    public function getDestinationDescription(): ?string
    {
        return $this->destinationDescription;
    }
    /**
     * Set destinationDescription value
     * @param string $destinationDescription
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setDestinationDescription(?string $destinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDescription) && !is_string($destinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDescription, true), gettype($destinationDescription)), __LINE__);
        }
        $this->destinationDescription = $destinationDescription;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
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
     * Get groupReservation value
     * @return bool|null
     */
    public function getGroupReservation(): ?bool
    {
        return $this->groupReservation;
    }
    /**
     * Set groupReservation value
     * @param bool $groupReservation
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setGroupReservation(?bool $groupReservation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupReservation) && !is_bool($groupReservation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupReservation, true), gettype($groupReservation)), __LINE__);
        }
        $this->groupReservation = $groupReservation;
        
        return $this;
    }
    /**
     * Get inkassoType value
     * @return string|null
     */
    public function getInkassoType(): ?string
    {
        return $this->inkassoType;
    }
    /**
     * Set inkassoType value
     * @param string $inkassoType
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setInkassoType(?string $inkassoType = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoType) && !is_string($inkassoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoType, true), gettype($inkassoType)), __LINE__);
        }
        $this->inkassoType = $inkassoType;
        
        return $this;
    }
    /**
     * Get isChild value
     * @return bool|null
     */
    public function getIsChild(): ?bool
    {
        return $this->isChild;
    }
    /**
     * Set isChild value
     * @param bool $isChild
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setIsChild(?bool $isChild = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChild) && !is_bool($isChild)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChild, true), gettype($isChild)), __LINE__);
        }
        $this->isChild = $isChild;
        
        return $this;
    }
    /**
     * Get isPackage value
     * @return bool|null
     */
    public function getIsPackage(): ?bool
    {
        return $this->isPackage;
    }
    /**
     * Set isPackage value
     * @param bool $isPackage
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setIsPackage(?bool $isPackage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPackage) && !is_bool($isPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPackage, true), gettype($isPackage)), __LINE__);
        }
        $this->isPackage = $isPackage;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get midocoItemId value
     * @return int|null
     */
    public function getMidocoItemId(): ?int
    {
        return $this->midocoItemId;
    }
    /**
     * Set midocoItemId value
     * @param int $midocoItemId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setMidocoItemId(?int $midocoItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoItemId) && !(is_int($midocoItemId) || ctype_digit($midocoItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoItemId, true), gettype($midocoItemId)), __LINE__);
        }
        $this->midocoItemId = $midocoItemId;
        
        return $this;
    }
    /**
     * Get midocoOrderId value
     * @return int|null
     */
    public function getMidocoOrderId(): ?int
    {
        return $this->midocoOrderId;
    }
    /**
     * Set midocoOrderId value
     * @param int $midocoOrderId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setMidocoOrderId(?int $midocoOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoOrderId) && !(is_int($midocoOrderId) || ctype_digit($midocoOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoOrderId, true), gettype($midocoOrderId)), __LINE__);
        }
        $this->midocoOrderId = $midocoOrderId;
        
        return $this;
    }
    /**
     * Get midocoOrgUnit value
     * @return string|null
     */
    public function getMidocoOrgUnit(): ?string
    {
        return $this->midocoOrgUnit;
    }
    /**
     * Set midocoOrgUnit value
     * @param string $midocoOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setMidocoOrgUnit(?string $midocoOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrgUnit) && !is_string($midocoOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrgUnit, true), gettype($midocoOrgUnit)), __LINE__);
        }
        $this->midocoOrgUnit = $midocoOrgUnit;
        
        return $this;
    }
    /**
     * Get opicCode value
     * @return int|null
     */
    public function getOpicCode(): ?int
    {
        return $this->opicCode;
    }
    /**
     * Set opicCode value
     * @param int $opicCode
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setOpicCode(?int $opicCode = null): self
    {
        // validation for constraint: int
        if (!is_null($opicCode) && !(is_int($opicCode) || ctype_digit($opicCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($opicCode, true), gettype($opicCode)), __LINE__);
        }
        $this->opicCode = $opicCode;
        
        return $this;
    }
    /**
     * Get packageDestination value
     * @return string|null
     */
    public function getPackageDestination(): ?string
    {
        return $this->packageDestination;
    }
    /**
     * Set packageDestination value
     * @param string $packageDestination
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setPackageDestination(?string $packageDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($packageDestination) && !is_string($packageDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageDestination, true), gettype($packageDestination)), __LINE__);
        }
        $this->packageDestination = $packageDestination;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
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
     * Get returnArrivalTime value
     * @return string|null
     */
    public function getReturnArrivalTime(): ?string
    {
        return $this->returnArrivalTime;
    }
    /**
     * Set returnArrivalTime value
     * @param string $returnArrivalTime
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnArrivalTime(?string $returnArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnArrivalTime) && !is_string($returnArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnArrivalTime, true), gettype($returnArrivalTime)), __LINE__);
        }
        $this->returnArrivalTime = $returnArrivalTime;
        
        return $this;
    }
    /**
     * Get returnCarrier value
     * @return string|null
     */
    public function getReturnCarrier(): ?string
    {
        return $this->returnCarrier;
    }
    /**
     * Set returnCarrier value
     * @param string $returnCarrier
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnCarrier(?string $returnCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCarrier) && !is_string($returnCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCarrier, true), gettype($returnCarrier)), __LINE__);
        }
        $this->returnCarrier = $returnCarrier;
        
        return $this;
    }
    /**
     * Get returnDepartureCode value
     * @return string|null
     */
    public function getReturnDepartureCode(): ?string
    {
        return $this->returnDepartureCode;
    }
    /**
     * Set returnDepartureCode value
     * @param string $returnDepartureCode
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnDepartureCode(?string $returnDepartureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureCode) && !is_string($returnDepartureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureCode, true), gettype($returnDepartureCode)), __LINE__);
        }
        $this->returnDepartureCode = $returnDepartureCode;
        
        return $this;
    }
    /**
     * Get returnDepartureDescription value
     * @return string|null
     */
    public function getReturnDepartureDescription(): ?string
    {
        return $this->returnDepartureDescription;
    }
    /**
     * Set returnDepartureDescription value
     * @param string $returnDepartureDescription
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnDepartureDescription(?string $returnDepartureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDescription) && !is_string($returnDepartureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDescription, true), gettype($returnDepartureDescription)), __LINE__);
        }
        $this->returnDepartureDescription = $returnDepartureDescription;
        
        return $this;
    }
    /**
     * Get returnDepartureTime value
     * @return string|null
     */
    public function getReturnDepartureTime(): ?string
    {
        return $this->returnDepartureTime;
    }
    /**
     * Set returnDepartureTime value
     * @param string $returnDepartureTime
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnDepartureTime(?string $returnDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureTime) && !is_string($returnDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureTime, true), gettype($returnDepartureTime)), __LINE__);
        }
        $this->returnDepartureTime = $returnDepartureTime;
        
        return $this;
    }
    /**
     * Get returnDestinationCode value
     * @return string|null
     */
    public function getReturnDestinationCode(): ?string
    {
        return $this->returnDestinationCode;
    }
    /**
     * Set returnDestinationCode value
     * @param string $returnDestinationCode
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnDestinationCode(?string $returnDestinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationCode) && !is_string($returnDestinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationCode, true), gettype($returnDestinationCode)), __LINE__);
        }
        $this->returnDestinationCode = $returnDestinationCode;
        
        return $this;
    }
    /**
     * Get returnDestinationDescription value
     * @return string|null
     */
    public function getReturnDestinationDescription(): ?string
    {
        return $this->returnDestinationDescription;
    }
    /**
     * Set returnDestinationDescription value
     * @param string $returnDestinationDescription
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnDestinationDescription(?string $returnDestinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationDescription) && !is_string($returnDestinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationDescription, true), gettype($returnDestinationDescription)), __LINE__);
        }
        $this->returnDestinationDescription = $returnDestinationDescription;
        
        return $this;
    }
    /**
     * Get returnFlightNo value
     * @return string|null
     */
    public function getReturnFlightNo(): ?string
    {
        return $this->returnFlightNo;
    }
    /**
     * Set returnFlightNo value
     * @param string $returnFlightNo
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setReturnFlightNo(?string $returnFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFlightNo) && !is_string($returnFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFlightNo, true), gettype($returnFlightNo)), __LINE__);
        }
        $this->returnFlightNo = $returnFlightNo;
        
        return $this;
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
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
     * Get taxPartPercent value
     * @return float|null
     */
    public function getTaxPartPercent(): ?float
    {
        return $this->taxPartPercent;
    }
    /**
     * Set taxPartPercent value
     * @param float $taxPartPercent
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setTaxPartPercent(?float $taxPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($taxPartPercent) && !(is_float($taxPartPercent) || is_numeric($taxPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPartPercent, true), gettype($taxPartPercent)), __LINE__);
        }
        $this->taxPartPercent = $taxPartPercent;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
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
     * Get turnaroundPoint value
     * @return string|null
     */
    public function getTurnaroundPoint(): ?string
    {
        return $this->turnaroundPoint;
    }
    /**
     * Set turnaroundPoint value
     * @param string $turnaroundPoint
     * @return \Pggns\MidocoApi\Mis\StructType\SellItemDimensionDTO
     */
    public function setTurnaroundPoint(?string $turnaroundPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($turnaroundPoint) && !is_string($turnaroundPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($turnaroundPoint, true), gettype($turnaroundPoint)), __LINE__);
        }
        $this->turnaroundPoint = $turnaroundPoint;
        
        return $this;
    }
}
