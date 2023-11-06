<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO $MidocoPaymentProviderImportFormat = null;
    /**
     * Constructor method for SavePaymentProviderImportFormatRequest
     * @uses SavePaymentProviderImportFormatRequest::setMidocoPaymentProviderImportFormat()
     * @param \Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null)
    {
        $this
            ->setMidocoPaymentProviderImportFormat($midocoPaymentProviderImportFormat);
    }
    /**
     * Get MidocoPaymentProviderImportFormat value
     * @return \Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO|null
     */
    public function getMidocoPaymentProviderImportFormat(): ?\Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO
    {
        return $this->MidocoPaymentProviderImportFormat;
    }
    /**
     * Set MidocoPaymentProviderImportFormat value
     * @param \Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     * @return \Pggns\MidocoApi\Orderlists\StructType\SavePaymentProviderImportFormatRequest
     */
    public function setMidocoPaymentProviderImportFormat(?\Pggns\MidocoApi\Orderlists\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null): self
    {
        $this->MidocoPaymentProviderImportFormat = $midocoPaymentProviderImportFormat;
        
        return $this;
    }
}
