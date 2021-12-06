<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryFinancialDTO StructType
 * @subpackage Structs
 */
class CountryFinancialDTO extends AbstractStructBase
{
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The euSince
     * @var string|null
     */
    protected ?string $euSince = null;
    /**
     * The euUntil
     * @var string|null
     */
    protected ?string $euUntil = null;
    /**
     * The isEea
     * @var bool|null
     */
    protected ?bool $isEea = null;
    /**
     * The isEu
     * @var bool|null
     */
    protected ?bool $isEu = null;
    /**
     * Constructor method for CountryFinancialDTO
     * @uses CountryFinancialDTO::setCountryCode()
     * @uses CountryFinancialDTO::setCurrency()
     * @uses CountryFinancialDTO::setEuSince()
     * @uses CountryFinancialDTO::setEuUntil()
     * @uses CountryFinancialDTO::setIsEea()
     * @uses CountryFinancialDTO::setIsEu()
     * @param string $countryCode
     * @param string $currency
     * @param string $euSince
     * @param string $euUntil
     * @param bool $isEea
     * @param bool $isEu
     */
    public function __construct(?string $countryCode = null, ?string $currency = null, ?string $euSince = null, ?string $euUntil = null, ?bool $isEea = null, ?bool $isEu = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setCurrency($currency)
            ->setEuSince($euSince)
            ->setEuUntil($euUntil)
            ->setIsEea($isEea)
            ->setIsEu($isEu);
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Documents\StructType\CountryFinancialDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Documents\StructType\CountryFinancialDTO
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
    /**
     * Get euSince value
     * @return string|null
     */
    public function getEuSince(): ?string
    {
        return $this->euSince;
    }
    /**
     * Set euSince value
     * @param string $euSince
     * @return \Pggns\MidocoApi\Documents\StructType\CountryFinancialDTO
     */
    public function setEuSince(?string $euSince = null): self
    {
        // validation for constraint: string
        if (!is_null($euSince) && !is_string($euSince)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($euSince, true), gettype($euSince)), __LINE__);
        }
        $this->euSince = $euSince;
        
        return $this;
    }
    /**
     * Get euUntil value
     * @return string|null
     */
    public function getEuUntil(): ?string
    {
        return $this->euUntil;
    }
    /**
     * Set euUntil value
     * @param string $euUntil
     * @return \Pggns\MidocoApi\Documents\StructType\CountryFinancialDTO
     */
    public function setEuUntil(?string $euUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($euUntil) && !is_string($euUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($euUntil, true), gettype($euUntil)), __LINE__);
        }
        $this->euUntil = $euUntil;
        
        return $this;
    }
    /**
     * Get isEea value
     * @return bool|null
     */
    public function getIsEea(): ?bool
    {
        return $this->isEea;
    }
    /**
     * Set isEea value
     * @param bool $isEea
     * @return \Pggns\MidocoApi\Documents\StructType\CountryFinancialDTO
     */
    public function setIsEea(?bool $isEea = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEea) && !is_bool($isEea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEea, true), gettype($isEea)), __LINE__);
        }
        $this->isEea = $isEea;
        
        return $this;
    }
    /**
     * Get isEu value
     * @return bool|null
     */
    public function getIsEu(): ?bool
    {
        return $this->isEu;
    }
    /**
     * Set isEu value
     * @param bool $isEu
     * @return \Pggns\MidocoApi\Documents\StructType\CountryFinancialDTO
     */
    public function setIsEu(?bool $isEu = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEu) && !is_bool($isEu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEu, true), gettype($isEu)), __LINE__);
        }
        $this->isEu = $isEu;
        
        return $this;
    }
}
