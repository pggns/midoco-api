<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AirportDTO extends AbstractStructBase
{
    /**
     * The airportCode
     * @var string|null
     */
    protected ?string $airportCode = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The continentCode
     * @var string|null
     */
    protected ?string $continentCode = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The countryIso3
     * @var string|null
     */
    protected ?string $countryIso3 = null;
    /**
     * The region
     * @var string|null
     */
    protected ?string $region = null;
    /**
     * Constructor method for AirportDTO
     * @uses AirportDTO::setAirportCode()
     * @uses AirportDTO::setCity()
     * @uses AirportDTO::setContinentCode()
     * @uses AirportDTO::setCountry()
     * @uses AirportDTO::setCountryIso3()
     * @uses AirportDTO::setRegion()
     * @param string $airportCode
     * @param string $city
     * @param string $continentCode
     * @param string $country
     * @param string $countryIso3
     * @param string $region
     */
    public function __construct(?string $airportCode = null, ?string $city = null, ?string $continentCode = null, ?string $country = null, ?string $countryIso3 = null, ?string $region = null)
    {
        $this
            ->setAirportCode($airportCode)
            ->setCity($city)
            ->setContinentCode($continentCode)
            ->setCountry($country)
            ->setCountryIso3($countryIso3)
            ->setRegion($region);
    }
    /**
     * Get airportCode value
     * @return string|null
     */
    public function getAirportCode(): ?string
    {
        return $this->airportCode;
    }
    /**
     * Set airportCode value
     * @param string $airportCode
     * @return \Pggns\MidocoApi\Documents\StructType\AirportDTO
     */
    public function setAirportCode(?string $airportCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airportCode, true), gettype($airportCode)), __LINE__);
        }
        $this->airportCode = $airportCode;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Documents\StructType\AirportDTO
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
     * Get continentCode value
     * @return string|null
     */
    public function getContinentCode(): ?string
    {
        return $this->continentCode;
    }
    /**
     * Set continentCode value
     * @param string $continentCode
     * @return \Pggns\MidocoApi\Documents\StructType\AirportDTO
     */
    public function setContinentCode(?string $continentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($continentCode) && !is_string($continentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($continentCode, true), gettype($continentCode)), __LINE__);
        }
        $this->continentCode = $continentCode;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\AirportDTO
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
     * Get countryIso3 value
     * @return string|null
     */
    public function getCountryIso3(): ?string
    {
        return $this->countryIso3;
    }
    /**
     * Set countryIso3 value
     * @param string $countryIso3
     * @return \Pggns\MidocoApi\Documents\StructType\AirportDTO
     */
    public function setCountryIso3(?string $countryIso3 = null): self
    {
        // validation for constraint: string
        if (!is_null($countryIso3) && !is_string($countryIso3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryIso3, true), gettype($countryIso3)), __LINE__);
        }
        $this->countryIso3 = $countryIso3;
        
        return $this;
    }
    /**
     * Get region value
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }
    /**
     * Set region value
     * @param string $region
     * @return \Pggns\MidocoApi\Documents\StructType\AirportDTO
     */
    public function setRegion(?string $region = null): self
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region, true), gettype($region)), __LINE__);
        }
        $this->region = $region;
        
        return $this;
    }
}
