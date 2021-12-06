<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAdviceSettlementResponse StructType
 * @subpackage Structs
 */
class SaveAdviceSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoAdviceSettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoAdviceSettlement
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement $MidocoAdviceSettlement = null;
    /**
     * Constructor method for SaveAdviceSettlementResponse
     * @uses SaveAdviceSettlementResponse::setMidocoAdviceSettlement()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement = null)
    {
        $this
            ->setMidocoAdviceSettlement($midocoAdviceSettlement);
    }
    /**
     * Get MidocoAdviceSettlement value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement|null
     */
    public function getMidocoAdviceSettlement(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement
    {
        return $this->MidocoAdviceSettlement;
    }
    /**
     * Set MidocoAdviceSettlement value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementResponse
     */
    public function setMidocoAdviceSettlement(?\Pggns\MidocoApi\Api\Order\StructType\MidocoAdviceSettlement $midocoAdviceSettlement = null): self
    {
        $this->MidocoAdviceSettlement = $midocoAdviceSettlement;
        
        return $this;
    }
}
