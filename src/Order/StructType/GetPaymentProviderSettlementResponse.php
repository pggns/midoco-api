<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderSettlementResponse StructType
 * @subpackage Structs
 */
class GetPaymentProviderSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProviderSettlement
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement $MidocoPaymentProviderSettlement = null;
    /**
     * Constructor method for GetPaymentProviderSettlementResponse
     * @uses GetPaymentProviderSettlementResponse::setMidocoPaymentProviderSettlement()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement = null)
    {
        $this
            ->setMidocoPaymentProviderSettlement($midocoPaymentProviderSettlement);
    }
    /**
     * Get MidocoPaymentProviderSettlement value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement|null
     */
    public function getMidocoPaymentProviderSettlement(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement
    {
        return $this->MidocoPaymentProviderSettlement;
    }
    /**
     * Set MidocoPaymentProviderSettlement value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementResponse
     */
    public function setMidocoPaymentProviderSettlement(?\Pggns\MidocoApi\Api\Order\StructType\MidocoPaymentProviderSettlement $midocoPaymentProviderSettlement = null): self
    {
        $this->MidocoPaymentProviderSettlement = $midocoPaymentProviderSettlement;
        
        return $this;
    }
}
