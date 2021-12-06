<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePaymentProviderImportFormatRequest StructType
 * @subpackage Structs
 */
class SavePaymentProviderImportFormatRequest extends AbstractStructBase
{
    /**
     * The format
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $format;
    /**
     * The paymentProviderId
     * @var string|null
     */
    protected ?string $paymentProviderId = null;
    /**
     * Constructor method for SavePaymentProviderImportFormatRequest
     * @uses SavePaymentProviderImportFormatRequest::setFormat()
     * @uses SavePaymentProviderImportFormatRequest::setPaymentProviderId()
     * @param string $format
     * @param string $paymentProviderId
     */
    public function __construct(string $format, ?string $paymentProviderId = null)
    {
        $this
            ->setFormat($format)
            ->setPaymentProviderId($paymentProviderId);
    }
    /**
     * Get format value
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Documents\StructType\SavePaymentProviderImportFormatRequest
     */
    public function setFormat(string $format): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get paymentProviderId value
     * @return string|null
     */
    public function getPaymentProviderId(): ?string
    {
        return $this->paymentProviderId;
    }
    /**
     * Set paymentProviderId value
     * @param string $paymentProviderId
     * @return \Pggns\MidocoApi\Documents\StructType\SavePaymentProviderImportFormatRequest
     */
    public function setPaymentProviderId(?string $paymentProviderId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentProviderId) && !is_string($paymentProviderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentProviderId, true), gettype($paymentProviderId)), __LINE__);
        }
        $this->paymentProviderId = $paymentProviderId;
        
        return $this;
    }
}
