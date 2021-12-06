<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalSystemAttributeRequest StructType
 * @subpackage Structs
 */
class SaveExternalSystemAttributeRequest extends AbstractStructBase
{
    /**
     * The MidocoExternalSystemAttribute
     * Meta information extracted from the WSDL
     * - ref: MidocoExternalSystemAttribute
     * @var \Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO $MidocoExternalSystemAttribute = null;
    /**
     * Constructor method for SaveExternalSystemAttributeRequest
     * @uses SaveExternalSystemAttributeRequest::setMidocoExternalSystemAttribute()
     * @param \Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO $midocoExternalSystemAttribute
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO $midocoExternalSystemAttribute = null)
    {
        $this
            ->setMidocoExternalSystemAttribute($midocoExternalSystemAttribute);
    }
    /**
     * Get MidocoExternalSystemAttribute value
     * @return \Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO|null
     */
    public function getMidocoExternalSystemAttribute(): ?\Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO
    {
        return $this->MidocoExternalSystemAttribute;
    }
    /**
     * Set MidocoExternalSystemAttribute value
     * @param \Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO $midocoExternalSystemAttribute
     * @return \Pggns\MidocoApi\Crm\StructType\SaveExternalSystemAttributeRequest
     */
    public function setMidocoExternalSystemAttribute(?\Pggns\MidocoApi\Crm\StructType\SystemAttributeDTO $midocoExternalSystemAttribute = null): self
    {
        $this->MidocoExternalSystemAttribute = $midocoExternalSystemAttribute;
        
        return $this;
    }
}
