<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisFlightRouteDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisFlightRouteDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
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
     * The isCorpMember
     * @var bool|null
     */
    protected ?bool $isCorpMember = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The mainCabin
     * @var string|null
     */
    protected ?string $mainCabin = null;
    /**
     * The mainCarrier
     * @var string|null
     */
    protected ?string $mainCarrier = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The regionId
     * @var int|null
     */
    protected ?int $regionId = null;
    /**
     * The route
     * @var string|null
     */
    protected ?string $route = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MisFlightRouteDTO
     * @uses MisFlightRouteDTO::setCreationDate()
     * @uses MisFlightRouteDTO::setCustomerId()
     * @uses MisFlightRouteDTO::setDepartureCode()
     * @uses MisFlightRouteDTO::setDestinationCode()
     * @uses MisFlightRouteDTO::setIsCorpMember()
     * @uses MisFlightRouteDTO::setItemId()
     * @uses MisFlightRouteDTO::setMainCabin()
     * @uses MisFlightRouteDTO::setMainCarrier()
     * @uses MisFlightRouteDTO::setOrderId()
     * @uses MisFlightRouteDTO::setPosition()
     * @uses MisFlightRouteDTO::setRegionId()
     * @uses MisFlightRouteDTO::setRoute()
     * @uses MisFlightRouteDTO::setTravelDate()
     * @uses MisFlightRouteDTO::setUnitName()
     * @param string $creationDate
     * @param int $customerId
     * @param string $departureCode
     * @param string $destinationCode
     * @param bool $isCorpMember
     * @param int $itemId
     * @param string $mainCabin
     * @param string $mainCarrier
     * @param int $orderId
     * @param int $position
     * @param int $regionId
     * @param string $route
     * @param string $travelDate
     * @param string $unitName
     */
    public function __construct(?string $creationDate = null, ?int $customerId = null, ?string $departureCode = null, ?string $destinationCode = null, ?bool $isCorpMember = null, ?int $itemId = null, ?string $mainCabin = null, ?string $mainCarrier = null, ?int $orderId = null, ?int $position = null, ?int $regionId = null, ?string $route = null, ?string $travelDate = null, ?string $unitName = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCustomerId($customerId)
            ->setDepartureCode($departureCode)
            ->setDestinationCode($destinationCode)
            ->setIsCorpMember($isCorpMember)
            ->setItemId($itemId)
            ->setMainCabin($mainCabin)
            ->setMainCarrier($mainCarrier)
            ->setOrderId($orderId)
            ->setPosition($position)
            ->setRegionId($regionId)
            ->setRoute($route)
            ->setTravelDate($travelDate)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
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
     * Get isCorpMember value
     * @return bool|null
     */
    public function getIsCorpMember(): ?bool
    {
        return $this->isCorpMember;
    }
    /**
     * Set isCorpMember value
     * @param bool $isCorpMember
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setIsCorpMember(?bool $isCorpMember = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCorpMember) && !is_bool($isCorpMember)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCorpMember, true), gettype($isCorpMember)), __LINE__);
        }
        $this->isCorpMember = $isCorpMember;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get mainCabin value
     * @return string|null
     */
    public function getMainCabin(): ?string
    {
        return $this->mainCabin;
    }
    /**
     * Set mainCabin value
     * @param string $mainCabin
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setMainCabin(?string $mainCabin = null): self
    {
        // validation for constraint: string
        if (!is_null($mainCabin) && !is_string($mainCabin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainCabin, true), gettype($mainCabin)), __LINE__);
        }
        $this->mainCabin = $mainCabin;
        
        return $this;
    }
    /**
     * Get mainCarrier value
     * @return string|null
     */
    public function getMainCarrier(): ?string
    {
        return $this->mainCarrier;
    }
    /**
     * Set mainCarrier value
     * @param string $mainCarrier
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setMainCarrier(?string $mainCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($mainCarrier) && !is_string($mainCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainCarrier, true), gettype($mainCarrier)), __LINE__);
        }
        $this->mainCarrier = $mainCarrier;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
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
     * Get regionId value
     * @return int|null
     */
    public function getRegionId(): ?int
    {
        return $this->regionId;
    }
    /**
     * Set regionId value
     * @param int $regionId
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setRegionId(?int $regionId = null): self
    {
        // validation for constraint: int
        if (!is_null($regionId) && !(is_int($regionId) || ctype_digit($regionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($regionId, true), gettype($regionId)), __LINE__);
        }
        $this->regionId = $regionId;
        
        return $this;
    }
    /**
     * Get route value
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param string $route
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setRoute(?string $route = null): self
    {
        // validation for constraint: string
        if (!is_null($route) && !is_string($route)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($route, true), gettype($route)), __LINE__);
        }
        $this->route = $route;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightRouteDTO
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
}
