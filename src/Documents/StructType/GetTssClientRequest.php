<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssClientRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTssClientRequest extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for GetTssClientRequest
     * @uses GetTssClientRequest::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Documents\StructType\GetTssClientRequest
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Documents\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
