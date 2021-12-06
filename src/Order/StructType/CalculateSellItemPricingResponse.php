<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateSellItemPricingResponse StructType
 * @subpackage Structs
 */
class CalculateSellItemPricingResponse extends AbstractStructBase
{
    /**
     * The MidocoSellItemPricing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItemPricing
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing $MidocoSellItemPricing = null;
    /**
     * Constructor method for CalculateSellItemPricingResponse
     * @uses CalculateSellItemPricingResponse::setMidocoSellItemPricing()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null)
    {
        $this
            ->setMidocoSellItemPricing($midocoSellItemPricing);
    }
    /**
     * Get MidocoSellItemPricing value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing|null
     */
    public function getMidocoSellItemPricing(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing
    {
        return $this->MidocoSellItemPricing;
    }
    /**
     * Set MidocoSellItemPricing value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateSellItemPricingResponse
     */
    public function setMidocoSellItemPricing(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemPricing $midocoSellItemPricing = null): self
    {
        $this->MidocoSellItemPricing = $midocoSellItemPricing;
        
        return $this;
    }
}
