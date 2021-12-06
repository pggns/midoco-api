<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderOnlinePaymentRequest StructType
 * @subpackage Structs
 */
class DeleteOrderOnlinePaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderId
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderId
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId $MidocoOrderId = null;
    /**
     * Constructor method for DeleteOrderOnlinePaymentRequest
     * @uses DeleteOrderOnlinePaymentRequest::setMidocoOrderId()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId $midocoOrderId
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId $midocoOrderId = null)
    {
        $this
            ->setMidocoOrderId($midocoOrderId);
    }
    /**
     * Get MidocoOrderId value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId|null
     */
    public function getMidocoOrderId(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId
    {
        return $this->MidocoOrderId;
    }
    /**
     * Set MidocoOrderId value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId $midocoOrderId
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteOrderOnlinePaymentRequest
     */
    public function setMidocoOrderId(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderId $midocoOrderId = null): self
    {
        $this->MidocoOrderId = $midocoOrderId;
        
        return $this;
    }
}
