<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteTssExportResponse StructType
 * @subpackage Structs
 */
class ExecuteTssExportResponse extends AbstractStructBase
{
    /**
     * The MidocoTssProtocol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoTssProtocol
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol $MidocoTssProtocol = null;
    /**
     * Constructor method for ExecuteTssExportResponse
     * @uses ExecuteTssExportResponse::setMidocoTssProtocol()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol $midocoTssProtocol
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol $midocoTssProtocol = null)
    {
        $this
            ->setMidocoTssProtocol($midocoTssProtocol);
    }
    /**
     * Get MidocoTssProtocol value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol|null
     */
    public function getMidocoTssProtocol(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol
    {
        return $this->MidocoTssProtocol;
    }
    /**
     * Set MidocoTssProtocol value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol $midocoTssProtocol
     * @return \Pggns\MidocoApi\Api\Order\StructType\ExecuteTssExportResponse
     */
    public function setMidocoTssProtocol(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTssProtocol $midocoTssProtocol = null): self
    {
        $this->MidocoTssProtocol = $midocoTssProtocol;
        
        return $this;
    }
}
