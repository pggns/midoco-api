<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType $MidocoDocumentNature = null;
    /**
     * Constructor method for DeleteDocumentNatureRequest
     * @uses DeleteDocumentNatureRequest::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType $midocoDocumentNature
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType $midocoDocumentNature = null)
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType|null
     */
    public function getMidocoDocumentNature(): ?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * Set MidocoDocumentNature value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType $midocoDocumentNature
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteDocumentNatureRequest
     */
    public function setMidocoDocumentNature(?\Pggns\MidocoApi\Crm\StructType\MidocoDocumentNatureType $midocoDocumentNature = null): self
    {
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
}
