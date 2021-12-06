<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSupplierReportFormatRequest StructType
 * @subpackage Structs
 */
class SaveMidocoSupplierReportFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierReportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierReportFormat
     * @var \Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO $MidocoSupplierReportFormat = null;
    /**
     * Constructor method for SaveMidocoSupplierReportFormatRequest
     * @uses SaveMidocoSupplierReportFormatRequest::setMidocoSupplierReportFormat()
     * @param \Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null)
    {
        $this
            ->setMidocoSupplierReportFormat($midocoSupplierReportFormat);
    }
    /**
     * Get MidocoSupplierReportFormat value
     * @return \Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO|null
     */
    public function getMidocoSupplierReportFormat(): ?\Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO
    {
        return $this->MidocoSupplierReportFormat;
    }
    /**
     * Set MidocoSupplierReportFormat value
     * @param \Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoSupplierReportFormatRequest
     */
    public function setMidocoSupplierReportFormat(?\Pggns\MidocoApi\Crm\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null): self
    {
        $this->MidocoSupplierReportFormat = $midocoSupplierReportFormat;
        
        return $this;
    }
}
