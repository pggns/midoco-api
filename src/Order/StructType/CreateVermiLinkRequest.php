<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateVermiLinkRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: create deeplink for Unister VERMI
 * @subpackage Structs
 */
class CreateVermiLinkRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * Constructor method for CreateVermiLinkRequest
     * @uses CreateVermiLinkRequest::setMidocoOrder()
     * @uses CreateVermiLinkRequest::setMidocoSellItem()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setMidocoSellItem($midocoSellItem);
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateVermiLinkRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType|null
     */
    public function getMidocoSellItem(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType
    {
        return $this->MidocoSellItem;
    }
    /**
     * Set MidocoSellItem value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateVermiLinkRequest
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
}
