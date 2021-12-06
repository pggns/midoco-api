<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTextForSellItemErrorRequest StructType
 * @subpackage Structs
 */
class GetTextForSellItemErrorRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemError
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemError
     * @var \Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO $MidocoSellItemError = null;
    /**
     * Constructor method for GetTextForSellItemErrorRequest
     * @uses GetTextForSellItemErrorRequest::setMidocoSellItemError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO $midocoSellItemError
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO $midocoSellItemError = null)
    {
        $this
            ->setMidocoSellItemError($midocoSellItemError);
    }
    /**
     * Get MidocoSellItemError value
     * @return \Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO|null
     */
    public function getMidocoSellItemError(): ?\Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO
    {
        return $this->MidocoSellItemError;
    }
    /**
     * Set MidocoSellItemError value
     * @param \Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO $midocoSellItemError
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTextForSellItemErrorRequest
     */
    public function setMidocoSellItemError(?\Pggns\MidocoApi\Api\Order\StructType\SellItemErrorDTO $midocoSellItemError = null): self
    {
        $this->MidocoSellItemError = $midocoSellItemError;
        
        return $this;
    }
}
