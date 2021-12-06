<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO $MidocoSupplierImportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatRequest
     * @uses GetMidocoSupplierImportFormatRequest::setMidocoSupplierImportFormat()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null)
    {
        $this
            ->setMidocoSupplierImportFormat($midocoSupplierImportFormat);
    }
    /**
     * Get MidocoSupplierImportFormat value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO|null
     */
    public function getMidocoSupplierImportFormat(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO
    {
        return $this->MidocoSupplierImportFormat;
    }
    /**
     * Set MidocoSupplierImportFormat value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoSupplierImportFormatRequest
     */
    public function setMidocoSupplierImportFormat(?\Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null): self
    {
        $this->MidocoSupplierImportFormat = $midocoSupplierImportFormat;
        
        return $this;
    }
}
