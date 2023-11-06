<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveInvoiceFileFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveInvoiceFileFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoInvoiceFileFormat
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat $MidocoInvoiceFileFormat = null;
    /**
     * The MidocoInvoiceFileFormatContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoInvoiceFileFormatContent
     * @var \Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO $MidocoInvoiceFileFormatContent = null;
    /**
     * Constructor method for SaveInvoiceFileFormatRequest
     * @uses SaveInvoiceFileFormatRequest::setMidocoInvoiceFileFormat()
     * @uses SaveInvoiceFileFormatRequest::setMidocoInvoiceFileFormatContent()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     * @param \Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null, ?\Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent = null)
    {
        $this
            ->setMidocoInvoiceFileFormat($midocoInvoiceFileFormat)
            ->setMidocoInvoiceFileFormatContent($midocoInvoiceFileFormatContent);
    }
    /**
     * Get MidocoInvoiceFileFormat value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat|null
     */
    public function getMidocoInvoiceFileFormat(): ?\Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat
    {
        return $this->MidocoInvoiceFileFormat;
    }
    /**
     * Set MidocoInvoiceFileFormat value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat
     * @return \Pggns\MidocoApi\Crm\StructType\SaveInvoiceFileFormatRequest
     */
    public function setMidocoInvoiceFileFormat(?\Pggns\MidocoApi\Crm\StructType\MidocoInvoiceFileFormat $midocoInvoiceFileFormat = null): self
    {
        $this->MidocoInvoiceFileFormat = $midocoInvoiceFileFormat;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceFileFormatContent value
     * @return \Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO|null
     */
    public function getMidocoInvoiceFileFormatContent(): ?\Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO
    {
        return $this->MidocoInvoiceFileFormatContent;
    }
    /**
     * Set MidocoInvoiceFileFormatContent value
     * @param \Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent
     * @return \Pggns\MidocoApi\Crm\StructType\SaveInvoiceFileFormatRequest
     */
    public function setMidocoInvoiceFileFormatContent(?\Pggns\MidocoApi\Crm\StructType\InvoiceFileFormatContentDTO $midocoInvoiceFileFormatContent = null): self
    {
        $this->MidocoInvoiceFileFormatContent = $midocoInvoiceFileFormatContent;
        
        return $this;
    }
}
