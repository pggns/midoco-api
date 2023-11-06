<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierImportFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierImportFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyImportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencyImportFormat
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO $MidocoSupplierAgencyImportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatRequest
     * @uses GetMidocoSupplierImportFormatRequest::setMidocoSupplierAgencyImportFormat()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null)
    {
        $this
            ->setMidocoSupplierAgencyImportFormat($midocoSupplierAgencyImportFormat);
    }
    /**
     * Get MidocoSupplierAgencyImportFormat value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO|null
     */
    public function getMidocoSupplierAgencyImportFormat(): ?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO
    {
        return $this->MidocoSupplierAgencyImportFormat;
    }
    /**
     * Set MidocoSupplierAgencyImportFormat value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     * @return \Pggns\MidocoApi\Documents\StructType\GetMidocoSupplierImportFormatRequest
     */
    public function setMidocoSupplierAgencyImportFormat(?\Pggns\MidocoApi\Documents\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null): self
    {
        $this->MidocoSupplierAgencyImportFormat = $midocoSupplierAgencyImportFormat;
        
        return $this;
    }
}
