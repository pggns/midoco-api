<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderCreditCheckResponse StructType
 * @subpackage Structs
 */
class GetOrderCreditCheckResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderCreditCheck
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderCreditCheck
     * @var \Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO $MidocoOrderCreditCheck = null;
    /**
     * Constructor method for GetOrderCreditCheckResponse
     * @uses GetOrderCreditCheckResponse::setMidocoOrderCreditCheck()
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck = null)
    {
        $this
            ->setMidocoOrderCreditCheck($midocoOrderCreditCheck);
    }
    /**
     * Get MidocoOrderCreditCheck value
     * @return \Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO|null
     */
    public function getMidocoOrderCreditCheck(): ?\Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO
    {
        return $this->MidocoOrderCreditCheck;
    }
    /**
     * Set MidocoOrderCreditCheck value
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderCreditCheckResponse
     */
    public function setMidocoOrderCreditCheck(?\Pggns\MidocoApi\Api\Order\StructType\OrderCreditCheckDTO $midocoOrderCreditCheck = null): self
    {
        $this->MidocoOrderCreditCheck = $midocoOrderCreditCheck;
        
        return $this;
    }
}
