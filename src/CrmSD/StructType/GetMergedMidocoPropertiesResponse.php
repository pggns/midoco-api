<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedMidocoPropertiesResponse StructType
 * @subpackage Structs
 */
class GetMergedMidocoPropertiesResponse extends AbstractStructBase
{
    /**
     * The MidocoProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoProperties
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoProperties|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoProperties $MidocoProperties = null;
    /**
     * Constructor method for GetMergedMidocoPropertiesResponse
     * @uses GetMergedMidocoPropertiesResponse::setMidocoProperties()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoProperties $midocoProperties
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoProperties $midocoProperties = null)
    {
        $this
            ->setMidocoProperties($midocoProperties);
    }
    /**
     * Get MidocoProperties value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoProperties|null
     */
    public function getMidocoProperties(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoProperties
    {
        return $this->MidocoProperties;
    }
    /**
     * Set MidocoProperties value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoProperties $midocoProperties
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetMergedMidocoPropertiesResponse
     */
    public function setMidocoProperties(?\Pggns\MidocoApi\CrmSD\StructType\MidocoProperties $midocoProperties = null): self
    {
        $this->MidocoProperties = $midocoProperties;
        
        return $this;
    }
}
