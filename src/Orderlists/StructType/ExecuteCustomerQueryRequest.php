<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCustomerQueryRequest StructType
 * @subpackage Structs
 */
class ExecuteCustomerQueryRequest extends AbstractStructBase
{
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * Constructor method for ExecuteCustomerQueryRequest
     * @uses ExecuteCustomerQueryRequest::setMidocoQuery()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQuery $midocoQuery
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoQuery $midocoQuery = null)
    {
        $this
            ->setMidocoQuery($midocoQuery);
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteCustomerQueryRequest
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Orderlists\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
}
