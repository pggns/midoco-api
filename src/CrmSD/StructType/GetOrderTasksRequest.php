<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTasksRequest StructType
 * @subpackage Structs
 */
class GetOrderTasksRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $MidocoContactHistory = null;
    /**
     * Constructor method for GetOrderTasksRequest
     * @uses GetOrderTasksRequest::setMidocoCustomerId()
     * @uses GetOrderTasksRequest::setMidocoContactHistory()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null, ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoContactHistory($midocoContactHistory);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetOrderTasksRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory|null
     */
    public function getMidocoContactHistory(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory
    {
        return $this->MidocoContactHistory;
    }
    /**
     * Set MidocoContactHistory value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetOrderTasksRequest
     */
    public function setMidocoContactHistory(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory = null): self
    {
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
}
