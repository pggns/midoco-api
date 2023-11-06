<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravelNumberVatDivTemplRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTravelNumberVatDivTemplRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberVatDivTempl
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberVatDivTempl
     * @var \Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO $MidocoTravelNumberVatDivTempl = null;
    /**
     * Constructor method for DeleteTravelNumberVatDivTemplRequest
     * @uses DeleteTravelNumberVatDivTemplRequest::setMidocoTravelNumberVatDivTempl()
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
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteTravelNumberVatDivTemplRequest
     */
    public function setMidocoTravelNumberVatDivTempl(?\Pggns\MidocoApi\Documents\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl = null): self
    {
        $this->MidocoTravelNumberVatDivTempl = $midocoTravelNumberVatDivTempl;
        
        return $this;
    }
}
