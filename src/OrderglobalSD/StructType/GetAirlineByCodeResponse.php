<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirlineByCodeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAirlineForBSPCode --- returns the airline for a BSP code
 * @subpackage Structs
 */
class GetAirlineByCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoAirline
     * Meta information extracted from the WSDL
     * - ref: MidocoAirline
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO $MidocoAirline = null;
    /**
     * Constructor method for GetAirlineByCodeResponse
     * @uses GetAirlineByCodeResponse::setMidocoAirline()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO $midocoAirline
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO $midocoAirline = null)
    {
        $this
            ->setMidocoAirline($midocoAirline);
    }
    /**
     * Get MidocoAirline value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO|null
     */
    public function getMidocoAirline(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO
    {
        return $this->MidocoAirline;
    }
    /**
     * Set MidocoAirline value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO $midocoAirline
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineByCodeResponse
     */
    public function setMidocoAirline(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\AirlineDTO $midocoAirline = null): self
    {
        $this->MidocoAirline = $midocoAirline;
        
        return $this;
    }
}