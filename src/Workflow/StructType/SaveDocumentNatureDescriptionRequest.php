<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentNatureDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveDocumentNatureDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureDescription
     * @var \Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType|null
     */
    protected ?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType $MidocoDocumentNatureDescription = null;
    /**
     * Constructor method for SaveDocumentNatureDescriptionRequest
     * @uses SaveDocumentNatureDescriptionRequest::setMidocoDocumentNatureDescription()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     */
    public function __construct(?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null)
    {
        $this
            ->setMidocoDocumentNatureDescription($midocoDocumentNatureDescription);
    }
    /**
     * Get MidocoDocumentNatureDescription value
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType|null
     */
    public function getMidocoDocumentNatureDescription(): ?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType
    {
        return $this->MidocoDocumentNatureDescription;
    }
    /**
     * Set MidocoDocumentNatureDescription value
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveDocumentNatureDescriptionRequest
     */
    public function setMidocoDocumentNatureDescription(?\Pggns\MidocoApi\Api\Workflow\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null): self
    {
        $this->MidocoDocumentNatureDescription = $midocoDocumentNatureDescription;
        
        return $this;
    }
}
