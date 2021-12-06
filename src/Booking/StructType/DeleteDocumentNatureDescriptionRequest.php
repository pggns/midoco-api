<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDocumentNatureDescriptionRequest StructType
 * @subpackage Structs
 */
class DeleteDocumentNatureDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureDescription
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType $MidocoDocumentNatureDescription = null;
    /**
     * Constructor method for DeleteDocumentNatureDescriptionRequest
     * @uses DeleteDocumentNatureDescriptionRequest::setMidocoDocumentNatureDescription()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null)
    {
        $this
            ->setMidocoDocumentNatureDescription($midocoDocumentNatureDescription);
    }
    /**
     * Get MidocoDocumentNatureDescription value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType|null
     */
    public function getMidocoDocumentNatureDescription(): ?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType
    {
        return $this->MidocoDocumentNatureDescription;
    }
    /**
     * Set MidocoDocumentNatureDescription value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription
     * @return \Pggns\MidocoApi\Booking\StructType\DeleteDocumentNatureDescriptionRequest
     */
    public function setMidocoDocumentNatureDescription(?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureDescriptionType $midocoDocumentNatureDescription = null): self
    {
        $this->MidocoDocumentNatureDescription = $midocoDocumentNatureDescription;
        
        return $this;
    }
}
