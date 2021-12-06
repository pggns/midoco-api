<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelNumberVatDivTemplRequest StructType
 * @subpackage Structs
 */
class SaveTravelNumberVatDivTemplRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberVatDivTempl
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberVatDivTempl
     * @var \Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO $MidocoTravelNumberVatDivTempl = null;
    /**
     * Constructor method for SaveTravelNumberVatDivTemplRequest
     * @uses SaveTravelNumberVatDivTemplRequest::setMidocoTravelNumberVatDivTempl()
     * @param \Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl = null)
    {
        $this
            ->setMidocoTravelNumberVatDivTempl($midocoTravelNumberVatDivTempl);
    }
    /**
     * Get MidocoTravelNumberVatDivTempl value
     * @return \Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO|null
     */
    public function getMidocoTravelNumberVatDivTempl(): ?\Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO
    {
        return $this->MidocoTravelNumberVatDivTempl;
    }
    /**
     * Set MidocoTravelNumberVatDivTempl value
     * @param \Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl
     * @return \Pggns\MidocoApi\Documents\StructType\SaveTravelNumberVatDivTemplRequest
     */
    public function setMidocoTravelNumberVatDivTempl(?\Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl = null): self
    {
        $this->MidocoTravelNumberVatDivTempl = $midocoTravelNumberVatDivTempl;
        
        return $this;
    }
}
