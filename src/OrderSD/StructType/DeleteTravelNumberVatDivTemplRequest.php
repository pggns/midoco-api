<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO $MidocoTravelNumberVatDivTempl = null;
    /**
     * Constructor method for DeleteTravelNumberVatDivTemplRequest
     * @uses DeleteTravelNumberVatDivTemplRequest::setMidocoTravelNumberVatDivTempl()
     * @param \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl = null)
    {
        $this
            ->setMidocoTravelNumberVatDivTempl($midocoTravelNumberVatDivTempl);
    }
    /**
     * Get MidocoTravelNumberVatDivTempl value
     * @return \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO|null
     */
    public function getMidocoTravelNumberVatDivTempl(): ?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO
    {
        return $this->MidocoTravelNumberVatDivTempl;
    }
    /**
     * Set MidocoTravelNumberVatDivTempl value
     * @param \Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteTravelNumberVatDivTemplRequest
     */
    public function setMidocoTravelNumberVatDivTempl(?\Pggns\MidocoApi\OrderSD\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl = null): self
    {
        $this->MidocoTravelNumberVatDivTempl = $midocoTravelNumberVatDivTempl;
        
        return $this;
    }
}
