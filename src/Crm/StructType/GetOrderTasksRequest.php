<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $MidocoContactHistory = null;
    /**
     * Constructor method for GetOrderTasksRequest
     * @uses GetOrderTasksRequest::setMidocoCustomerId()
     * @uses GetOrderTasksRequest::setMidocoContactHistory()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoContactHistory($midocoContactHistory);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crm\StructType\GetOrderTasksRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\Crm\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory|null
     */
    public function getMidocoContactHistory(): ?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory
    {
        return $this->MidocoContactHistory;
    }
    /**
     * Set MidocoContactHistory value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory
     * @return \Pggns\MidocoApi\Crm\StructType\GetOrderTasksRequest
     */
    public function setMidocoContactHistory(?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory = null): self
    {
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
}
