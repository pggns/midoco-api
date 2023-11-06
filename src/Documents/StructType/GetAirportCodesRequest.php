<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCodesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAirportCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoAirportCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportCode
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAirportCode|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCode $MidocoAirportCode = null;
    /**
     * Constructor method for GetAirportCodesRequest
     * @uses GetAirportCodesRequest::setMidocoAirportCode()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirportCode $midocoAirportCode
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCode $midocoAirportCode = null)
    {
        $this
            ->setMidocoAirportCode($midocoAirportCode);
    }
    /**
     * Get MidocoAirportCode value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportCode|null
     */
    public function getMidocoAirportCode(): ?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCode
    {
        return $this->MidocoAirportCode;
    }
    /**
     * Set MidocoAirportCode value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAirportCode $midocoAirportCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetAirportCodesRequest
     */
    public function setMidocoAirportCode(?\Pggns\MidocoApi\Documents\StructType\MidocoAirportCode $midocoAirportCode = null): self
    {
        $this->MidocoAirportCode = $midocoAirportCode;
        
        return $this;
    }
}
