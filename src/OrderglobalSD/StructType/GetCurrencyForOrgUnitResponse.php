<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyForOrgUnitResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCurrencyForOrgUnit --- returns the currency for the given org unit name
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCurrencyForOrgUnitResponse extends AbstractStructBase
{
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for GetCurrencyForOrgUnitResponse
     * @uses GetCurrencyForOrgUnitResponse::setCurrency()
     * @param string $currency
     */
    public function __construct(?string $currency = null)
    {
        $this
            ->setCurrency($currency);
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetCurrencyForOrgUnitResponse
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
}
