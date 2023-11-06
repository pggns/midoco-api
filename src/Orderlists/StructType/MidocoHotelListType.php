<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoHotelListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoHotelListType extends AbstractStructBase
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
     * The bookedRoomDescription
     * @var string|null
     */
    protected ?string $bookedRoomDescription = null;
    /**
     * The bookedRoomCount
     * @var int|null
     */
    protected ?int $bookedRoomCount = null;
    /**
     * The passenger
     * @var string|null
     */
    protected ?string $passenger = null;
    /**
     * Constructor method for MidocoHotelListType
     * @uses MidocoHotelListType::setSupplierId()
     * @uses MidocoHotelListType::setDestinataionArea()
     * @uses MidocoHotelListType::setHotelCode()
     * @uses MidocoHotelListType::setHotelName()
     * @uses MidocoHotelListType::setBookedRoomDescription()
     * @uses MidocoHotelListType::setBookedRoomCount()
     * @uses MidocoHotelListType::setPassenger()
     * @param string $supplierId
     * @param string $destinataionArea
     * @param string $hotelCode
     * @param string $hotelName
     * @param string $bookedRoomDescription
     * @param int $bookedRoomCount
     * @param string $passenger
     */
    public function __construct(?string $supplierId = null, ?string $destinataionArea = null, ?string $hotelCode = null, ?string $hotelName = null, ?string $bookedRoomDescription = null, ?int $bookedRoomCount = null, ?string $passenger = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setDestinataionArea($destinataionArea)
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName)
            ->setBookedRoomDescription($bookedRoomDescription)
            ->setBookedRoomCount($bookedRoomCount)
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListType
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
     * Get bookedRoomDescription value
     * @return string|null
     */
    public function getBookedRoomDescription(): ?string
    {
        return $this->bookedRoomDescription;
    }
    /**
     * Set bookedRoomDescription value
     * @param string $bookedRoomDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListType
     */
    public function setBookedRoomDescription(?string $bookedRoomDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($bookedRoomDescription) && !is_string($bookedRoomDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookedRoomDescription, true), gettype($bookedRoomDescription)), __LINE__);
        }
        $this->bookedRoomDescription = $bookedRoomDescription;
        
        return $this;
    }
    /**
     * Get bookedRoomCount value
     * @return int|null
     */
    public function getBookedRoomCount(): ?int
    {
        return $this->bookedRoomCount;
    }
    /**
     * Set bookedRoomCount value
     * @param int $bookedRoomCount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListType
     */
    public function setBookedRoomCount(?int $bookedRoomCount = null): self
    {
        // validation for constraint: int
        if (!is_null($bookedRoomCount) && !(is_int($bookedRoomCount) || ctype_digit($bookedRoomCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookedRoomCount, true), gettype($bookedRoomCount)), __LINE__);
        }
        $this->bookedRoomCount = $bookedRoomCount;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoHotelListType
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
