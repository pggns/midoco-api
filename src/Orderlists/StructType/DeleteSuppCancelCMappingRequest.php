<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSuppCancelCMappingRequest StructType
 * @subpackage Structs
 */
class DeleteSuppCancelCMappingRequest extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - ref: MidocoSuppCancelCMapping
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping $MidocoSuppCancelCMapping = null;
    /**
     * Constructor method for DeleteSuppCancelCMappingRequest
     * @uses DeleteSuppCancelCMappingRequest::setMidocoSuppCancelCMapping()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping = null)
    {
        $this
            ->setMidocoSuppCancelCMapping($midocoSuppCancelCMapping);
    }
    /**
     * Get MidocoSuppCancelCMapping value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping|null
     */
    public function getMidocoSuppCancelCMapping(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping
    {
        return $this->MidocoSuppCancelCMapping;
    }
    /**
     * Set MidocoSuppCancelCMapping value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteSuppCancelCMappingRequest
     */
    public function setMidocoSuppCancelCMapping(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSuppCancelCMapping $midocoSuppCancelCMapping = null): self
    {
        $this->MidocoSuppCancelCMapping = $midocoSuppCancelCMapping;
        
        return $this;
    }
}
