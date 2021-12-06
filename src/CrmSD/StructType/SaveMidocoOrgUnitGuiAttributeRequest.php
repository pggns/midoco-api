<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute $MidocoOrgunitGuiAttribute = null;
    /**
     * Constructor method for SaveMidocoOrgUnitGuiAttributeRequest
     * @uses SaveMidocoOrgUnitGuiAttributeRequest::setMidocoOrgunitGuiAttribute()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null)
    {
        $this
            ->setMidocoOrgunitGuiAttribute($midocoOrgunitGuiAttribute);
    }
    /**
     * Get MidocoOrgunitGuiAttribute value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute|null
     */
    public function getMidocoOrgunitGuiAttribute(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute
    {
        return $this->MidocoOrgunitGuiAttribute;
    }
    /**
     * Set MidocoOrgunitGuiAttribute value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoOrgUnitGuiAttributeRequest
     */
    public function setMidocoOrgunitGuiAttribute(?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null): self
    {
        $this->MidocoOrgunitGuiAttribute = $midocoOrgunitGuiAttribute;
        
        return $this;
    }
}
