<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierMappingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierMappingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierMapping
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierMapping
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $MidocoSupplierMapping = null;
    /**
     * Constructor method for SaveSupplierMappingRequest
     * @uses SaveSupplierMappingRequest::setMidocoSupplierMapping()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping = null)
    {
        $this
            ->setMidocoSupplierMapping($midocoSupplierMapping);
    }
    /**
     * Get MidocoSupplierMapping value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping|null
     */
    public function getMidocoSupplierMapping(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping
    {
        return $this->MidocoSupplierMapping;
    }
    /**
     * Set MidocoSupplierMapping value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierMappingRequest
     */
    public function setMidocoSupplierMapping(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierMapping $midocoSupplierMapping = null): self
    {
        $this->MidocoSupplierMapping = $midocoSupplierMapping;
        
        return $this;
    }
}
