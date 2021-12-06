<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSettlementChargeResponse StructType
 * @subpackage Structs
 */
class SaveSettlementChargeResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementCharge
     * Meta information extracted from the WSDL
     * - ref: MidocoSettlementCharge
     * @var \Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO $MidocoSettlementCharge = null;
    /**
     * Constructor method for SaveSettlementChargeResponse
     * @uses SaveSettlementChargeResponse::setMidocoSettlementCharge()
     * @param \Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO $midocoSettlementCharge
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO $midocoSettlementCharge = null)
    {
        $this
            ->setMidocoSettlementCharge($midocoSettlementCharge);
    }
    /**
     * Get MidocoSettlementCharge value
     * @return \Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO|null
     */
    public function getMidocoSettlementCharge(): ?\Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO
    {
        return $this->MidocoSettlementCharge;
    }
    /**
     * Set MidocoSettlementCharge value
     * @param \Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO $midocoSettlementCharge
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSettlementChargeResponse
     */
    public function setMidocoSettlementCharge(?\Pggns\MidocoApi\Documents\StructType\SettlementChargeDTO $midocoSettlementCharge = null): self
    {
        $this->MidocoSettlementCharge = $midocoSettlementCharge;
        
        return $this;
    }
}
