<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportDescriptionWithLanguageResponse StructType
 * @subpackage Structs
 */
class GetAirportDescriptionWithLanguageResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportDescription
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO $MidocoAirportDescription = null;
    /**
     * Constructor method for GetAirportDescriptionWithLanguageResponse
     * @uses GetAirportDescriptionWithLanguageResponse::setMidocoAirportDescription()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO $midocoAirportDescription
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO $midocoAirportDescription = null)
    {
        $this
            ->setMidocoAirportDescription($midocoAirportDescription);
    }
    /**
     * Get MidocoAirportDescription value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO|null
     */
    public function getMidocoAirportDescription(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO
    {
        return $this->MidocoAirportDescription;
    }
    /**
     * Set MidocoAirportDescription value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO $midocoAirportDescription
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionWithLanguageResponse
     */
    public function setMidocoAirportDescription(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirportDescriptionDTO $midocoAirportDescription = null): self
    {
        $this->MidocoAirportDescription = $midocoAirportDescription;
        
        return $this;
    }
}
