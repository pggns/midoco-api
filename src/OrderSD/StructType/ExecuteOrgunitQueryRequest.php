<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteOrgunitQueryRequest StructType
 * @subpackage Structs
 */
class ExecuteOrgunitQueryRequest extends AbstractStructBase
{
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * Constructor method for ExecuteOrgunitQueryRequest
     * @uses ExecuteOrgunitQueryRequest::setMidocoQuery()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery $midocoQuery
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery $midocoQuery = null)
    {
        $this
            ->setMidocoQuery($midocoQuery);
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ExecuteOrgunitQueryRequest
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
}
