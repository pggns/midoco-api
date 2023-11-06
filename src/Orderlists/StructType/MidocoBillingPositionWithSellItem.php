<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingPositionWithSellItem StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingPositionWithSellItem extends AbstractStructBase
{
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType $MidocoBillingPosition = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * Constructor method for MidocoBillingPositionWithSellItem
     * @uses MidocoBillingPositionWithSellItem::setMidocoBillingPosition()
     * @uses MidocoBillingPositionWithSellItem::setMidocoSellItem()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType $midocoSellItem
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType $midocoBillingPosition = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType $midocoSellItem = null)
    {
        $this
            ->setMidocoBillingPosition($midocoBillingPosition)
            ->setMidocoSellItem($midocoSellItem);
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType|null
     */
    public function getMidocoBillingPosition(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * Set MidocoBillingPosition value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionWithSellItem
     */
    public function setMidocoBillingPosition(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionType $midocoBillingPosition = null): self
    {
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType|null
     */
    public function getMidocoSellItem(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType
    {
        return $this->MidocoSellItem;
    }
    /**
     * Set MidocoSellItem value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType $midocoSellItem
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingPositionWithSellItem
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
}
