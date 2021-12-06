<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

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
     * @var \Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO $MidocoSupplierImportFormat = null;
    /**
     * Constructor method for SaveMidocoSupplierImportFormatRequest
     * @uses SaveMidocoSupplierImportFormatRequest::setMidocoSupplierImportFormat()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null)
    {
        $this
            ->setMidocoSupplierImportFormat($midocoSupplierImportFormat);
    }
    /**
     * Get MidocoSupplierImportFormat value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO|null
     */
    public function getMidocoSupplierImportFormat(): ?\Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO
    {
        return $this->MidocoSupplierImportFormat;
    }
    /**
     * Set MidocoSupplierImportFormat value
     * @param \Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoSupplierImportFormatRequest
     */
    public function setMidocoSupplierImportFormat(?\Pggns\MidocoApi\Order\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null): self
    {
        $this->MidocoSupplierImportFormat = $midocoSupplierImportFormat;
        
        return $this;
    }
}
