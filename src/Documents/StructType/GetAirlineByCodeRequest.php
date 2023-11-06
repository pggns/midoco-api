<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirlineByCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirlineByCodeRequest extends AbstractStructBase
{
    /**
     * The carrierCode
     * @var string|null
     */
    protected ?string $carrierCode = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * Constructor method for GetAirlineByCodeRequest
     * @uses GetAirlineByCodeRequest::setCarrierCode()
     * @uses GetAirlineByCodeRequest::setCountryCode()
     * @param string $carrierCode
     * @param string $countryCode
     */
    public function __construct(?string $carrierCode = null, ?string $countryCode = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setCountryCode($countryCode);
    }
    /**
     * Get carrierCode value
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }
    /**
     * Set carrierCode value
     * @param string $carrierCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirlineByCodeRequest
     */
    public function setCarrierCode(?string $carrierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierCode, true), gettype($carrierCode)), __LINE__);
        }
        $this->carrierCode = $carrierCode;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirlineByCodeRequest
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
}
