<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderCrossSellHideInfoResponse StructType
 * @subpackage Structs
 */
class SaveOrderCrossSellHideInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderCrossSell
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderCrossSell
     * @var \Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO $MidocoOrderCrossSell = null;
    /**
     * Constructor method for SaveOrderCrossSellHideInfoResponse
     * @uses SaveOrderCrossSellHideInfoResponse::setMidocoOrderCrossSell()
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO $midocoOrderCrossSell
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO $midocoOrderCrossSell = null)
    {
        $this
            ->setMidocoOrderCrossSell($midocoOrderCrossSell);
    }
    /**
     * Get MidocoOrderCrossSell value
     * @return \Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO|null
     */
    public function getMidocoOrderCrossSell(): ?\Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO
    {
        return $this->MidocoOrderCrossSell;
    }
    /**
     * Set MidocoOrderCrossSell value
     * @param \Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO $midocoOrderCrossSell
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderCrossSellHideInfoResponse
     */
    public function setMidocoOrderCrossSell(?\Pggns\MidocoApi\Api\Order\StructType\OrderCrossSellDTO $midocoOrderCrossSell = null): self
    {
        $this->MidocoOrderCrossSell = $midocoOrderCrossSell;
        
        return $this;
    }
}
