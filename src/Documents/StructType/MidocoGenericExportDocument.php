<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGenericExportDocument StructType
 * @subpackage Structs
 */
class MidocoGenericExportDocument extends AbstractStructBase
{
    /**
     * The DocumentDescription
     * Meta information extracted from the WSDL
     * - ref: archive-message:DocumentDescription
     * @var \Pggns\MidocoApi\Documents\StructType\DocumentDescription|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\DocumentDescription $DocumentDescription = null;
    /**
     * Constructor method for MidocoGenericExportDocument
     * @uses MidocoGenericExportDocument::setDocumentDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\DocumentDescription $documentDescription
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\DocumentDescription $documentDescription = null)
    {
        $this
            ->setDocumentDescription($documentDescription);
    }
    /**
     * Get DocumentDescription value
     * @return \Pggns\MidocoApi\Documents\StructType\DocumentDescription|null
     */
    public function getDocumentDescription(): ?\Pggns\MidocoApi\Documents\StructType\DocumentDescription
    {
        return $this->DocumentDescription;
    }
    /**
     * Set DocumentDescription value
     * @param \Pggns\MidocoApi\Documents\StructType\DocumentDescription $documentDescription
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoGenericExportDocument
     */
    public function setDocumentDescription(?\Pggns\MidocoApi\Documents\StructType\DocumentDescription $documentDescription = null): self
    {
        $this->DocumentDescription = $documentDescription;
        
        return $this;
    }
}
