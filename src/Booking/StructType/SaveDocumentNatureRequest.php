<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDocumentNatureRequest StructType
 * @subpackage Structs
 */
class SaveDocumentNatureRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNature
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNature
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for SaveDocumentNatureRequest
     * @uses SaveDocumentNatureRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\Booking\StructType\SaveDocumentNatureRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\Booking\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
