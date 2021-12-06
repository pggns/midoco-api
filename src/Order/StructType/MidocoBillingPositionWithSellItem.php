<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingPositionWithSellItem StructType
 * @subpackage Structs
 */
class MidocoBillingPositionWithSellItem extends AbstractStructBase
{
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType $MidocoBillingPosition = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * Constructor method for MidocoBillingPositionWithSellItem
     * @uses MidocoBillingPositionWithSellItem::setMidocoBillingPosition()
     * @uses MidocoBillingPositionWithSellItem::setMidocoSellItem()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null)
    {
        $this
            ->setMidocoBillingPosition($midocoBillingPosition)
            ->setMidocoSellItem($midocoSellItem);
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType|null
     */
    public function getMidocoBillingPosition(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * Set MidocoBillingPosition value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionWithSellItem
     */
    public function setMidocoBillingPosition(?\Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null): self
    {
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBillingPositionWithSellItem
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
}
