<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCountryResponse StructType
 * @subpackage Structs
 */
class GetAirportCountryResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAirportCountry
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry $MidocoAirportCountry = null;
    /**
     * Constructor method for GetAirportCountryResponse
     * @uses GetAirportCountryResponse::setMidocoAirportCountry()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry $midocoAirportCountry
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry $midocoAirportCountry = null)
    {
        $this
            ->setMidocoAirportCountry($midocoAirportCountry);
    }
    /**
     * Get MidocoAirportCountry value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry|null
     */
    public function getMidocoAirportCountry(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry
    {
        return $this->MidocoAirportCountry;
    }
    /**
     * Set MidocoAirportCountry value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry $midocoAirportCountry
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetAirportCountryResponse
     */
    public function setMidocoAirportCountry(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportCountry $midocoAirportCountry = null): self
    {
        $this->MidocoAirportCountry = $midocoAirportCountry;
        
        return $this;
    }
}
