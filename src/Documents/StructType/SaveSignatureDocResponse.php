<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSignatureDocResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveSignatureDoc --- saves a signature document
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSignatureDocResponse extends AbstractStructBase
{
    /**
     * The MidocoSignatureDoc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSignatureDoc
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $MidocoSignatureDoc = null;
    /**
     * Constructor method for SaveSignatureDocResponse
     * @uses SaveSignatureDocResponse::setMidocoSignatureDoc()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc = null)
    {
        $this
            ->setMidocoSignatureDoc($midocoSignatureDoc);
    }
    /**
     * Get MidocoSignatureDoc value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc|null
     */
    public function getMidocoSignatureDoc(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc
    {
        return $this->MidocoSignatureDoc;
    }
    /**
     * Set MidocoSignatureDoc value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSignatureDocResponse
     */
    public function setMidocoSignatureDoc(?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc = null): self
    {
        $this->MidocoSignatureDoc = $midocoSignatureDoc;
        
        return $this;
    }
}
