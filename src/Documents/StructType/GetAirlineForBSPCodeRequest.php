<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirlineForBSPCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirlineForBSPCodeRequest extends AbstractStructBase
{
    /**
     * The bspCode
     * @var string|null
     */
    protected ?string $bspCode = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * Constructor method for GetAirlineForBSPCodeRequest
     * @uses GetAirlineForBSPCodeRequest::setBspCode()
     * @uses GetAirlineForBSPCodeRequest::setCountryCode()
     * @param string $bspCode
     * @param string $countryCode
     */
    public function __construct(?string $bspCode = null, ?string $countryCode = null)
    {
        $this
            ->setBspCode($bspCode)
            ->setCountryCode($countryCode);
    }
    /**
     * Get bspCode value
     * @return string|null
     */
    public function getBspCode(): ?string
    {
        return $this->bspCode;
    }
    /**
     * Set bspCode value
     * @param string $bspCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirlineForBSPCodeRequest
     */
    public function setBspCode(?string $bspCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bspCode) && !is_string($bspCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspCode, true), gettype($bspCode)), __LINE__);
        }
        $this->bspCode = $bspCode;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirlineForBSPCodeRequest
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
