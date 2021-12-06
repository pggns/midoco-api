<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderOnlinePaymentRequest StructType
 * @subpackage Structs
 */
class SaveOrderOnlinePaymentRequest extends AbstractStructBase
{
    /**
     * The MidocoOnlinePayment
     * Meta information extracted from the WSDL
     * - ref: MidocoOnlinePayment
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment $MidocoOnlinePayment = null;
    /**
     * Constructor method for SaveOrderOnlinePaymentRequest
     * @uses SaveOrderOnlinePaymentRequest::setMidocoOnlinePayment()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment = null)
    {
        $this
            ->setMidocoOnlinePayment($midocoOnlinePayment);
    }
    /**
     * Get MidocoOnlinePayment value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment|null
     */
    public function getMidocoOnlinePayment(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment
    {
        return $this->MidocoOnlinePayment;
    }
    /**
     * Set MidocoOnlinePayment value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderOnlinePaymentRequest
     */
    public function setMidocoOnlinePayment(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment = null): self
    {
        $this->MidocoOnlinePayment = $midocoOnlinePayment;
        
        return $this;
    }
}
