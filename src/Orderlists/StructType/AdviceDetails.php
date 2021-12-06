<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdviceDetails StructType
 * @subpackage Structs
 */
class AdviceDetails extends AbstractStructBase
{
    /**
     * The MidocoAdviceSettlementDetail
     * Meta information extracted from the WSDL
     * - ref: MidocoAdviceSettlementDetail
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail $MidocoAdviceSettlementDetail = null;
    /**
     * The SellItemDetails4Printing
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing $SellItemDetails4Printing = null;
    /**
     * The MidocoOrder
     * @var \Pggns\MidocoApi\Orderlists\StructType\OrderDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\OrderDTO $MidocoOrder = null;
    /**
     * Constructor method for AdviceDetails
     * @uses AdviceDetails::setMidocoAdviceSettlementDetail()
     * @uses AdviceDetails::setSellItemDetails4Printing()
     * @uses AdviceDetails::setMidocoOrder()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing $sellItemDetails4Printing
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrderDTO $midocoOrder
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing $sellItemDetails4Printing = null, ?\Pggns\MidocoApi\Orderlists\StructType\OrderDTO $midocoOrder = null)
    {
        $this
            ->setMidocoAdviceSettlementDetail($midocoAdviceSettlementDetail)
            ->setSellItemDetails4Printing($sellItemDetails4Printing)
            ->setMidocoOrder($midocoOrder);
    }
    /**
     * Get MidocoAdviceSettlementDetail value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail|null
     */
    public function getMidocoAdviceSettlementDetail(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail
    {
        return $this->MidocoAdviceSettlementDetail;
    }
    /**
     * Set MidocoAdviceSettlementDetail value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail
     * @return \Pggns\MidocoApi\Orderlists\StructType\AdviceDetails
     */
    public function setMidocoAdviceSettlementDetail(?\Pggns\MidocoApi\Orderlists\StructType\MidocoAdviceSettlementDetail $midocoAdviceSettlementDetail = null): self
    {
        $this->MidocoAdviceSettlementDetail = $midocoAdviceSettlementDetail;
        
        return $this;
    }
    /**
     * Get SellItemDetails4Printing value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing|null
     */
    public function getSellItemDetails4Printing(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing
    {
        return $this->SellItemDetails4Printing;
    }
    /**
     * Set SellItemDetails4Printing value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing $sellItemDetails4Printing
     * @return \Pggns\MidocoApi\Orderlists\StructType\AdviceDetails
     */
    public function setSellItemDetails4Printing(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSellItemInfo4Printing $sellItemDetails4Printing = null): self
    {
        $this->SellItemDetails4Printing = $sellItemDetails4Printing;
        
        return $this;
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrderDTO|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Orderlists\StructType\OrderDTO
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrderDTO $midocoOrder
     * @return \Pggns\MidocoApi\Orderlists\StructType\AdviceDetails
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Orderlists\StructType\OrderDTO $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
}
