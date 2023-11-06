<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternDocumentByIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExternDocumentByIdResponse extends AbstractStructBase
{
    /**
     * The MidocoExternDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoExternDocument
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoExternDocument $MidocoExternDocument = null;
    /**
     * Constructor method for GetExternDocumentByIdResponse
     * @uses GetExternDocumentByIdResponse::setMidocoExternDocument()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument $midocoExternDocument
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoExternDocument $midocoExternDocument = null)
    {
        $this
            ->setMidocoExternDocument($midocoExternDocument);
    }
    /**
     * Get MidocoExternDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument|null
     */
    public function getMidocoExternDocument(): ?\Pggns\MidocoApi\Documents\StructType\MidocoExternDocument
    {
        return $this->MidocoExternDocument;
    }
    /**
     * Set MidocoExternDocument value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExternDocument $midocoExternDocument
     * @return \Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdResponse
     */
    public function setMidocoExternDocument(?\Pggns\MidocoApi\Documents\StructType\MidocoExternDocument $midocoExternDocument = null): self
    {
        $this->MidocoExternDocument = $midocoExternDocument;
        
        return $this;
    }
}
