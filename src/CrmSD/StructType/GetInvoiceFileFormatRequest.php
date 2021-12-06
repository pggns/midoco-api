<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat $MidocoInvoiceFileFormat = null;
    /**
     * Constructor method for GetInvoiceFileFormatRequest
     * @uses GetInvoiceFileFormatRequest::setMidocoInvoiceFileFormat()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null)
    {
        $this
            ->setMidocoInvoiceFileFormat($midocoInvoiceFileFormat);
    }
    /**
     * Get MidocoInvoiceFileFormat value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat|null
     */
    public function getMidocoInvoiceFileFormat(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat
    {
        return $this->MidocoInvoiceFileFormat;
    }
    /**
     * Set MidocoInvoiceFileFormat value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetInvoiceFileFormatRequest
     */
    public function setMidocoInvoiceFileFormat(?\Pggns\MidocoApi\CrmSD\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null): self
    {
        $this->MidocoInvoiceFileFormat = $midocoInvoiceFileFormat;
        
        return $this;
    }
}
