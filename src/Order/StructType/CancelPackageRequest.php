<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPackageRequest StructType
 * @subpackage Structs
 */
class CancelPackageRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * Constructor method for CancelPackageRequest
     * @uses CancelPackageRequest::setMidocoSellItem()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null)
    {
        $this
            ->setMidocoSellItem($midocoSellItem);
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\CancelPackageRequest
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
}
