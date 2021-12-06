<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLogEntriesRequest StructType
 * @subpackage Structs
 */
class GetLogEntriesRequest extends AbstractStructBase
{
    /**
     * The MidocoLogEntryRequest
     * Meta information extracted from the WSDL
     * - ref: MidocoLogEntryRequest
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest $MidocoLogEntryRequest = null;
    /**
     * Constructor method for GetLogEntriesRequest
     * @uses GetLogEntriesRequest::setMidocoLogEntryRequest()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest $midocoLogEntryRequest
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest $midocoLogEntryRequest = null)
    {
        $this
            ->setMidocoLogEntryRequest($midocoLogEntryRequest);
    }
    /**
     * Get MidocoLogEntryRequest value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest|null
     */
    public function getMidocoLogEntryRequest(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest
    {
        return $this->MidocoLogEntryRequest;
    }
    /**
     * Set MidocoLogEntryRequest value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest $midocoLogEntryRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetLogEntriesRequest
     */
    public function setMidocoLogEntryRequest(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoLogEntryRequest $midocoLogEntryRequest = null): self
    {
        $this->MidocoLogEntryRequest = $midocoLogEntryRequest;
        
        return $this;
    }
}
