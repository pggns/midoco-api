<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderVoucherRequest StructType
 * @subpackage Structs
 */
class SaveOrderVoucherRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderVoucher
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderVoucher
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher $MidocoOrderVoucher = null;
    /**
     * Constructor method for SaveOrderVoucherRequest
     * @uses SaveOrderVoucherRequest::setMidocoOrderVoucher()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher = null)
    {
        $this
            ->setMidocoOrderVoucher($midocoOrderVoucher);
    }
    /**
     * Get MidocoOrderVoucher value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher|null
     */
    public function getMidocoOrderVoucher(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher
    {
        return $this->MidocoOrderVoucher;
    }
    /**
     * Set MidocoOrderVoucher value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderVoucherRequest
     */
    public function setMidocoOrderVoucher(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher = null): self
    {
        $this->MidocoOrderVoucher = $midocoOrderVoucher;
        
        return $this;
    }
}
