<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTransferListType StructType
 * @subpackage Structs
 */
class MidocoTransferListType extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The destinataionArea
     * @var string|null
     */
    protected ?string $destinataionArea = null;
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The passenger
     * @var string|null
     */
    protected ?string $passenger = null;
    /**
     * Constructor method for MidocoTransferListType
     * @uses MidocoTransferListType::setSupplierId()
     * @uses MidocoTransferListType::setDestinataionArea()
     * @uses MidocoTransferListType::setHotelCode()
     * @uses MidocoTransferListType::setHotelName()
     * @uses MidocoTransferListType::setDepartureDate()
     * @uses MidocoTransferListType::setDepartureTime()
     * @uses MidocoTransferListType::setArrivalTime()
     * @uses MidocoTransferListType::setPassenger()
     * @param string $supplierId
     * @param string $destinataionArea
     * @param string $hotelCode
     * @param string $hotelName
     * @param string $departureDate
     * @param string $departureTime
     * @param string $arrivalTime
     * @param string $passenger
     */
    public function __construct(?string $supplierId = null, ?string $destinataionArea = null, ?string $hotelCode = null, ?string $hotelName = null, ?string $departureDate = null, ?string $departureTime = null, ?string $arrivalTime = null, ?string $passenger = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setDestinataionArea($destinataionArea)
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setPassenger($passenger);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
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
     * Get destinataionArea value
     * @return string|null
     */
    public function getDestinataionArea(): ?string
    {
        return $this->destinataionArea;
    }
    /**
     * Set destinataionArea value
     * @param string $destinataionArea
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
     */
    public function setDestinataionArea(?string $destinataionArea = null): self
    {
        // validation for constraint: string
        if (!is_null($destinataionArea) && !is_string($destinataionArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinataionArea, true), gettype($destinataionArea)), __LINE__);
        }
        $this->destinataionArea = $destinataionArea;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType
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
}
