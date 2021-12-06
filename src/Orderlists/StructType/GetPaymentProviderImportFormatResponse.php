<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderImportFormatResponse StructType
 * @subpackage Structs
 */
class GetPaymentProviderImportFormatResponse extends AbstractStructBase
{
    /**
     * The format
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * Constructor method for GetPaymentProviderImportFormatResponse
     * @uses GetPaymentProviderImportFormatResponse::setFormat()
     * @param string $format
     */
    public function __construct(?string $format = null)
    {
        $this
            ->setFormat($format);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetPaymentProviderImportFormatResponse
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
}
