<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitDocumentRequest StructType
 * @subpackage Structs
 */
class SaveOrgunitDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitDocument
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument $MidocoOrgunitDocument = null;
    /**
     * Constructor method for SaveOrgunitDocumentRequest
     * @uses SaveOrgunitDocumentRequest::setMidocoOrgunitDocument()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null)
    {
        $this
            ->setMidocoOrgunitDocument($midocoOrgunitDocument);
    }
    /**
     * Get MidocoOrgunitDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument|null
     */
    public function getMidocoOrgunitDocument(): ?\Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument
    {
        return $this->MidocoOrgunitDocument;
    }
    /**
     * Set MidocoOrgunitDocument value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument $midocoOrgunitDocument
     * @return \Pggns\MidocoApi\Documents\StructType\SaveOrgunitDocumentRequest
     */
    public function setMidocoOrgunitDocument(?\Pggns\MidocoApi\Documents\StructType\MidocoOrgunitDocument $midocoOrgunitDocument = null): self
    {
        $this->MidocoOrgunitDocument = $midocoOrgunitDocument;
        
        return $this;
    }
}
