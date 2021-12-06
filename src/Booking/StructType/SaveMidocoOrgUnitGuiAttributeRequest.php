<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoOrgUnitGuiAttributeRequest StructType
 * @subpackage Structs
 */
class SaveMidocoOrgUnitGuiAttributeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitGuiAttribute
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitGuiAttribute
     * @var \Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute $MidocoOrgunitGuiAttribute = null;
    /**
     * Constructor method for SaveMidocoOrgUnitGuiAttributeRequest
     * @uses SaveMidocoOrgUnitGuiAttributeRequest::setMidocoOrgunitGuiAttribute()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     */
    public function __construct(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null)
    {
        $this
            ->setMidocoOrgunitGuiAttribute($midocoOrgunitGuiAttribute);
    }
    /**
     * Get MidocoOrgunitGuiAttribute value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute|null
     */
    public function getMidocoOrgunitGuiAttribute(): ?\Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute
    {
        return $this->MidocoOrgunitGuiAttribute;
    }
    /**
     * Set MidocoOrgunitGuiAttribute value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     * @return \Pggns\MidocoApi\Api\Booking\StructType\SaveMidocoOrgUnitGuiAttributeRequest
     */
    public function setMidocoOrgunitGuiAttribute(?\Pggns\MidocoApi\Api\Booking\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null): self
    {
        $this->MidocoOrgunitGuiAttribute = $midocoOrgunitGuiAttribute;
        
        return $this;
    }
}
