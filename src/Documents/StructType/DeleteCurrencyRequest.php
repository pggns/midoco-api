<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCurrencyRequest StructType
 * @subpackage Structs
 */
class DeleteCurrencyRequest extends AbstractStructBase
{
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $currency;
    /**
     * Constructor method for DeleteCurrencyRequest
     * @uses DeleteCurrencyRequest::setCurrency()
     * @param string $currency
     */
    public function __construct(string $currency)
    {
        $this
            ->setCurrency($currency);
    }
    /**
     * Get currency value
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteCurrencyRequest
     */
    public function setCurrency(string $currency): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
}
