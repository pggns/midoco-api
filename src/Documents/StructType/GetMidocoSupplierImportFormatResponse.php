<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO $MidocoSupplierImportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatResponse
     * @uses GetMidocoSupplierImportFormatResponse::setMidocoSupplierImportFormat()
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetMidocoSupplierImportFormatResponse
     */
    public function setMidocoSupplierImportFormat(?\Pggns\MidocoApi\Documents\StructType\SupplierImportFormatDTO $midocoSupplierImportFormat = null): self
    {
        $this->MidocoSupplierImportFormat = $midocoSupplierImportFormat;
        
        return $this;
    }
}
