<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInvoiceType StructType
 * @subpackage Structs
 */
class MidocoInvoiceType extends AbstractStructBase
{
    /**
     * The MidocoInvoice
     * Meta information extracted from the WSDL
     * - ref: MidocoInvoice
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $MidocoInvoice = null;
    /**
     * Constructor method for MidocoInvoiceType
     * @uses MidocoInvoiceType::setMidocoInvoice()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $midocoInvoice
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $midocoInvoice = null)
    {
        $this
            ->setMidocoInvoice($midocoInvoice);
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoInvoiceType
     */
    public function setMidocoInvoice(?\Pggns\MidocoApi\Api\Order\StructType\MidocoInvoice $midocoInvoice = null): self
    {
        $this->MidocoInvoice = $midocoInvoice;
        
        return $this;
    }
}
