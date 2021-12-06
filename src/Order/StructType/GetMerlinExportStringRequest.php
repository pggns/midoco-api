<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMerlinExportStringRequest StructType
 * @subpackage Structs
 */
class GetMerlinExportStringRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelItem
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelItem
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $MidocoTravelItem = null;
    /**
     * Constructor method for GetMerlinExportStringRequest
     * @uses GetMerlinExportStringRequest::setMidocoTravelItem()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem = null)
    {
        $this
            ->setMidocoTravelItem($midocoTravelItem);
    }
    /**
     * Get MidocoTravelItem value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType|null
     */
    public function getMidocoTravelItem(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType
    {
        return $this->MidocoTravelItem;
    }
    /**
     * Set MidocoTravelItem value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMerlinExportStringRequest
     */
    public function setMidocoTravelItem(?\Pggns\MidocoApi\Api\Order\StructType\MidocoTravelItemType $midocoTravelItem = null): self
    {
        $this->MidocoTravelItem = $midocoTravelItem;
        
        return $this;
    }
}
