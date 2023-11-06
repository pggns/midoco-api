<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirlineByCodeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAirlineForBSPCode --- returns the airline for a BSP code
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirlineByCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoAirline
     * Meta information extracted from the WSDL
     * - ref: MidocoAirline
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO $MidocoAirline = null;
    /**
     * Constructor method for GetAirlineByCodeResponse
     * @uses GetAirlineByCodeResponse::setMidocoAirline()
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
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetAirlineByCodeResponse
     */
    public function setMidocoAirline(?\Pggns\MidocoApi\OrderglobalSD\StructType\AirlineDTO $midocoAirline = null): self
    {
        $this->MidocoAirline = $midocoAirline;
        
        return $this;
    }
}
