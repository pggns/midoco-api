<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierMappingRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierMappingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierMapping
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierMapping
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping $MidocoSupplierMapping = null;
    /**
     * Constructor method for DeleteSupplierMappingRequest
     * @uses DeleteSupplierMappingRequest::setMidocoSupplierMapping()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping $midocoSupplierMapping
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping $midocoSupplierMapping = null)
    {
        $this
            ->setMidocoSupplierMapping($midocoSupplierMapping);
    }
    /**
     * Get MidocoSupplierMapping value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping|null
     */
    public function getMidocoSupplierMapping(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping
    {
        return $this->MidocoSupplierMapping;
    }
    /**
     * Set MidocoSupplierMapping value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping $midocoSupplierMapping
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteSupplierMappingRequest
     */
    public function setMidocoSupplierMapping(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierMapping $midocoSupplierMapping = null): self
    {
        $this->MidocoSupplierMapping = $midocoSupplierMapping;
        
        return $this;
    }
}
