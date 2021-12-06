<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssClientResponse StructType
 * @subpackage Structs
 */
class GetTssClientResponse extends TssApiErrorConveyingResponse
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for GetTssClientResponse
     * @uses GetTssClientResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTssClientResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\CrmSD\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
