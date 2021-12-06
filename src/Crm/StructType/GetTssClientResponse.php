<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for GetTssClientResponse
     * @uses GetTssClientResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Crm\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Crm\StructType\GetTssClientResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Crm\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
