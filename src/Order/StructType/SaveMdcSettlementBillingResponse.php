<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMdcSettlementBillingResponse StructType
 * @subpackage Structs
 */
class SaveMdcSettlementBillingResponse extends AbstractStructBase
{
    /**
     * The MidocoMdcSettlementBilling
     * Meta information extracted from the WSDL
     * - ref: MidocoMdcSettlementBilling
     * @var \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO $MidocoMdcSettlementBilling = null;
    /**
     * Constructor method for SaveMdcSettlementBillingResponse
     * @uses SaveMdcSettlementBillingResponse::setMidocoMdcSettlementBilling()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO $midocoMdcSettlementBilling
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO $midocoMdcSettlementBilling = null)
    {
        $this
            ->setMidocoMdcSettlementBilling($midocoMdcSettlementBilling);
    }
    /**
     * Get MidocoMdcSettlementBilling value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO|null
     */
    public function getMidocoMdcSettlementBilling(): ?\Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO
    {
        return $this->MidocoMdcSettlementBilling;
    }
    /**
     * Set MidocoMdcSettlementBilling value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO $midocoMdcSettlementBilling
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMdcSettlementBillingResponse
     */
    public function setMidocoMdcSettlementBilling(?\Pggns\MidocoApi\Api\Order\StructType\MdcSettlementBillingDTO $midocoMdcSettlementBilling = null): self
    {
        $this->MidocoMdcSettlementBilling = $midocoMdcSettlementBilling;
        
        return $this;
    }
}
