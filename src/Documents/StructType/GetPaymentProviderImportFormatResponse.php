<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderImportFormatResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentProviderImportFormatResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderImportFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPaymentProviderImportFormat
     * @var \Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO $MidocoPaymentProviderImportFormat = null;
    /**
     * Constructor method for GetPaymentProviderImportFormatResponse
     * @uses GetPaymentProviderImportFormatResponse::setMidocoPaymentProviderImportFormat()
     * @param \Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null)
    {
        $this
            ->setMidocoPaymentProviderImportFormat($midocoPaymentProviderImportFormat);
    }
    /**
     * Get MidocoPaymentProviderImportFormat value
     * @return \Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO|null
     */
    public function getMidocoPaymentProviderImportFormat(): ?\Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO
    {
        return $this->MidocoPaymentProviderImportFormat;
    }
    /**
     * Set MidocoPaymentProviderImportFormat value
     * @param \Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     * @return \Pggns\MidocoApi\Documents\StructType\GetPaymentProviderImportFormatResponse
     */
    public function setMidocoPaymentProviderImportFormat(?\Pggns\MidocoApi\Documents\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null): self
    {
        $this->MidocoPaymentProviderImportFormat = $midocoPaymentProviderImportFormat;
        
        return $this;
    }
}
