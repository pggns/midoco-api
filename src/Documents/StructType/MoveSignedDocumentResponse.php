<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveSignedDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: move signed document --- moves a signed document to the specified order,customer or billing document from the input order, customer or billing document
 * @subpackage Structs
 */
class MoveSignedDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoSignatureDoc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSignatureDoc
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc $MidocoSignatureDoc = null;
    /**
     * Constructor method for MoveSignedDocumentResponse
     * @uses MoveSignedDocumentResponse::setMidocoSignatureDoc()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc = null)
    {
        $this
            ->setMidocoSignatureDoc($midocoSignatureDoc);
    }
    /**
     * Get MidocoSignatureDoc value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc|null
     */
    public function getMidocoSignatureDoc(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc
    {
        return $this->MidocoSignatureDoc;
    }
    /**
     * Set MidocoSignatureDoc value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MoveSignedDocumentResponse
     */
    public function setMidocoSignatureDoc(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc = null): self
    {
        $this->MidocoSignatureDoc = $midocoSignatureDoc;
        
        return $this;
    }
}
