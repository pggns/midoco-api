<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportDescriptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirportDescriptionRequest extends AbstractStructBase
{
    /**
     * The AirportCode
     * @var string|null
     */
    protected ?string $AirportCode = null;
    /**
     * Constructor method for GetAirportDescriptionRequest
     * @uses GetAirportDescriptionRequest::setAirportCode()
     * @param string $airportCode
     */
    public function __construct(?string $airportCode = null)
    {
        $this
            ->setAirportCode($airportCode);
    }
    /**
     * Get AirportCode value
     * @return string|null
     */
    public function getAirportCode(): ?string
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param string $airportCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirportDescriptionRequest
     */
    public function setAirportCode(?string $airportCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airportCode, true), gettype($airportCode)), __LINE__);
        }
        $this->AirportCode = $airportCode;
        
        return $this;
    }
}
