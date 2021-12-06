<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDocumentNatureRequest StructType
 * @subpackage Structs
 */
class DeleteDocumentNatureRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNature
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNature
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for DeleteDocumentNatureRequest
     * @uses DeleteDocumentNatureRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteDocumentNatureRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
