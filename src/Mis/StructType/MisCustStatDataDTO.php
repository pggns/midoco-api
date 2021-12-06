<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCustStatDataDTO StructType
 * @subpackage Structs
 */
class MisCustStatDataDTO extends AbstractStructBase
{
    /**
     * The avrgBookingPrice
     * @var float|null
     */
    protected ?float $avrgBookingPrice = null;
    /**
     * The avrgOrderPrice
     * @var float|null
     */
    protected ?float $avrgOrderPrice = null;
    /**
     * The avrgPersonCount
     * @var int|null
     */
    protected ?int $avrgPersonCount = null;
    /**
     * The avrgPricePerPerson
     * @var float|null
     */
    protected ?float $avrgPricePerPerson = null;
    /**
     * The bookingCount
     * @var int|null
     */
    protected ?int $bookingCount = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The firstTravelBookingDate
     * @var string|null
     */
    protected ?string $firstTravelBookingDate = null;
    /**
     * The firstTravelDate
     * @var string|null
     */
    protected ?string $firstTravelDate = null;
    /**
     * The lastActivity
     * @var string|null
     */
    protected ?string $lastActivity = null;
    /**
     * The lastBookingOrgunit
     * @var string|null
     */
    protected ?string $lastBookingOrgunit = null;
    /**
     * The lastBookingUser
     * @var int|null
     */
    protected ?int $lastBookingUser = null;
    /**
     * The lastCampaignDate
     * @var string|null
     */
    protected ?string $lastCampaignDate = null;
    /**
     * The lastTravelBookingDate
     * @var string|null
     */
    protected ?string $lastTravelBookingDate = null;
    /**
     * The lastTravelDate
     * @var string|null
     */
    protected ?string $lastTravelDate = null;
    /**
     * The lastTravelMediatorId
     * @var string|null
     */
    protected ?string $lastTravelMediatorId = null;
    /**
     * The orderCount
     * @var int|null
     */
    protected ?int $orderCount = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The priceSum
     * @var float|null
     */
    protected ?float $priceSum = null;
    /**
     * Constructor method for MisCustStatDataDTO
     * @uses MisCustStatDataDTO::setAvrgBookingPrice()
     * @uses MisCustStatDataDTO::setAvrgOrderPrice()
     * @uses MisCustStatDataDTO::setAvrgPersonCount()
     * @uses MisCustStatDataDTO::setAvrgPricePerPerson()
     * @uses MisCustStatDataDTO::setBookingCount()
     * @uses MisCustStatDataDTO::setCustomerId()
     * @uses MisCustStatDataDTO::setFirstTravelBookingDate()
     * @uses MisCustStatDataDTO::setFirstTravelDate()
     * @uses MisCustStatDataDTO::setLastActivity()
     * @uses MisCustStatDataDTO::setLastBookingOrgunit()
     * @uses MisCustStatDataDTO::setLastBookingUser()
     * @uses MisCustStatDataDTO::setLastCampaignDate()
     * @uses MisCustStatDataDTO::setLastTravelBookingDate()
     * @uses MisCustStatDataDTO::setLastTravelDate()
     * @uses MisCustStatDataDTO::setLastTravelMediatorId()
     * @uses MisCustStatDataDTO::setOrderCount()
     * @uses MisCustStatDataDTO::setOrgUnit()
     * @uses MisCustStatDataDTO::setPriceSum()
     * @param float $avrgBookingPrice
     * @param float $avrgOrderPrice
     * @param int $avrgPersonCount
     * @param float $avrgPricePerPerson
     * @param int $bookingCount
     * @param int $customerId
     * @param string $firstTravelBookingDate
     * @param string $firstTravelDate
     * @param string $lastActivity
     * @param string $lastBookingOrgunit
     * @param int $lastBookingUser
     * @param string $lastCampaignDate
     * @param string $lastTravelBookingDate
     * @param string $lastTravelDate
     * @param string $lastTravelMediatorId
     * @param int $orderCount
     * @param string $orgUnit
     * @param float $priceSum
     */
    public function __construct(?float $avrgBookingPrice = null, ?float $avrgOrderPrice = null, ?int $avrgPersonCount = null, ?float $avrgPricePerPerson = null, ?int $bookingCount = null, ?int $customerId = null, ?string $firstTravelBookingDate = null, ?string $firstTravelDate = null, ?string $lastActivity = null, ?string $lastBookingOrgunit = null, ?int $lastBookingUser = null, ?string $lastCampaignDate = null, ?string $lastTravelBookingDate = null, ?string $lastTravelDate = null, ?string $lastTravelMediatorId = null, ?int $orderCount = null, ?string $orgUnit = null, ?float $priceSum = null)
    {
        $this
            ->setAvrgBookingPrice($avrgBookingPrice)
            ->setAvrgOrderPrice($avrgOrderPrice)
            ->setAvrgPersonCount($avrgPersonCount)
            ->setAvrgPricePerPerson($avrgPricePerPerson)
            ->setBookingCount($bookingCount)
            ->setCustomerId($customerId)
            ->setFirstTravelBookingDate($firstTravelBookingDate)
            ->setFirstTravelDate($firstTravelDate)
            ->setLastActivity($lastActivity)
            ->setLastBookingOrgunit($lastBookingOrgunit)
            ->setLastBookingUser($lastBookingUser)
            ->setLastCampaignDate($lastCampaignDate)
            ->setLastTravelBookingDate($lastTravelBookingDate)
            ->setLastTravelDate($lastTravelDate)
            ->setLastTravelMediatorId($lastTravelMediatorId)
            ->setOrderCount($orderCount)
            ->setOrgUnit($orgUnit)
            ->setPriceSum($priceSum);
    }
    /**
     * Get avrgBookingPrice value
     * @return float|null
     */
    public function getAvrgBookingPrice(): ?float
    {
        return $this->avrgBookingPrice;
    }
    /**
     * Set avrgBookingPrice value
     * @param float $avrgBookingPrice
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setAvrgBookingPrice(?float $avrgBookingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($avrgBookingPrice) && !(is_float($avrgBookingPrice) || is_numeric($avrgBookingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($avrgBookingPrice, true), gettype($avrgBookingPrice)), __LINE__);
        }
        $this->avrgBookingPrice = $avrgBookingPrice;
        
        return $this;
    }
    /**
     * Get avrgOrderPrice value
     * @return float|null
     */
    public function getAvrgOrderPrice(): ?float
    {
        return $this->avrgOrderPrice;
    }
    /**
     * Set avrgOrderPrice value
     * @param float $avrgOrderPrice
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setAvrgOrderPrice(?float $avrgOrderPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($avrgOrderPrice) && !(is_float($avrgOrderPrice) || is_numeric($avrgOrderPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($avrgOrderPrice, true), gettype($avrgOrderPrice)), __LINE__);
        }
        $this->avrgOrderPrice = $avrgOrderPrice;
        
        return $this;
    }
    /**
     * Get avrgPersonCount value
     * @return int|null
     */
    public function getAvrgPersonCount(): ?int
    {
        return $this->avrgPersonCount;
    }
    /**
     * Set avrgPersonCount value
     * @param int $avrgPersonCount
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setAvrgPersonCount(?int $avrgPersonCount = null): self
    {
        // validation for constraint: int
        if (!is_null($avrgPersonCount) && !(is_int($avrgPersonCount) || ctype_digit($avrgPersonCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($avrgPersonCount, true), gettype($avrgPersonCount)), __LINE__);
        }
        $this->avrgPersonCount = $avrgPersonCount;
        
        return $this;
    }
    /**
     * Get avrgPricePerPerson value
     * @return float|null
     */
    public function getAvrgPricePerPerson(): ?float
    {
        return $this->avrgPricePerPerson;
    }
    /**
     * Set avrgPricePerPerson value
     * @param float $avrgPricePerPerson
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setAvrgPricePerPerson(?float $avrgPricePerPerson = null): self
    {
        // validation for constraint: float
        if (!is_null($avrgPricePerPerson) && !(is_float($avrgPricePerPerson) || is_numeric($avrgPricePerPerson))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($avrgPricePerPerson, true), gettype($avrgPricePerPerson)), __LINE__);
        }
        $this->avrgPricePerPerson = $avrgPricePerPerson;
        
        return $this;
    }
    /**
     * Get bookingCount value
     * @return int|null
     */
    public function getBookingCount(): ?int
    {
        return $this->bookingCount;
    }
    /**
     * Set bookingCount value
     * @param int $bookingCount
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setBookingCount(?int $bookingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingCount) && !(is_int($bookingCount) || ctype_digit($bookingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingCount, true), gettype($bookingCount)), __LINE__);
        }
        $this->bookingCount = $bookingCount;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
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
     * Get firstTravelBookingDate value
     * @return string|null
     */
    public function getFirstTravelBookingDate(): ?string
    {
        return $this->firstTravelBookingDate;
    }
    /**
     * Set firstTravelBookingDate value
     * @param string $firstTravelBookingDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setFirstTravelBookingDate(?string $firstTravelBookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($firstTravelBookingDate) && !is_string($firstTravelBookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstTravelBookingDate, true), gettype($firstTravelBookingDate)), __LINE__);
        }
        $this->firstTravelBookingDate = $firstTravelBookingDate;
        
        return $this;
    }
    /**
     * Get firstTravelDate value
     * @return string|null
     */
    public function getFirstTravelDate(): ?string
    {
        return $this->firstTravelDate;
    }
    /**
     * Set firstTravelDate value
     * @param string $firstTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setFirstTravelDate(?string $firstTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($firstTravelDate) && !is_string($firstTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstTravelDate, true), gettype($firstTravelDate)), __LINE__);
        }
        $this->firstTravelDate = $firstTravelDate;
        
        return $this;
    }
    /**
     * Get lastActivity value
     * @return string|null
     */
    public function getLastActivity(): ?string
    {
        return $this->lastActivity;
    }
    /**
     * Set lastActivity value
     * @param string $lastActivity
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setLastActivity(?string $lastActivity = null): self
    {
        // validation for constraint: string
        if (!is_null($lastActivity) && !is_string($lastActivity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastActivity, true), gettype($lastActivity)), __LINE__);
        }
        $this->lastActivity = $lastActivity;
        
        return $this;
    }
    /**
     * Get lastBookingOrgunit value
     * @return string|null
     */
    public function getLastBookingOrgunit(): ?string
    {
        return $this->lastBookingOrgunit;
    }
    /**
     * Set lastBookingOrgunit value
     * @param string $lastBookingOrgunit
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setLastBookingOrgunit(?string $lastBookingOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($lastBookingOrgunit) && !is_string($lastBookingOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastBookingOrgunit, true), gettype($lastBookingOrgunit)), __LINE__);
        }
        $this->lastBookingOrgunit = $lastBookingOrgunit;
        
        return $this;
    }
    /**
     * Get lastBookingUser value
     * @return int|null
     */
    public function getLastBookingUser(): ?int
    {
        return $this->lastBookingUser;
    }
    /**
     * Set lastBookingUser value
     * @param int $lastBookingUser
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setLastBookingUser(?int $lastBookingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastBookingUser) && !(is_int($lastBookingUser) || ctype_digit($lastBookingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastBookingUser, true), gettype($lastBookingUser)), __LINE__);
        }
        $this->lastBookingUser = $lastBookingUser;
        
        return $this;
    }
    /**
     * Get lastCampaignDate value
     * @return string|null
     */
    public function getLastCampaignDate(): ?string
    {
        return $this->lastCampaignDate;
    }
    /**
     * Set lastCampaignDate value
     * @param string $lastCampaignDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setLastCampaignDate(?string $lastCampaignDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastCampaignDate) && !is_string($lastCampaignDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastCampaignDate, true), gettype($lastCampaignDate)), __LINE__);
        }
        $this->lastCampaignDate = $lastCampaignDate;
        
        return $this;
    }
    /**
     * Get lastTravelBookingDate value
     * @return string|null
     */
    public function getLastTravelBookingDate(): ?string
    {
        return $this->lastTravelBookingDate;
    }
    /**
     * Set lastTravelBookingDate value
     * @param string $lastTravelBookingDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setLastTravelBookingDate(?string $lastTravelBookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelBookingDate) && !is_string($lastTravelBookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelBookingDate, true), gettype($lastTravelBookingDate)), __LINE__);
        }
        $this->lastTravelBookingDate = $lastTravelBookingDate;
        
        return $this;
    }
    /**
     * Get lastTravelDate value
     * @return string|null
     */
    public function getLastTravelDate(): ?string
    {
        return $this->lastTravelDate;
    }
    /**
     * Set lastTravelDate value
     * @param string $lastTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setLastTravelDate(?string $lastTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelDate) && !is_string($lastTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelDate, true), gettype($lastTravelDate)), __LINE__);
        }
        $this->lastTravelDate = $lastTravelDate;
        
        return $this;
    }
    /**
     * Get lastTravelMediatorId value
     * @return string|null
     */
    public function getLastTravelMediatorId(): ?string
    {
        return $this->lastTravelMediatorId;
    }
    /**
     * Set lastTravelMediatorId value
     * @param string $lastTravelMediatorId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setLastTravelMediatorId(?string $lastTravelMediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelMediatorId) && !is_string($lastTravelMediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelMediatorId, true), gettype($lastTravelMediatorId)), __LINE__);
        }
        $this->lastTravelMediatorId = $lastTravelMediatorId;
        
        return $this;
    }
    /**
     * Get orderCount value
     * @return int|null
     */
    public function getOrderCount(): ?int
    {
        return $this->orderCount;
    }
    /**
     * Set orderCount value
     * @param int $orderCount
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setOrderCount(?int $orderCount = null): self
    {
        // validation for constraint: int
        if (!is_null($orderCount) && !(is_int($orderCount) || ctype_digit($orderCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderCount, true), gettype($orderCount)), __LINE__);
        }
        $this->orderCount = $orderCount;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
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
     * Get priceSum value
     * @return float|null
     */
    public function getPriceSum(): ?float
    {
        return $this->priceSum;
    }
    /**
     * Set priceSum value
     * @param float $priceSum
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustStatDataDTO
     */
    public function setPriceSum(?float $priceSum = null): self
    {
        // validation for constraint: float
        if (!is_null($priceSum) && !(is_float($priceSum) || is_numeric($priceSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceSum, true), gettype($priceSum)), __LINE__);
        }
        $this->priceSum = $priceSum;
        
        return $this;
    }
}
