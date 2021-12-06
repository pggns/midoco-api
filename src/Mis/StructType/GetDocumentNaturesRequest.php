<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNaturesRequest StructType
 * @subpackage Structs
 */
class GetDocumentNaturesRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNature
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNature
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for GetDocumentNaturesRequest
     * @uses GetDocumentNaturesRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\Mis\StructType\GetDocumentNaturesRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\Mis\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
