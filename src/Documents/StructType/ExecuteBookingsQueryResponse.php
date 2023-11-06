<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBookingsQueryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteBookingsQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryResult
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryResult
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteBookingsQueryResponse
     * @uses ExecuteBookingsQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Documents\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Documents\StructType\ExecuteBookingsQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Documents\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
