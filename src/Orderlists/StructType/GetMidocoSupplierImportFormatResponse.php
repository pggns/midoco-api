<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierImportFormatResponse StructType
 * @subpackage Structs
 */
class GetMidocoSupplierImportFormatResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierImportFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierImportFormat
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO $MidocoSupplierImportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatResponse
     * @uses GetMidocoSupplierImportFormatResponse::setMidocoSupplierImportFormat()
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoSupplierImportFormatResponse
     */
    public function setMidocoSupplierImportFormat(?\Pggns\MidocoApi\Orderlists\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null): self
    {
        $this->MidocoSupplierImportFormat = $midocoSupplierImportFormat;
        
        return $this;
    }
}
