<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePaymentProviderImportFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePaymentProviderImportFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderImportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProviderImportFormat
     * @var \Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO $MidocoPaymentProviderImportFormat = null;
    /**
     * Constructor method for SavePaymentProviderImportFormatRequest
     * @uses SavePaymentProviderImportFormatRequest::setMidocoPaymentProviderImportFormat()
     * @param \Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null)
    {
        $this
            ->setMidocoPaymentProviderImportFormat($midocoPaymentProviderImportFormat);
    }
    /**
     * Get MidocoPaymentProviderImportFormat value
     * @return \Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO|null
     */
    public function getMidocoPaymentProviderImportFormat(): ?\Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO
    {
        return $this->MidocoPaymentProviderImportFormat;
    }
    /**
     * Set MidocoPaymentProviderImportFormat value
     * @param \Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     * @return \Pggns\MidocoApi\OrderSD\StructType\SavePaymentProviderImportFormatRequest
     */
    public function setMidocoPaymentProviderImportFormat(?\Pggns\MidocoApi\OrderSD\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null): self
    {
        $this->MidocoPaymentProviderImportFormat = $midocoPaymentProviderImportFormat;
        
        return $this;
    }
}
