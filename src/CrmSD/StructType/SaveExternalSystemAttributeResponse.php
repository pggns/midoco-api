<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalSystemAttributeResponse StructType
 * @subpackage Structs
 */
class SaveExternalSystemAttributeResponse extends AbstractStructBase
{
    /**
     * The MidocoExternalSystemAttribute
     * Meta information extracted from the WSDL
     * - ref: MidocoExternalSystemAttribute
     * @var \Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO $MidocoExternalSystemAttribute = null;
    /**
     * Constructor method for SaveExternalSystemAttributeResponse
     * @uses SaveExternalSystemAttributeResponse::setMidocoExternalSystemAttribute()
     * @param \Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO $midocoExternalSystemAttribute
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO $midocoExternalSystemAttribute = null)
    {
        $this
            ->setMidocoExternalSystemAttribute($midocoExternalSystemAttribute);
    }
    /**
     * Get MidocoExternalSystemAttribute value
     * @return \Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO|null
     */
    public function getMidocoExternalSystemAttribute(): ?\Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO
    {
        return $this->MidocoExternalSystemAttribute;
    }
    /**
     * Set MidocoExternalSystemAttribute value
     * @param \Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO $midocoExternalSystemAttribute
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveExternalSystemAttributeResponse
     */
    public function setMidocoExternalSystemAttribute(?\Pggns\MidocoApi\CrmSD\StructType\SystemAttributeDTO $midocoExternalSystemAttribute = null): self
    {
        $this->MidocoExternalSystemAttribute = $midocoExternalSystemAttribute;
        
        return $this;
    }
}
