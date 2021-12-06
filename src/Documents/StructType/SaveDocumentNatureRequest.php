<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for SaveDocumentNatureRequest
     * @uses SaveDocumentNatureRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\Documents\StructType\SaveDocumentNatureRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
