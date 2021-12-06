<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellItemVatDivisionRequest StructType
 * @subpackage Structs
 */
class DeleteSellItemVatDivisionRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision $MidocoSellItemVatDivision = null;
    /**
     * Constructor method for DeleteSellItemVatDivisionRequest
     * @uses DeleteSellItemVatDivisionRequest::setMidocoSellItemVatDivision()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision = null)
    {
        $this
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision);
    }
    /**
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision|null
     */
    public function getMidocoSellItemVatDivision(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteSellItemVatDivisionRequest
     */
    public function setMidocoSellItemVatDivision(?\Pggns\MidocoApi\Api\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision = null): self
    {
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
}
