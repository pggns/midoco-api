<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoConnectedCustomerListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoConnectedCustomerListType extends AbstractStructBase
{
    /**
     * The connectionType
     * @var int|null
     */
    protected ?int $connectionType = null;
    /**
     * The originCustomerId
     * @var int|null
     */
    protected ?int $originCustomerId = null;
    /**
     * The forenameOfCust
     * @var string|null
     */
    protected ?string $forenameOfCust = null;
    /**
     * The nameOfCust
     * @var string|null
     */
    protected ?string $nameOfCust = null;
    /**
     * The streetOfCust
     * @var string|null
     */
    protected ?string $streetOfCust = null;
    /**
     * The streetNoOfCust
     * @var string|null
     */
    protected ?string $streetNoOfCust = null;
    /**
     * The postalCodeOfCust
     * @var string|null
     */
    protected ?string $postalCodeOfCust = null;
    /**
     * The cityOfCust
     * @var string|null
     */
    protected ?string $cityOfCust = null;
    /**
     * The assignedCustomerId
     * @var int|null
     */
    protected ?int $assignedCustomerId = null;
    /**
     * The forenameOfLinkedCust
     * @var string|null
     */
    protected ?string $forenameOfLinkedCust = null;
    /**
     * The nameOfLinkedCust
     * @var string|null
     */
    protected ?string $nameOfLinkedCust = null;
    /**
     * The streetOfLinkedCust
     * @var string|null
     */
    protected ?string $streetOfLinkedCust = null;
    /**
     * The streetNoOfLinkedCust
     * @var string|null
     */
    protected ?string $streetNoOfLinkedCust = null;
    /**
     * The postalCodeOfLinkedCust
     * @var string|null
     */
    protected ?string $postalCodeOfLinkedCust = null;
    /**
     * The cityOfLinkedCust
     * @var string|null
     */
    protected ?string $cityOfLinkedCust = null;
    /**
     * The firstBookingDateOfLinkedCust
     * @var string|null
     */
    protected ?string $firstBookingDateOfLinkedCust = null;
    /**
     * The lastBookingDateOfLinkedCust
     * @var string|null
     */
    protected ?string $lastBookingDateOfLinkedCust = null;
    /**
     * The lastTravelDateOfLinkedCust
     * @var string|null
     */
    protected ?string $lastTravelDateOfLinkedCust = null;
    /**
     * The statusLastTravOfLinkedCust
     * @var string|null
     */
    protected ?string $statusLastTravOfLinkedCust = null;
    /**
     * The priceLastTravOfLinkedCust
     * @var float|null
     */
    protected ?float $priceLastTravOfLinkedCust = null;
    /**
     * Constructor method for MidocoConnectedCustomerListType
     * @uses MidocoConnectedCustomerListType::setConnectionType()
     * @uses MidocoConnectedCustomerListType::setOriginCustomerId()
     * @uses MidocoConnectedCustomerListType::setForenameOfCust()
     * @uses MidocoConnectedCustomerListType::setNameOfCust()
     * @uses MidocoConnectedCustomerListType::setStreetOfCust()
     * @uses MidocoConnectedCustomerListType::setStreetNoOfCust()
     * @uses MidocoConnectedCustomerListType::setPostalCodeOfCust()
     * @uses MidocoConnectedCustomerListType::setCityOfCust()
     * @uses MidocoConnectedCustomerListType::setAssignedCustomerId()
     * @uses MidocoConnectedCustomerListType::setForenameOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setNameOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setStreetOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setStreetNoOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setPostalCodeOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setCityOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setFirstBookingDateOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setLastBookingDateOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setLastTravelDateOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setStatusLastTravOfLinkedCust()
     * @uses MidocoConnectedCustomerListType::setPriceLastTravOfLinkedCust()
     * @param int $connectionType
     * @param int $originCustomerId
     * @param string $forenameOfCust
     * @param string $nameOfCust
     * @param string $streetOfCust
     * @param string $streetNoOfCust
     * @param string $postalCodeOfCust
     * @param string $cityOfCust
     * @param int $assignedCustomerId
     * @param string $forenameOfLinkedCust
     * @param string $nameOfLinkedCust
     * @param string $streetOfLinkedCust
     * @param string $streetNoOfLinkedCust
     * @param string $postalCodeOfLinkedCust
     * @param string $cityOfLinkedCust
     * @param string $firstBookingDateOfLinkedCust
     * @param string $lastBookingDateOfLinkedCust
     * @param string $lastTravelDateOfLinkedCust
     * @param string $statusLastTravOfLinkedCust
     * @param float $priceLastTravOfLinkedCust
     */
    public function __construct(?int $connectionType = null, ?int $originCustomerId = null, ?string $forenameOfCust = null, ?string $nameOfCust = null, ?string $streetOfCust = null, ?string $streetNoOfCust = null, ?string $postalCodeOfCust = null, ?string $cityOfCust = null, ?int $assignedCustomerId = null, ?string $forenameOfLinkedCust = null, ?string $nameOfLinkedCust = null, ?string $streetOfLinkedCust = null, ?string $streetNoOfLinkedCust = null, ?string $postalCodeOfLinkedCust = null, ?string $cityOfLinkedCust = null, ?string $firstBookingDateOfLinkedCust = null, ?string $lastBookingDateOfLinkedCust = null, ?string $lastTravelDateOfLinkedCust = null, ?string $statusLastTravOfLinkedCust = null, ?float $priceLastTravOfLinkedCust = null)
    {
        $this
            ->setConnectionType($connectionType)
            ->setOriginCustomerId($originCustomerId)
            ->setForenameOfCust($forenameOfCust)
            ->setNameOfCust($nameOfCust)
            ->setStreetOfCust($streetOfCust)
            ->setStreetNoOfCust($streetNoOfCust)
            ->setPostalCodeOfCust($postalCodeOfCust)
            ->setCityOfCust($cityOfCust)
            ->setAssignedCustomerId($assignedCustomerId)
            ->setForenameOfLinkedCust($forenameOfLinkedCust)
            ->setNameOfLinkedCust($nameOfLinkedCust)
            ->setStreetOfLinkedCust($streetOfLinkedCust)
            ->setStreetNoOfLinkedCust($streetNoOfLinkedCust)
            ->setPostalCodeOfLinkedCust($postalCodeOfLinkedCust)
            ->setCityOfLinkedCust($cityOfLinkedCust)
            ->setFirstBookingDateOfLinkedCust($firstBookingDateOfLinkedCust)
            ->setLastBookingDateOfLinkedCust($lastBookingDateOfLinkedCust)
            ->setLastTravelDateOfLinkedCust($lastTravelDateOfLinkedCust)
            ->setStatusLastTravOfLinkedCust($statusLastTravOfLinkedCust)
            ->setPriceLastTravOfLinkedCust($priceLastTravOfLinkedCust);
    }
    /**
     * Get connectionType value
     * @return int|null
     */
    public function getConnectionType(): ?int
    {
        return $this->connectionType;
    }
    /**
     * Set connectionType value
     * @param int $connectionType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setConnectionType(?int $connectionType = null): self
    {
        // validation for constraint: int
        if (!is_null($connectionType) && !(is_int($connectionType) || ctype_digit($connectionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionType, true), gettype($connectionType)), __LINE__);
        }
        $this->connectionType = $connectionType;
        
        return $this;
    }
    /**
     * Get originCustomerId value
     * @return int|null
     */
    public function getOriginCustomerId(): ?int
    {
        return $this->originCustomerId;
    }
    /**
     * Set originCustomerId value
     * @param int $originCustomerId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setOriginCustomerId(?int $originCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($originCustomerId) && !(is_int($originCustomerId) || ctype_digit($originCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originCustomerId, true), gettype($originCustomerId)), __LINE__);
        }
        $this->originCustomerId = $originCustomerId;
        
        return $this;
    }
    /**
     * Get forenameOfCust value
     * @return string|null
     */
    public function getForenameOfCust(): ?string
    {
        return $this->forenameOfCust;
    }
    /**
     * Set forenameOfCust value
     * @param string $forenameOfCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setForenameOfCust(?string $forenameOfCust = null): self
    {
        // validation for constraint: string
        if (!is_null($forenameOfCust) && !is_string($forenameOfCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forenameOfCust, true), gettype($forenameOfCust)), __LINE__);
        }
        $this->forenameOfCust = $forenameOfCust;
        
        return $this;
    }
    /**
     * Get nameOfCust value
     * @return string|null
     */
    public function getNameOfCust(): ?string
    {
        return $this->nameOfCust;
    }
    /**
     * Set nameOfCust value
     * @param string $nameOfCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setNameOfCust(?string $nameOfCust = null): self
    {
        // validation for constraint: string
        if (!is_null($nameOfCust) && !is_string($nameOfCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameOfCust, true), gettype($nameOfCust)), __LINE__);
        }
        $this->nameOfCust = $nameOfCust;
        
        return $this;
    }
    /**
     * Get streetOfCust value
     * @return string|null
     */
    public function getStreetOfCust(): ?string
    {
        return $this->streetOfCust;
    }
    /**
     * Set streetOfCust value
     * @param string $streetOfCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setStreetOfCust(?string $streetOfCust = null): self
    {
        // validation for constraint: string
        if (!is_null($streetOfCust) && !is_string($streetOfCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetOfCust, true), gettype($streetOfCust)), __LINE__);
        }
        $this->streetOfCust = $streetOfCust;
        
        return $this;
    }
    /**
     * Get streetNoOfCust value
     * @return string|null
     */
    public function getStreetNoOfCust(): ?string
    {
        return $this->streetNoOfCust;
    }
    /**
     * Set streetNoOfCust value
     * @param string $streetNoOfCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setStreetNoOfCust(?string $streetNoOfCust = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNoOfCust) && !is_string($streetNoOfCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNoOfCust, true), gettype($streetNoOfCust)), __LINE__);
        }
        $this->streetNoOfCust = $streetNoOfCust;
        
        return $this;
    }
    /**
     * Get postalCodeOfCust value
     * @return string|null
     */
    public function getPostalCodeOfCust(): ?string
    {
        return $this->postalCodeOfCust;
    }
    /**
     * Set postalCodeOfCust value
     * @param string $postalCodeOfCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setPostalCodeOfCust(?string $postalCodeOfCust = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeOfCust) && !is_string($postalCodeOfCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeOfCust, true), gettype($postalCodeOfCust)), __LINE__);
        }
        $this->postalCodeOfCust = $postalCodeOfCust;
        
        return $this;
    }
    /**
     * Get cityOfCust value
     * @return string|null
     */
    public function getCityOfCust(): ?string
    {
        return $this->cityOfCust;
    }
    /**
     * Set cityOfCust value
     * @param string $cityOfCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setCityOfCust(?string $cityOfCust = null): self
    {
        // validation for constraint: string
        if (!is_null($cityOfCust) && !is_string($cityOfCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityOfCust, true), gettype($cityOfCust)), __LINE__);
        }
        $this->cityOfCust = $cityOfCust;
        
        return $this;
    }
    /**
     * Get assignedCustomerId value
     * @return int|null
     */
    public function getAssignedCustomerId(): ?int
    {
        return $this->assignedCustomerId;
    }
    /**
     * Set assignedCustomerId value
     * @param int $assignedCustomerId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setAssignedCustomerId(?int $assignedCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($assignedCustomerId) && !(is_int($assignedCustomerId) || ctype_digit($assignedCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assignedCustomerId, true), gettype($assignedCustomerId)), __LINE__);
        }
        $this->assignedCustomerId = $assignedCustomerId;
        
        return $this;
    }
    /**
     * Get forenameOfLinkedCust value
     * @return string|null
     */
    public function getForenameOfLinkedCust(): ?string
    {
        return $this->forenameOfLinkedCust;
    }
    /**
     * Set forenameOfLinkedCust value
     * @param string $forenameOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setForenameOfLinkedCust(?string $forenameOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($forenameOfLinkedCust) && !is_string($forenameOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forenameOfLinkedCust, true), gettype($forenameOfLinkedCust)), __LINE__);
        }
        $this->forenameOfLinkedCust = $forenameOfLinkedCust;
        
        return $this;
    }
    /**
     * Get nameOfLinkedCust value
     * @return string|null
     */
    public function getNameOfLinkedCust(): ?string
    {
        return $this->nameOfLinkedCust;
    }
    /**
     * Set nameOfLinkedCust value
     * @param string $nameOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setNameOfLinkedCust(?string $nameOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($nameOfLinkedCust) && !is_string($nameOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameOfLinkedCust, true), gettype($nameOfLinkedCust)), __LINE__);
        }
        $this->nameOfLinkedCust = $nameOfLinkedCust;
        
        return $this;
    }
    /**
     * Get streetOfLinkedCust value
     * @return string|null
     */
    public function getStreetOfLinkedCust(): ?string
    {
        return $this->streetOfLinkedCust;
    }
    /**
     * Set streetOfLinkedCust value
     * @param string $streetOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setStreetOfLinkedCust(?string $streetOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($streetOfLinkedCust) && !is_string($streetOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetOfLinkedCust, true), gettype($streetOfLinkedCust)), __LINE__);
        }
        $this->streetOfLinkedCust = $streetOfLinkedCust;
        
        return $this;
    }
    /**
     * Get streetNoOfLinkedCust value
     * @return string|null
     */
    public function getStreetNoOfLinkedCust(): ?string
    {
        return $this->streetNoOfLinkedCust;
    }
    /**
     * Set streetNoOfLinkedCust value
     * @param string $streetNoOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setStreetNoOfLinkedCust(?string $streetNoOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNoOfLinkedCust) && !is_string($streetNoOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNoOfLinkedCust, true), gettype($streetNoOfLinkedCust)), __LINE__);
        }
        $this->streetNoOfLinkedCust = $streetNoOfLinkedCust;
        
        return $this;
    }
    /**
     * Get postalCodeOfLinkedCust value
     * @return string|null
     */
    public function getPostalCodeOfLinkedCust(): ?string
    {
        return $this->postalCodeOfLinkedCust;
    }
    /**
     * Set postalCodeOfLinkedCust value
     * @param string $postalCodeOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setPostalCodeOfLinkedCust(?string $postalCodeOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeOfLinkedCust) && !is_string($postalCodeOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeOfLinkedCust, true), gettype($postalCodeOfLinkedCust)), __LINE__);
        }
        $this->postalCodeOfLinkedCust = $postalCodeOfLinkedCust;
        
        return $this;
    }
    /**
     * Get cityOfLinkedCust value
     * @return string|null
     */
    public function getCityOfLinkedCust(): ?string
    {
        return $this->cityOfLinkedCust;
    }
    /**
     * Set cityOfLinkedCust value
     * @param string $cityOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setCityOfLinkedCust(?string $cityOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($cityOfLinkedCust) && !is_string($cityOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityOfLinkedCust, true), gettype($cityOfLinkedCust)), __LINE__);
        }
        $this->cityOfLinkedCust = $cityOfLinkedCust;
        
        return $this;
    }
    /**
     * Get firstBookingDateOfLinkedCust value
     * @return string|null
     */
    public function getFirstBookingDateOfLinkedCust(): ?string
    {
        return $this->firstBookingDateOfLinkedCust;
    }
    /**
     * Set firstBookingDateOfLinkedCust value
     * @param string $firstBookingDateOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setFirstBookingDateOfLinkedCust(?string $firstBookingDateOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($firstBookingDateOfLinkedCust) && !is_string($firstBookingDateOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstBookingDateOfLinkedCust, true), gettype($firstBookingDateOfLinkedCust)), __LINE__);
        }
        $this->firstBookingDateOfLinkedCust = $firstBookingDateOfLinkedCust;
        
        return $this;
    }
    /**
     * Get lastBookingDateOfLinkedCust value
     * @return string|null
     */
    public function getLastBookingDateOfLinkedCust(): ?string
    {
        return $this->lastBookingDateOfLinkedCust;
    }
    /**
     * Set lastBookingDateOfLinkedCust value
     * @param string $lastBookingDateOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setLastBookingDateOfLinkedCust(?string $lastBookingDateOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($lastBookingDateOfLinkedCust) && !is_string($lastBookingDateOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastBookingDateOfLinkedCust, true), gettype($lastBookingDateOfLinkedCust)), __LINE__);
        }
        $this->lastBookingDateOfLinkedCust = $lastBookingDateOfLinkedCust;
        
        return $this;
    }
    /**
     * Get lastTravelDateOfLinkedCust value
     * @return string|null
     */
    public function getLastTravelDateOfLinkedCust(): ?string
    {
        return $this->lastTravelDateOfLinkedCust;
    }
    /**
     * Set lastTravelDateOfLinkedCust value
     * @param string $lastTravelDateOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setLastTravelDateOfLinkedCust(?string $lastTravelDateOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelDateOfLinkedCust) && !is_string($lastTravelDateOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelDateOfLinkedCust, true), gettype($lastTravelDateOfLinkedCust)), __LINE__);
        }
        $this->lastTravelDateOfLinkedCust = $lastTravelDateOfLinkedCust;
        
        return $this;
    }
    /**
     * Get statusLastTravOfLinkedCust value
     * @return string|null
     */
    public function getStatusLastTravOfLinkedCust(): ?string
    {
        return $this->statusLastTravOfLinkedCust;
    }
    /**
     * Set statusLastTravOfLinkedCust value
     * @param string $statusLastTravOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setStatusLastTravOfLinkedCust(?string $statusLastTravOfLinkedCust = null): self
    {
        // validation for constraint: string
        if (!is_null($statusLastTravOfLinkedCust) && !is_string($statusLastTravOfLinkedCust)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusLastTravOfLinkedCust, true), gettype($statusLastTravOfLinkedCust)), __LINE__);
        }
        $this->statusLastTravOfLinkedCust = $statusLastTravOfLinkedCust;
        
        return $this;
    }
    /**
     * Get priceLastTravOfLinkedCust value
     * @return float|null
     */
    public function getPriceLastTravOfLinkedCust(): ?float
    {
        return $this->priceLastTravOfLinkedCust;
    }
    /**
     * Set priceLastTravOfLinkedCust value
     * @param float $priceLastTravOfLinkedCust
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoConnectedCustomerListType
     */
    public function setPriceLastTravOfLinkedCust(?float $priceLastTravOfLinkedCust = null): self
    {
        // validation for constraint: float
        if (!is_null($priceLastTravOfLinkedCust) && !(is_float($priceLastTravOfLinkedCust) || is_numeric($priceLastTravOfLinkedCust))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceLastTravOfLinkedCust, true), gettype($priceLastTravOfLinkedCust)), __LINE__);
        }
        $this->priceLastTravOfLinkedCust = $priceLastTravOfLinkedCust;
        
        return $this;
    }
}
