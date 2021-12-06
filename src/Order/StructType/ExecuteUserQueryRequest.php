<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteUserQueryRequest StructType
 * @subpackage Structs
 */
class ExecuteUserQueryRequest extends AbstractStructBase
{
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * Constructor method for ExecuteUserQueryRequest
     * @uses ExecuteUserQueryRequest::setMidocoQuery()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoQuery $midocoQuery
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoQuery $midocoQuery = null)
    {
        $this
            ->setMidocoQuery($midocoQuery);
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteUserQueryRequest
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Api\Order\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
}
