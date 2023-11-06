<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirlineForBSPCodeResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAirlineForBSPCode --- returns the airline for a BSP code
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirlineForBSPCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoAirline
     * Meta information extracted from the WSDL
     * - ref: MidocoAirline
     * @var \Pggns\MidocoApi\Documents\StructType\AirlineDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\AirlineDTO $MidocoAirline = null;
    /**
     * Constructor method for GetAirlineForBSPCodeResponse
     * @uses GetAirlineForBSPCodeResponse::setMidocoAirline()
     * @param \Pggns\MidocoApi\Documents\StructType\AirlineDTO $midocoAirline
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\AirlineDTO $midocoAirline = null)
    {
        $this
            ->setMidocoAirline($midocoAirline);
    }
    /**
     * Get MidocoAirline value
     * @return \Pggns\MidocoApi\Documents\StructType\AirlineDTO|null
     */
    public function getMidocoAirline(): ?\Pggns\MidocoApi\Documents\StructType\AirlineDTO
    {
        return $this->MidocoAirline;
    }
    /**
     * Set MidocoAirline value
     * @param \Pggns\MidocoApi\Documents\StructType\AirlineDTO $midocoAirline
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirlineForBSPCodeResponse
     */
    public function setMidocoAirline(?\Pggns\MidocoApi\Documents\StructType\AirlineDTO $midocoAirline = null): self
    {
        $this->MidocoAirline = $midocoAirline;
        
        return $this;
    }
}
