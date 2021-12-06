<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeOrderDiffInvoiceResponse StructType
 * @subpackage Structs
 */
class MakeOrderDiffInvoiceResponse extends AbstractStructBase
{
    /**
     * The MidocoInvoice
     * Meta information extracted from the WSDL
     * - ref: MidocoInvoice
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $MidocoInvoice = null;
    /**
     * The VoidInvoice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType $VoidInvoice = null;
    /**
     * Constructor method for MakeOrderDiffInvoiceResponse
     * @uses MakeOrderDiffInvoiceResponse::setMidocoInvoice()
     * @uses MakeOrderDiffInvoiceResponse::setVoidInvoice()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $midocoInvoice
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType $voidInvoice
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $midocoInvoice = null, ?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType $voidInvoice = null)
    {
        $this
            ->setMidocoInvoice($midocoInvoice)
            ->setVoidInvoice($voidInvoice);
    }
    /**
     * Get MidocoInvoice value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice|null
     */
    public function getMidocoInvoice(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice
    {
        return $this->MidocoInvoice;
    }
    /**
     * Set MidocoInvoice value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $midocoInvoice
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakeOrderDiffInvoiceResponse
     */
    public function setMidocoInvoice(?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $midocoInvoice = null): self
    {
        $this->MidocoInvoice = $midocoInvoice;
        
        return $this;
    }
    /**
     * Get VoidInvoice value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType|null
     */
    public function getVoidInvoice(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType
    {
        return $this->VoidInvoice;
    }
    /**
     * Set VoidInvoice value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType $voidInvoice
     * @return \Pggns\MidocoApi\Api\Order\StructType\MakeOrderDiffInvoiceResponse
     */
    public function setVoidInvoice(?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType $voidInvoice = null): self
    {
        $this->VoidInvoice = $voidInvoice;
        
        return $this;
    }
}
