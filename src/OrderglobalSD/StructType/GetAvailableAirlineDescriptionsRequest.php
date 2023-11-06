<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableAirlineDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableAirlineDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoAirline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAirline
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO $MidocoAirline = null;
    /**
     * Constructor method for GetAvailableAirlineDescriptionsRequest
     * @uses GetAvailableAirlineDescriptionsRequest::setMidocoAirline()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO $midocoAirline
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO $midocoAirline = null)
    {
        $this
            ->setMidocoAirline($midocoAirline);
    }
    /**
     * Get MidocoAirline value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO|null
     */
    public function getMidocoAirline(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO
    {
        return $this->MidocoAirline;
    }
    /**
     * Set MidocoAirline value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO $midocoAirline
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetAvailableAirlineDescriptionsRequest
     */
    public function setMidocoAirline(?\Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO $midocoAirline = null): self
    {
        $this->MidocoAirline = $midocoAirline;
        
        return $this;
    }
}
