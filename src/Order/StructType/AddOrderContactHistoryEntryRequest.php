<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOrderContactHistoryEntryRequest StructType
 * @subpackage Structs
 */
class AddOrderContactHistoryEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderContactHistory
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory $MidocoOrderContactHistory = null;
    /**
     * Constructor method for AddOrderContactHistoryEntryRequest
     * @uses AddOrderContactHistoryEntryRequest::setMidocoOrderContactHistory()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory = null)
    {
        $this
            ->setMidocoOrderContactHistory($midocoOrderContactHistory);
    }
    /**
     * Get MidocoOrderContactHistory value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory|null
     */
    public function getMidocoOrderContactHistory(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory
    {
        return $this->MidocoOrderContactHistory;
    }
    /**
     * Set MidocoOrderContactHistory value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddOrderContactHistoryEntryRequest
     */
    public function setMidocoOrderContactHistory(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory = null): self
    {
        $this->MidocoOrderContactHistory = $midocoOrderContactHistory;
        
        return $this;
    }
}
