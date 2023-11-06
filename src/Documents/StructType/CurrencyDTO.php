<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CurrencyDTO extends AbstractStructBase
{
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The isoCode
     * @var string|null
     */
    protected ?string $isoCode = null;
    /**
     * Constructor method for CurrencyDTO
     * @uses CurrencyDTO::setCurrency()
     * @uses CurrencyDTO::setDescription()
     * @uses CurrencyDTO::setIsoCode()
     * @param string $currency
     * @param string $description
     * @param string $isoCode
     */
    public function __construct(?string $currency = null, ?string $description = null, ?string $isoCode = null)
    {
        $this
            ->setCurrency($currency)
            ->setDescription($description)
            ->setIsoCode($isoCode);
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
     * @return \Pggns\MidocoApi\Documents\StructType\CurrencyDTO
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Documents\StructType\CurrencyDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get isoCode value
     * @return string|null
     */
    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }
    /**
     * Set isoCode value
     * @param string $isoCode
     * @return \Pggns\MidocoApi\Documents\StructType\CurrencyDTO
     */
    public function setIsoCode(?string $isoCode = null): self
    {
        // validation for constraint: string
        if (!is_null($isoCode) && !is_string($isoCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isoCode, true), gettype($isoCode)), __LINE__);
        }
        $this->isoCode = $isoCode;
        
        return $this;
    }
}
