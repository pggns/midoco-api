<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO $MidocoSupplierReportFormat = null;
    /**
     * Constructor method for SaveMidocoSupplierReportFormatRequest
     * @uses SaveMidocoSupplierReportFormatRequest::setMidocoSupplierReportFormat()
     * @param \Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null)
    {
        $this
            ->setMidocoSupplierReportFormat($midocoSupplierReportFormat);
    }
    /**
     * Get MidocoSupplierReportFormat value
     * @return \Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO|null
     */
    public function getMidocoSupplierReportFormat(): ?\Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO
    {
        return $this->MidocoSupplierReportFormat;
    }
    /**
     * Set MidocoSupplierReportFormat value
     * @param \Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveMidocoSupplierReportFormatRequest
     */
    public function setMidocoSupplierReportFormat(?\Pggns\MidocoApi\CrmSD\StructType\SupplierReportFormatDTO $midocoSupplierReportFormat = null): self
    {
        $this->MidocoSupplierReportFormat = $midocoSupplierReportFormat;
        
        return $this;
    }
}
