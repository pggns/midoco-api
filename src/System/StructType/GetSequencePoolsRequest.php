<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSequencePoolsRequest StructType
 * @subpackage Structs
 */
class GetSequencePoolsRequest extends AbstractStructBase
{
    /**
     * The MidocoSequencePool
     * Meta information extracted from the WSDL
     * - ref: MidocoSequencePool
     * @var \Pggns\MidocoApi\System\StructType\SequencePoolDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\SequencePoolDTO $MidocoSequencePool = null;
    /**
     * Constructor method for GetSequencePoolsRequest
     * @uses GetSequencePoolsRequest::setMidocoSequencePool()
     * @param \Pggns\MidocoApi\System\StructType\SequencePoolDTO $midocoSequencePool
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\SequencePoolDTO $midocoSequencePool = null)
    {
        $this
            ->setMidocoSequencePool($midocoSequencePool);
    }
    /**
     * Get MidocoSequencePool value
     * @return \Pggns\MidocoApi\System\StructType\SequencePoolDTO|null
     */
    public function getMidocoSequencePool(): ?\Pggns\MidocoApi\System\StructType\SequencePoolDTO
    {
        return $this->MidocoSequencePool;
    }
    /**
     * Set MidocoSequencePool value
     * @param \Pggns\MidocoApi\System\StructType\SequencePoolDTO $midocoSequencePool
     * @return \Pggns\MidocoApi\System\StructType\GetSequencePoolsRequest
     */
    public function setMidocoSequencePool(?\Pggns\MidocoApi\System\StructType\SequencePoolDTO $midocoSequencePool = null): self
    {
        $this->MidocoSequencePool = $midocoSequencePool;
        
        return $this;
    }
}
