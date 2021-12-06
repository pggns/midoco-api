<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoParticipantListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoParticipantListCriteriaType extends AbstractStructBase
{
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The departure
     * @var string|null
     */
    protected ?string $departure = null;
    /**
     * The departureFromDate
     * @var string|null
     */
    protected ?string $departureFromDate = null;
    /**
     * The arrivalFromDate
     * @var string|null
     */
    protected ?string $arrivalFromDate = null;
    /**
     * The departureToDate
     * @var string|null
     */
    protected ?string $departureToDate = null;
    /**
     * The arrivalToDate
     * @var string|null
     */
    protected ?string $arrivalToDate = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The destinationArea
     * @var string|null
     */
    protected ?string $destinationArea = null;
    /**
     * The areaDescription
     * @var string|null
     */
    protected ?string $areaDescription = null;
    /**
     * Constructor method for MidocoParticipantListCriteriaType
     * @uses MidocoParticipantListCriteriaType::setOrgUnits()
     * @uses MidocoParticipantListCriteriaType::setDeparture()
     * @uses MidocoParticipantListCriteriaType::setDepartureFromDate()
     * @uses MidocoParticipantListCriteriaType::setArrivalFromDate()
     * @uses MidocoParticipantListCriteriaType::setDepartureToDate()
     * @uses MidocoParticipantListCriteriaType::setArrivalToDate()
     * @uses MidocoParticipantListCriteriaType::setHotelName()
     * @uses MidocoParticipantListCriteriaType::setHotelCode()
     * @uses MidocoParticipantListCriteriaType::setFlightNo()
     * @uses MidocoParticipantListCriteriaType::setSupplierId()
     * @uses MidocoParticipantListCriteriaType::setDestinationArea()
     * @uses MidocoParticipantListCriteriaType::setAreaDescription()
     * @param string[] $orgUnits
     * @param string $departure
     * @param string $departureFromDate
     * @param string $arrivalFromDate
     * @param string $departureToDate
     * @param string $arrivalToDate
     * @param string $hotelName
     * @param string $hotelCode
     * @param string $flightNo
     * @param string $supplierId
     * @param string $destinationArea
     * @param string $areaDescription
     */
    public function __construct(?array $orgUnits = null, ?string $departure = null, ?string $departureFromDate = null, ?string $arrivalFromDate = null, ?string $departureToDate = null, ?string $arrivalToDate = null, ?string $hotelName = null, ?string $hotelCode = null, ?string $flightNo = null, ?string $supplierId = null, ?string $destinationArea = null, ?string $areaDescription = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setDeparture($departure)
            ->setDepartureFromDate($departureFromDate)
            ->setArrivalFromDate($arrivalFromDate)
            ->setDepartureToDate($departureToDate)
            ->setArrivalToDate($arrivalToDate)
            ->setHotelName($hotelName)
            ->setHotelCode($hotelCode)
            ->setFlightNo($flightNo)
            ->setSupplierId($supplierId)
            ->setDestinationArea($destinationArea)
            ->setAreaDescription($areaDescription);
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintsFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoParticipantListCriteriaTypeOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoParticipantListCriteriaTypeOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoParticipantListCriteriaTypeOrgUnitsItem) ? get_class($midocoParticipantListCriteriaTypeOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoParticipantListCriteriaTypeOrgUnitsItem), var_export($midocoParticipantListCriteriaTypeOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintsFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get departure value
     * @return string|null
     */
    public function getDeparture(): ?string
    {
        return $this->departure;
    }
    /**
     * Set departure value
     * @param string $departure
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setDeparture(?string $departure = null): self
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure, true), gettype($departure)), __LINE__);
        }
        $this->departure = $departure;
        
        return $this;
    }
    /**
     * Get departureFromDate value
     * @return string|null
     */
    public function getDepartureFromDate(): ?string
    {
        return $this->departureFromDate;
    }
    /**
     * Set departureFromDate value
     * @param string $departureFromDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setDepartureFromDate(?string $departureFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureFromDate) && !is_string($departureFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureFromDate, true), gettype($departureFromDate)), __LINE__);
        }
        $this->departureFromDate = $departureFromDate;
        
        return $this;
    }
    /**
     * Get arrivalFromDate value
     * @return string|null
     */
    public function getArrivalFromDate(): ?string
    {
        return $this->arrivalFromDate;
    }
    /**
     * Set arrivalFromDate value
     * @param string $arrivalFromDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setArrivalFromDate(?string $arrivalFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalFromDate) && !is_string($arrivalFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalFromDate, true), gettype($arrivalFromDate)), __LINE__);
        }
        $this->arrivalFromDate = $arrivalFromDate;
        
        return $this;
    }
    /**
     * Get departureToDate value
     * @return string|null
     */
    public function getDepartureToDate(): ?string
    {
        return $this->departureToDate;
    }
    /**
     * Set departureToDate value
     * @param string $departureToDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setDepartureToDate(?string $departureToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureToDate) && !is_string($departureToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureToDate, true), gettype($departureToDate)), __LINE__);
        }
        $this->departureToDate = $departureToDate;
        
        return $this;
    }
    /**
     * Get arrivalToDate value
     * @return string|null
     */
    public function getArrivalToDate(): ?string
    {
        return $this->arrivalToDate;
    }
    /**
     * Set arrivalToDate value
     * @param string $arrivalToDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setArrivalToDate(?string $arrivalToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalToDate) && !is_string($arrivalToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalToDate, true), gettype($arrivalToDate)), __LINE__);
        }
        $this->arrivalToDate = $arrivalToDate;
        
        return $this;
    }
    /**
     * Get hotelName value
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }
    /**
     * Set hotelName value
     * @param string $hotelName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setHotelName(?string $hotelName = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelName, true), gettype($hotelName)), __LINE__);
        }
        $this->hotelName = $hotelName;
        
        return $this;
    }
    /**
     * Get hotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->hotelCode;
    }
    /**
     * Set hotelCode value
     * @param string $hotelCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        $this->hotelCode = $hotelCode;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get destinationArea value
     * @return string|null
     */
    public function getDestinationArea(): ?string
    {
        return $this->destinationArea;
    }
    /**
     * Set destinationArea value
     * @param string $destinationArea
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setDestinationArea(?string $destinationArea = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationArea) && !is_string($destinationArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationArea, true), gettype($destinationArea)), __LINE__);
        }
        $this->destinationArea = $destinationArea;
        
        return $this;
    }
    /**
     * Get areaDescription value
     * @return string|null
     */
    public function getAreaDescription(): ?string
    {
        return $this->areaDescription;
    }
    /**
     * Set areaDescription value
     * @param string $areaDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListCriteriaType
     */
    public function setAreaDescription(?string $areaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($areaDescription) && !is_string($areaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaDescription, true), gettype($areaDescription)), __LINE__);
        }
        $this->areaDescription = $areaDescription;
        
        return $this;
    }
}
