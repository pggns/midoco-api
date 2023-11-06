<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternDocumentDescResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExternDocumentDescResponse extends AbstractStructBase
{
    /**
     * The MidocoExtDocumentDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoExtDocumentDesc
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $MidocoExtDocumentDesc = null;
    /**
     * Constructor method for GetExternDocumentDescResponse
     * @uses GetExternDocumentDescResponse::setMidocoExtDocumentDesc()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc = null)
    {
        $this
            ->setMidocoExtDocumentDesc($midocoExtDocumentDesc);
    }
    /**
     * Get MidocoExtDocumentDesc value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc|null
     */
    public function getMidocoExtDocumentDesc(): ?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
    {
        return $this->MidocoExtDocumentDesc;
    }
    /**
     * Set MidocoExtDocumentDesc value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc
     * @return \Pggns\MidocoApi\Documents\StructType\GetExternDocumentDescResponse
     */
    public function setMidocoExtDocumentDesc(?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc = null): self
    {
        $this->MidocoExtDocumentDesc = $midocoExtDocumentDesc;
        
        return $this;
    }
}
