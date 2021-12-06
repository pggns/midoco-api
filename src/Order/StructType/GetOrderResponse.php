<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrder --- retrieve an Order response is constructed as: - one OrderDTO - SellItemList (zero or more)
 * @subpackage Structs
 */
class GetOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The isReadOnlyByLockPeriod
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isReadOnlyByLockPeriod = null;
    /**
     * Constructor method for GetOrderResponse
     * @uses GetOrderResponse::setMidocoOrder()
     * @uses GetOrderResponse::setIsReadOnlyByLockPeriod()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     * @param bool $isReadOnlyByLockPeriod
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null, ?bool $isReadOnlyByLockPeriod = false)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setIsReadOnlyByLockPeriod($isReadOnlyByLockPeriod);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderResponse
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get isReadOnlyByLockPeriod value
     * @return bool|null
     */
    public function getIsReadOnlyByLockPeriod(): ?bool
    {
        return $this->isReadOnlyByLockPeriod;
    }
    /**
     * Set isReadOnlyByLockPeriod value
     * @param bool $isReadOnlyByLockPeriod
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderResponse
     */
    public function setIsReadOnlyByLockPeriod(?bool $isReadOnlyByLockPeriod = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadOnlyByLockPeriod) && !is_bool($isReadOnlyByLockPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadOnlyByLockPeriod, true), gettype($isReadOnlyByLockPeriod)), __LINE__);
        }
        $this->isReadOnlyByLockPeriod = $isReadOnlyByLockPeriod;
        
        return $this;
    }
}
