<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveIncomingInvoiceRequest StructType
 * @subpackage Structs
 */
class SaveIncomingInvoiceRequest extends AbstractStructBase
{
    /**
     * The MidocoIncomingInvoice
     * Meta information extracted from the WSDL
     * - ref: MidocoIncomingInvoice
     * @var \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO $MidocoIncomingInvoice = null;
    /**
     * Constructor method for SaveIncomingInvoiceRequest
     * @uses SaveIncomingInvoiceRequest::setMidocoIncomingInvoice()
     * @param \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice = null)
    {
        $this
            ->setMidocoIncomingInvoice($midocoIncomingInvoice);
    }
    /**
     * Get MidocoIncomingInvoice value
     * @return \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO|null
     */
    public function getMidocoIncomingInvoice(): ?\Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO
    {
        return $this->MidocoIncomingInvoice;
    }
    /**
     * Set MidocoIncomingInvoice value
     * @param \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveIncomingInvoiceRequest
     */
    public function setMidocoIncomingInvoice(?\Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice = null): self
    {
        $this->MidocoIncomingInvoice = $midocoIncomingInvoice;
        
        return $this;
    }
}
