<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierMappingRequest StructType
 * @subpackage Structs
 */
class SaveSupplierMappingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierMapping
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierMapping
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping $MidocoSupplierMapping = null;
    /**
     * Constructor method for SaveSupplierMappingRequest
     * @uses SaveSupplierMappingRequest::setMidocoSupplierMapping()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping $midocoSupplierMapping
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping $midocoSupplierMapping = null)
    {
        $this
            ->setMidocoSupplierMapping($midocoSupplierMapping);
    }
    /**
     * Get MidocoSupplierMapping value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping|null
     */
    public function getMidocoSupplierMapping(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping
    {
        return $this->MidocoSupplierMapping;
    }
    /**
     * Set MidocoSupplierMapping value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping $midocoSupplierMapping
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveSupplierMappingRequest
     */
    public function setMidocoSupplierMapping(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSupplierMapping $midocoSupplierMapping = null): self
    {
        $this->MidocoSupplierMapping = $midocoSupplierMapping;
        
        return $this;
    }
}
