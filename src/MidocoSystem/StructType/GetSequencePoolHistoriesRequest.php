<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSequencePoolHistoriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSequencePoolHistoriesRequest extends AbstractStructBase
{
    /**
     * The MidocoSequencePool
     * Meta information extracted from the WSDL
     * - ref: MidocoSequencePool
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO $MidocoSequencePool = null;
    /**
     * Constructor method for GetSequencePoolHistoriesRequest
     * @uses GetSequencePoolHistoriesRequest::setMidocoSequencePool()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO $midocoSequencePool
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO $midocoSequencePool = null)
    {
        $this
            ->setMidocoSequencePool($midocoSequencePool);
    }
    /**
     * Get MidocoSequencePool value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO|null
     */
    public function getMidocoSequencePool(): ?\Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO
    {
        return $this->MidocoSequencePool;
    }
    /**
     * Set MidocoSequencePool value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO $midocoSequencePool
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetSequencePoolHistoriesRequest
     */
    public function setMidocoSequencePool(?\Pggns\MidocoApi\MidocoSystem\StructType\SequencePoolDTO $midocoSequencePool = null): self
    {
        $this->MidocoSequencePool = $midocoSequencePool;
        
        return $this;
    }
}
