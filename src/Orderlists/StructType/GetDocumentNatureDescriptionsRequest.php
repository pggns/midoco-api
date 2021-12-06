<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNatureDescriptionsRequest StructType
 * @subpackage Structs
 */
class GetDocumentNatureDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureDescription
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType $MidocoDocumentNatureDescription = null;
    /**
     * Constructor method for GetDocumentNatureDescriptionsRequest
     * @uses GetDocumentNatureDescriptionsRequest::setMidocoDocumentNatureDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null)
    {
        $this
            ->setMidocoDocumentNatureDescription($midocoDocumentNatureDescription);
    }
    /**
     * Get MidocoDocumentNatureDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType|null
     */
    public function getMidocoDocumentNatureDescription(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType
    {
        return $this->MidocoDocumentNatureDescription;
    }
    /**
     * Set MidocoDocumentNatureDescription value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetDocumentNatureDescriptionsRequest
     */
    public function setMidocoDocumentNatureDescription(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null): self
    {
        $this->MidocoDocumentNatureDescription = $midocoDocumentNatureDescription;
        
        return $this;
    }
}
