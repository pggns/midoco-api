<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierImportFormatRequest StructType
 * @subpackage Structs
 */
class GetMidocoSupplierImportFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierImportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierImportFormat
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO $MidocoSupplierImportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatRequest
     * @uses GetMidocoSupplierImportFormatRequest::setMidocoSupplierImportFormat()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null)
    {
        $this
            ->setMidocoSupplierImportFormat($midocoSupplierImportFormat);
    }
    /**
     * Get MidocoSupplierImportFormat value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO|null
     */
    public function getMidocoSupplierImportFormat(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO
    {
        return $this->MidocoSupplierImportFormat;
    }
    /**
     * Set MidocoSupplierImportFormat value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatRequest
     */
    public function setMidocoSupplierImportFormat(?\Pggns\MidocoApi\OrderSD\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null): self
    {
        $this->MidocoSupplierImportFormat = $midocoSupplierImportFormat;
        
        return $this;
    }
}
