<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteBookingsQueryResponse
     * @uses ExecuteBookingsQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteBookingsQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
