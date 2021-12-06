<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserQueryResponse StructType
 * @subpackage Structs
 */
class GetUserQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * Constructor method for GetUserQueryResponse
     * @uses GetUserQueryResponse::setMidocoQuery()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQuery $midocoQuery
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoQuery $midocoQuery = null)
    {
        $this
            ->setMidocoQuery($midocoQuery);
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Documents\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Documents\StructType\GetUserQueryResponse
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Documents\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
}
