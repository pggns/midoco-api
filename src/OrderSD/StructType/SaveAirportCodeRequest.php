<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAirportCodeRequest StructType
 * @subpackage Structs
 */
class SaveAirportCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoAirportCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAirportCode
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode $MidocoAirportCode = null;
    /**
     * Constructor method for SaveAirportCodeRequest
     * @uses SaveAirportCodeRequest::setMidocoAirportCode()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode $midocoAirportCode
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode $midocoAirportCode = null)
    {
        $this
            ->setMidocoAirportCode($midocoAirportCode);
    }
    /**
     * Get MidocoAirportCode value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode|null
     */
    public function getMidocoAirportCode(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode
    {
        return $this->MidocoAirportCode;
    }
    /**
     * Set MidocoAirportCode value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode $midocoAirportCode
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveAirportCodeRequest
     */
    public function setMidocoAirportCode(?\Pggns\MidocoApi\OrderSD\StructType\MidocoAirportCode $midocoAirportCode = null): self
    {
        $this->MidocoAirportCode = $midocoAirportCode;
        
        return $this;
    }
}
