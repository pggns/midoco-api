<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightDetailDTO extends AbstractStructBase
{
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The flightDate
     * @var string|null
     */
    protected ?string $flightDate = null;
    /**
     * The midocoItemId
     * @var int|null
     */
    protected ?int $midocoItemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * Constructor method for FlightDetailDTO
     * @uses FlightDetailDTO::setCarrier()
     * @uses FlightDetailDTO::setDepartureCode()
     * @uses FlightDetailDTO::setDestinationCode()
     * @uses FlightDetailDTO::setFlightDate()
     * @uses FlightDetailDTO::setMidocoItemId()
     * @uses FlightDetailDTO::setPosition()
     * @uses FlightDetailDTO::setSellItemId()
     * @uses FlightDetailDTO::setServiceStatus()
     * @param string $carrier
     * @param string $departureCode
     * @param string $destinationCode
     * @param string $flightDate
     * @param int $midocoItemId
     * @param int $position
     * @param int $sellItemId
     * @param string $serviceStatus
     */
    public function __construct(?string $carrier = null, ?string $departureCode = null, ?string $destinationCode = null, ?string $flightDate = null, ?int $midocoItemId = null, ?int $position = null, ?int $sellItemId = null, ?string $serviceStatus = null)
    {
        $this
            ->setCarrier($carrier)
            ->setDepartureCode($departureCode)
            ->setDestinationCode($destinationCode)
            ->setFlightDate($flightDate)
            ->setMidocoItemId($midocoItemId)
            ->setPosition($position)
            ->setSellItemId($sellItemId)
            ->setServiceStatus($serviceStatus);
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
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
     * Get flightDate value
     * @return string|null
     */
    public function getFlightDate(): ?string
    {
        return $this->flightDate;
    }
    /**
     * Set flightDate value
     * @param string $flightDate
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
     */
    public function setFlightDate(?string $flightDate = null): self
    {
        // validation for constraint: string
        if (!is_null($flightDate) && !is_string($flightDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightDate, true), gettype($flightDate)), __LINE__);
        }
        $this->flightDate = $flightDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
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
     * Get serviceStatus value
     * @return string|null
     */
    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }
    /**
     * Set serviceStatus value
     * @param string $serviceStatus
     * @return \Pggns\MidocoApi\Mis\StructType\FlightDetailDTO
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceStatus) && !is_string($serviceStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceStatus, true), gettype($serviceStatus)), __LINE__);
        }
        $this->serviceStatus = $serviceStatus;
        
        return $this;
    }
}
