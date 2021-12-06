<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBookingsQueryResponse StructType
 * @subpackage Structs
 */
class ExecuteBookingsQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryResult
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryResult
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteBookingsQueryResponse
     * @uses ExecuteBookingsQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ExecuteBookingsQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
