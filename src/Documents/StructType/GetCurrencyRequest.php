<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCurrencyRequest extends AbstractStructBase
{
    /**
     * The currencyCode
     * @var string|null
     */
    protected ?string $currencyCode = null;
    /**
     * Constructor method for GetCurrencyRequest
     * @uses GetCurrencyRequest::setCurrencyCode()
     * @param string $currencyCode
     */
    public function __construct(?string $currencyCode = null)
    {
        $this
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get currencyCode value
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \Pggns\MidocoApi\Documents\StructType\GetCurrencyRequest
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        
        return $this;
    }
}
