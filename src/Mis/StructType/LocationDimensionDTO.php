<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationDimensionDTO StructType
 * @subpackage Structs
 */
class LocationDimensionDTO extends AbstractStructBase
{
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The locationId
     * @var int|null
     */
    protected ?int $locationId = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The postalCodeFirst1
     * @var string|null
     */
    protected ?string $postalCodeFirst1 = null;
    /**
     * The postalCodeFirst2
     * @var string|null
     */
    protected ?string $postalCodeFirst2 = null;
    /**
     * The postalCodeFirst3
     * @var string|null
     */
    protected ?string $postalCodeFirst3 = null;
    /**
     * The postalCodeFirst4
     * @var string|null
     */
    protected ?string $postalCodeFirst4 = null;
    /**
     * Constructor method for LocationDimensionDTO
     * @uses LocationDimensionDTO::setCity()
     * @uses LocationDimensionDTO::setCountry()
     * @uses LocationDimensionDTO::setLocationId()
     * @uses LocationDimensionDTO::setPostalCode()
     * @uses LocationDimensionDTO::setPostalCodeFirst1()
     * @uses LocationDimensionDTO::setPostalCodeFirst2()
     * @uses LocationDimensionDTO::setPostalCodeFirst3()
     * @uses LocationDimensionDTO::setPostalCodeFirst4()
     * @param string $city
     * @param string $country
     * @param int $locationId
     * @param string $postalCode
     * @param string $postalCodeFirst1
     * @param string $postalCodeFirst2
     * @param string $postalCodeFirst3
     * @param string $postalCodeFirst4
     */
    public function __construct(?string $city = null, ?string $country = null, ?int $locationId = null, ?string $postalCode = null, ?string $postalCodeFirst1 = null, ?string $postalCodeFirst2 = null, ?string $postalCodeFirst3 = null, ?string $postalCodeFirst4 = null)
    {
        $this
            ->setCity($city)
            ->setCountry($country)
            ->setLocationId($locationId)
            ->setPostalCode($postalCode)
            ->setPostalCodeFirst1($postalCodeFirst1)
            ->setPostalCodeFirst2($postalCodeFirst2)
            ->setPostalCodeFirst3($postalCodeFirst3)
            ->setPostalCodeFirst4($postalCodeFirst4);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get locationId value
     * @return int|null
     */
    public function getLocationId(): ?int
    {
        return $this->locationId;
    }
    /**
     * Set locationId value
     * @param int $locationId
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setLocationId(?int $locationId = null): self
    {
        // validation for constraint: int
        if (!is_null($locationId) && !(is_int($locationId) || ctype_digit($locationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($locationId, true), gettype($locationId)), __LINE__);
        }
        $this->locationId = $locationId;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get postalCodeFirst1 value
     * @return string|null
     */
    public function getPostalCodeFirst1(): ?string
    {
        return $this->postalCodeFirst1;
    }
    /**
     * Set postalCodeFirst1 value
     * @param string $postalCodeFirst1
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setPostalCodeFirst1(?string $postalCodeFirst1 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst1) && !is_string($postalCodeFirst1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst1, true), gettype($postalCodeFirst1)), __LINE__);
        }
        $this->postalCodeFirst1 = $postalCodeFirst1;
        
        return $this;
    }
    /**
     * Get postalCodeFirst2 value
     * @return string|null
     */
    public function getPostalCodeFirst2(): ?string
    {
        return $this->postalCodeFirst2;
    }
    /**
     * Set postalCodeFirst2 value
     * @param string $postalCodeFirst2
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setPostalCodeFirst2(?string $postalCodeFirst2 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst2) && !is_string($postalCodeFirst2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst2, true), gettype($postalCodeFirst2)), __LINE__);
        }
        $this->postalCodeFirst2 = $postalCodeFirst2;
        
        return $this;
    }
    /**
     * Get postalCodeFirst3 value
     * @return string|null
     */
    public function getPostalCodeFirst3(): ?string
    {
        return $this->postalCodeFirst3;
    }
    /**
     * Set postalCodeFirst3 value
     * @param string $postalCodeFirst3
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setPostalCodeFirst3(?string $postalCodeFirst3 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst3) && !is_string($postalCodeFirst3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst3, true), gettype($postalCodeFirst3)), __LINE__);
        }
        $this->postalCodeFirst3 = $postalCodeFirst3;
        
        return $this;
    }
    /**
     * Get postalCodeFirst4 value
     * @return string|null
     */
    public function getPostalCodeFirst4(): ?string
    {
        return $this->postalCodeFirst4;
    }
    /**
     * Set postalCodeFirst4 value
     * @param string $postalCodeFirst4
     * @return \Pggns\MidocoApi\Mis\StructType\LocationDimensionDTO
     */
    public function setPostalCodeFirst4(?string $postalCodeFirst4 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst4) && !is_string($postalCodeFirst4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst4, true), gettype($postalCodeFirst4)), __LINE__);
        }
        $this->postalCodeFirst4 = $postalCodeFirst4;
        
        return $this;
    }
}
