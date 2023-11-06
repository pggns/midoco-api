<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCountryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirportCountryRequest extends AbstractStructBase
{
    /**
     * The airportCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $airportCode;
    /**
     * Constructor method for GetAirportCountryRequest
     * @uses GetAirportCountryRequest::setAirportCode()
     * @param string $airportCode
     */
    public function __construct(string $airportCode)
    {
        $this
            ->setAirportCode($airportCode);
    }
    /**
     * Get airportCode value
     * @return string
     */
    public function getAirportCode(): string
    {
        return $this->airportCode;
    }
    /**
     * Set airportCode value
     * @param string $airportCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirportCountryRequest
     */
    public function setAirportCode(string $airportCode): self
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airportCode, true), gettype($airportCode)), __LINE__);
        }
        $this->airportCode = $airportCode;
        
        return $this;
    }
}
