<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for GetDocumentNaturesRequest
     * @uses GetDocumentNaturesRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDocumentNaturesRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\CrmSD\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
