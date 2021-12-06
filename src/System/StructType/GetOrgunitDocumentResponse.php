<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitDocumentResponse StructType
 * @subpackage Structs
 */
class GetOrgunitDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrgunitDocument
     * @var \Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument $MidocoOrgunitDocument = null;
    /**
     * Constructor method for GetOrgunitDocumentResponse
     * @uses GetOrgunitDocumentResponse::setMidocoOrgunitDocument()
     * @param \Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null)
    {
        $this
            ->setMidocoOrgunitDocument($midocoOrgunitDocument);
    }
    /**
     * Get MidocoOrgunitDocument value
     * @return \Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument|null
     */
    public function getMidocoOrgunitDocument(): ?\Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument
    {
        return $this->MidocoOrgunitDocument;
    }
    /**
     * Set MidocoOrgunitDocument value
     * @param \Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     * @return \Pggns\MidocoApi\System\StructType\GetOrgunitDocumentResponse
     */
    public function setMidocoOrgunitDocument(?\Pggns\MidocoApi\System\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null): self
    {
        $this->MidocoOrgunitDocument = $midocoOrgunitDocument;
        
        return $this;
    }
}
