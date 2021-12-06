<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSuppCancelCMappingRequest StructType
 * @subpackage Structs
 */
class ListSuppCancelCMappingRequest extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - ref: MidocoSuppCancelCMapping
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping $MidocoSuppCancelCMapping = null;
    /**
     * Constructor method for ListSuppCancelCMappingRequest
     * @uses ListSuppCancelCMappingRequest::setMidocoSuppCancelCMapping()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping = null)
    {
        $this
            ->setMidocoSuppCancelCMapping($midocoSuppCancelCMapping);
    }
    /**
     * Get MidocoSuppCancelCMapping value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping|null
     */
    public function getMidocoSuppCancelCMapping(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping
    {
        return $this->MidocoSuppCancelCMapping;
    }
    /**
     * Set MidocoSuppCancelCMapping value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListSuppCancelCMappingRequest
     */
    public function setMidocoSuppCancelCMapping(?\Pggns\MidocoApi\OrderSD\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping = null): self
    {
        $this->MidocoSuppCancelCMapping = $midocoSuppCancelCMapping;
        
        return $this;
    }
}
