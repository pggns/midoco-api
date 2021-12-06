<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInvoiceFileFormatRequest StructType
 * @subpackage Structs
 */
class GetInvoiceFileFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoInvoiceFileFormat
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat $MidocoInvoiceFileFormat = null;
    /**
     * Constructor method for GetInvoiceFileFormatRequest
     * @uses GetInvoiceFileFormatRequest::setMidocoInvoiceFileFormat()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null)
    {
        $this
            ->setMidocoInvoiceFileFormat($midocoInvoiceFileFormat);
    }
    /**
     * Get MidocoInvoiceFileFormat value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat|null
     */
    public function getMidocoInvoiceFileFormat(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat
    {
        return $this->MidocoInvoiceFileFormat;
    }
    /**
     * Set MidocoInvoiceFileFormat value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetInvoiceFileFormatRequest
     */
    public function setMidocoInvoiceFileFormat(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null): self
    {
        $this->MidocoInvoiceFileFormat = $midocoInvoiceFileFormat;
        
        return $this;
    }
}
