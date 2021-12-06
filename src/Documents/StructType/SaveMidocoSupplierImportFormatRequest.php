<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSupplierImportFormatRequest StructType
 * @subpackage Structs
 */
class SaveMidocoSupplierImportFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierImportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierImportFormat
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO $MidocoSupplierImportFormat = null;
    /**
     * Constructor method for SaveMidocoSupplierImportFormatRequest
     * @uses SaveMidocoSupplierImportFormatRequest::setMidocoSupplierImportFormat()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null)
    {
        $this
            ->setMidocoSupplierImportFormat($midocoSupplierImportFormat);
    }
    /**
     * Get MidocoSupplierImportFormat value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO|null
     */
    public function getMidocoSupplierImportFormat(): ?\Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO
    {
        return $this->MidocoSupplierImportFormat;
    }
    /**
     * Set MidocoSupplierImportFormat value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoSupplierImportFormatRequest
     */
    public function setMidocoSupplierImportFormat(?\Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null): self
    {
        $this->MidocoSupplierImportFormat = $midocoSupplierImportFormat;
        
        return $this;
    }
}
