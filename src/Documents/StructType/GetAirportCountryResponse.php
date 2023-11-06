<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCountryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirportCountryResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAirportCountry
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry $MidocoAirportCountry = null;
    /**
     * Constructor method for GetAirportCountryResponse
     * @uses GetAirportCountryResponse::setMidocoAirportCountry()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry $midocoAirportCountry
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry $midocoAirportCountry = null)
    {
        $this
            ->setMidocoAirportCountry($midocoAirportCountry);
    }
    /**
     * Get MidocoAirportCountry value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry|null
     */
    public function getMidocoAirportCountry(): ?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry
    {
        return $this->MidocoAirportCountry;
    }
    /**
     * Set MidocoAirportCountry value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry $midocoAirportCountry
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirportCountryResponse
     */
    public function setMidocoAirportCountry(?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCountry $midocoAirportCountry = null): self
    {
        $this->MidocoAirportCountry = $midocoAirportCountry;
        
        return $this;
    }
}
