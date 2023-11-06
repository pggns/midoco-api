<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCustomerQueryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteCustomerQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryResult
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryResult
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteCustomerQueryResponse
     * @uses ExecuteCustomerQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Bank\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Bank\StructType\ExecuteCustomerQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Bank\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
