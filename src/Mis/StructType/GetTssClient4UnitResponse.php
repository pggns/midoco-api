<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssClient4UnitResponse StructType
 * @subpackage Structs
 */
class GetTssClient4UnitResponse extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for GetTssClient4UnitResponse
     * @uses GetTssClient4UnitResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Mis\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Mis\StructType\GetTssClient4UnitResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Mis\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
