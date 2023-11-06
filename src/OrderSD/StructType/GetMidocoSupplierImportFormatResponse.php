<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierImportFormatResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierImportFormatResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyImportFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierAgencyImportFormat
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $MidocoSupplierAgencyImportFormat = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatResponse
     * @uses GetMidocoSupplierImportFormatResponse::setMidocoSupplierAgencyImportFormat()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null)
    {
        $this
            ->setMidocoSupplierAgencyImportFormat($midocoSupplierAgencyImportFormat);
    }
    /**
     * Get MidocoSupplierAgencyImportFormat value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO|null
     */
    public function getMidocoSupplierAgencyImportFormat(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO
    {
        return $this->MidocoSupplierAgencyImportFormat;
    }
    /**
     * Set MidocoSupplierAgencyImportFormat value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierImportFormatResponse
     */
    public function setMidocoSupplierAgencyImportFormat(?\Pggns\MidocoApi\OrderSD\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null): self
    {
        $this->MidocoSupplierAgencyImportFormat = $midocoSupplierAgencyImportFormat;
        
        return $this;
    }
}
