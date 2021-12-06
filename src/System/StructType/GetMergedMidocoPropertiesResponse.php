<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\MidocoProperties|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoProperties $MidocoProperties = null;
    /**
     * Constructor method for GetMergedMidocoPropertiesResponse
     * @uses GetMergedMidocoPropertiesResponse::setMidocoProperties()
     * @param \Pggns\MidocoApi\System\StructType\MidocoProperties $midocoProperties
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoProperties $midocoProperties = null)
    {
        $this
            ->setMidocoProperties($midocoProperties);
    }
    /**
     * Get MidocoProperties value
     * @return \Pggns\MidocoApi\System\StructType\MidocoProperties|null
     */
    public function getMidocoProperties(): ?\Pggns\MidocoApi\System\StructType\MidocoProperties
    {
        return $this->MidocoProperties;
    }
    /**
     * Set MidocoProperties value
     * @param \Pggns\MidocoApi\System\StructType\MidocoProperties $midocoProperties
     * @return \Pggns\MidocoApi\System\StructType\GetMergedMidocoPropertiesResponse
     */
    public function setMidocoProperties(?\Pggns\MidocoApi\System\StructType\MidocoProperties $midocoProperties = null): self
    {
        $this->MidocoProperties = $midocoProperties;
        
        return $this;
    }
}
