<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAirportCountry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAirportCountry extends CountryFinancialDTO
{
    /**
     * The airportCode
     * @var string|null
     */
    protected ?string $airportCode = null;
    /**
     * The airportDescription
     * @var string|null
     */
    protected ?string $airportDescription = null;
    /**
     * The countryIso3
     * @var string|null
     */
    protected ?string $countryIso3 = null;
    /**
     * Constructor method for MidocoAirportCountry
     * @uses MidocoAirportCountry::setAirportCode()
     * @uses MidocoAirportCountry::setAirportDescription()
     * @uses MidocoAirportCountry::setCountryIso3()
     * @param string $airportCode
     * @param string $airportDescription
     * @param string $countryIso3
     */
    public function __construct(?string $airportCode = null, ?string $airportDescription = null, ?string $countryIso3 = null)
    {
        $this
            ->setAirportCode($airportCode)
            ->setAirportDescription($airportDescription)
            ->setCountryIso3($countryIso3);
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry
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
     * Get airportDescription value
     * @return string|null
     */
    public function getAirportDescription(): ?string
    {
        return $this->airportDescription;
    }
    /**
     * Set airportDescription value
     * @param string $airportDescription
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry
     */
    public function setAirportDescription(?string $airportDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($airportDescription) && !is_string($airportDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airportDescription, true), gettype($airportDescription)), __LINE__);
        }
        $this->airportDescription = $airportDescription;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry
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
}
