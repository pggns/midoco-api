<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSignatureDocRequest StructType
 * @subpackage Structs
 */
class SaveSignatureDocRequest extends AbstractStructBase
{
    /**
     * The MidocoSignatureDoc
     * Meta information extracted from the WSDL
     * - ref: MidocoSignatureDoc
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $MidocoSignatureDoc = null;
    /**
     * Constructor method for SaveSignatureDocRequest
     * @uses SaveSignatureDocRequest::setMidocoSignatureDoc()
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSignatureDocRequest
     */
    public function setMidocoSignatureDoc(?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc = null): self
    {
        $this->MidocoSignatureDoc = $midocoSignatureDoc;
        
        return $this;
    }
}
