<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoParticipantListType StructType
 * @subpackage Structs
 */
class MidocoParticipantListType extends AbstractStructBase
{
    /**
     * The departure
     * @var string|null
     */
    protected ?string $departure = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The arrivalDate
     * @var string|null
     */
    protected ?string $arrivalDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The participant
     * @var string|null
     */
    protected ?string $participant = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The hotel
     * @var string|null
     */
    protected ?string $hotel = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * Constructor method for MidocoParticipantListType
     * @uses MidocoParticipantListType::setDeparture()
     * @uses MidocoParticipantListType::setDepartureDate()
     * @uses MidocoParticipantListType::setArrivalDate()
     * @uses MidocoParticipantListType::setOrderNo()
     * @uses MidocoParticipantListType::setParticipant()
     * @uses MidocoParticipantListType::setFlightNo()
     * @uses MidocoParticipantListType::setHotel()
     * @uses MidocoParticipantListType::setSupplierId()
     * @uses MidocoParticipantListType::setMidocoCustomerId()
     * @param string $departure
     * @param string $departureDate
     * @param string $arrivalDate
     * @param int $orderNo
     * @param string $participant
     * @param string $flightNo
     * @param string $hotel
     * @param string $supplierId
     * @param int $midocoCustomerId
     */
    public function __construct(?string $departure = null, ?string $departureDate = null, ?string $arrivalDate = null, ?int $orderNo = null, ?string $participant = null, ?string $flightNo = null, ?string $hotel = null, ?string $supplierId = null, ?int $midocoCustomerId = null)
    {
        $this
            ->setDeparture($departure)
            ->setDepartureDate($departureDate)
            ->setArrivalDate($arrivalDate)
            ->setOrderNo($orderNo)
            ->setParticipant($participant)
            ->setFlightNo($flightNo)
            ->setHotel($hotel)
            ->setSupplierId($supplierId)
            ->setMidocoCustomerId($midocoCustomerId);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
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
     * Get arrivalDate value
     * @return string|null
     */
    public function getArrivalDate(): ?string
    {
        return $this->arrivalDate;
    }
    /**
     * Set arrivalDate value
     * @param string $arrivalDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
        }
        $this->arrivalDate = $arrivalDate;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
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
     * Get participant value
     * @return string|null
     */
    public function getParticipant(): ?string
    {
        return $this->participant;
    }
    /**
     * Set participant value
     * @param string $participant
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
     */
    public function setParticipant(?string $participant = null): self
    {
        // validation for constraint: string
        if (!is_null($participant) && !is_string($participant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($participant, true), gettype($participant)), __LINE__);
        }
        $this->participant = $participant;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
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
     * Get hotel value
     * @return string|null
     */
    public function getHotel(): ?string
    {
        return $this->hotel;
    }
    /**
     * Set hotel value
     * @param string $hotel
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
     */
    public function setHotel(?string $hotel = null): self
    {
        // validation for constraint: string
        if (!is_null($hotel) && !is_string($hotel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotel, true), gettype($hotel)), __LINE__);
        }
        $this->hotel = $hotel;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
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
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
