<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentProviderImportFormatDTO StructType
 * @subpackage Structs
 */
class PaymentProviderImportFormatDTO extends AbstractStructBase
{
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The paymentProviderId
     * @var string|null
     */
    protected ?string $paymentProviderId = null;
    /**
     * Constructor method for PaymentProviderImportFormatDTO
     * @uses PaymentProviderImportFormatDTO::setFormat()
     * @uses PaymentProviderImportFormatDTO::setPaymentProviderId()
     * @param string $format
     * @param string $paymentProviderId
     */
    public function __construct(?string $format = null, ?string $paymentProviderId = null)
    {
        $this
            ->setFormat($format)
            ->setPaymentProviderId($paymentProviderId);
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\PaymentProviderImportFormatDTO
     */
    public function setFormat(?string $format = null): self
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\PaymentProviderImportFormatDTO
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
