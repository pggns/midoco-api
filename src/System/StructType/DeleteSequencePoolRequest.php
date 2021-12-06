<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSequencePoolRequest StructType
 * @subpackage Structs
 */
class DeleteSequencePoolRequest extends AbstractStructBase
{
    /**
     * The MidocoSequencePool
     * Meta information extracted from the WSDL
     * - ref: MidocoSequencePool
     * @var \Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO $MidocoSequencePool = null;
    /**
     * Constructor method for DeleteSequencePoolRequest
     * @uses DeleteSequencePoolRequest::setMidocoSequencePool()
     * @param \Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO $midocoSequencePool
     */
    public function __construct(?\Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO $midocoSequencePool = null)
    {
        $this
            ->setMidocoSequencePool($midocoSequencePool);
    }
    /**
     * Get MidocoSequencePool value
     * @return \Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO|null
     */
    public function getMidocoSequencePool(): ?\Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO
    {
        return $this->MidocoSequencePool;
    }
    /**
     * Set MidocoSequencePool value
     * @param \Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO $midocoSequencePool
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteSequencePoolRequest
     */
    public function setMidocoSequencePool(?\Pggns\MidocoApi\Api\System\StructType\SequencePoolDTO $midocoSequencePool = null): self
    {
        $this->MidocoSequencePool = $midocoSequencePool;
        
        return $this;
    }
}
