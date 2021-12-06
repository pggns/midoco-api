<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSequencePoolHistoriesRequest StructType
 * @subpackage Structs
 */
class GetSequencePoolHistoriesRequest extends AbstractStructBase
{
    /**
     * The MidocoSequencePool
     * Meta information extracted from the WSDL
     * - ref: MidocoSequencePool
     * @var \Pggns\MidocoApi\Documents\StructType\SequencePoolDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SequencePoolDTO $MidocoSequencePool = null;
    /**
     * Constructor method for GetSequencePoolHistoriesRequest
     * @uses GetSequencePoolHistoriesRequest::setMidocoSequencePool()
     * @param \Pggns\MidocoApi\Documents\StructType\SequencePoolDTO $midocoSequencePool
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SequencePoolDTO $midocoSequencePool = null)
    {
        $this
            ->setMidocoSequencePool($midocoSequencePool);
    }
    /**
     * Get MidocoSequencePool value
     * @return \Pggns\MidocoApi\Documents\StructType\SequencePoolDTO|null
     */
    public function getMidocoSequencePool(): ?\Pggns\MidocoApi\Documents\StructType\SequencePoolDTO
    {
        return $this->MidocoSequencePool;
    }
    /**
     * Set MidocoSequencePool value
     * @param \Pggns\MidocoApi\Documents\StructType\SequencePoolDTO $midocoSequencePool
     * @return \Pggns\MidocoApi\Documents\StructType\GetSequencePoolHistoriesRequest
     */
    public function setMidocoSequencePool(?\Pggns\MidocoApi\Documents\StructType\SequencePoolDTO $midocoSequencePool = null): self
    {
        $this->MidocoSequencePool = $midocoSequencePool;
        
        return $this;
    }
}
