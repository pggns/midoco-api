<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyRateType StructType
 * @subpackage Structs
 */
class CurrencyRateType extends AbstractStructBase
{
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The rateIntoEUR
     * @var float|null
     */
    protected ?float $rateIntoEUR = null;
    /**
     * The rateFromEUR
     * @var float|null
     */
    protected ?float $rateFromEUR = null;
    /**
     * Constructor method for CurrencyRateType
     * @uses CurrencyRateType::setCurrency()
     * @uses CurrencyRateType::setRateIntoEUR()
     * @uses CurrencyRateType::setRateFromEUR()
     * @param string $currency
     * @param float $rateIntoEUR
     * @param float $rateFromEUR
     */
    public function __construct(?string $currency = null, ?float $rateIntoEUR = null, ?float $rateFromEUR = null)
    {
        $this
            ->setCurrency($currency)
            ->setRateIntoEUR($rateIntoEUR)
            ->setRateFromEUR($rateFromEUR);
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType
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
     * Get rateIntoEUR value
     * @return float|null
     */
    public function getRateIntoEUR(): ?float
    {
        return $this->rateIntoEUR;
    }
    /**
     * Set rateIntoEUR value
     * @param float $rateIntoEUR
     * @return \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType
     */
    public function setRateIntoEUR(?float $rateIntoEUR = null): self
    {
        // validation for constraint: float
        if (!is_null($rateIntoEUR) && !(is_float($rateIntoEUR) || is_numeric($rateIntoEUR))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateIntoEUR, true), gettype($rateIntoEUR)), __LINE__);
        }
        $this->rateIntoEUR = $rateIntoEUR;
        
        return $this;
    }
    /**
     * Get rateFromEUR value
     * @return float|null
     */
    public function getRateFromEUR(): ?float
    {
        return $this->rateFromEUR;
    }
    /**
     * Set rateFromEUR value
     * @param float $rateFromEUR
     * @return \Pggns\MidocoApi\Orderlists\StructType\CurrencyRateType
     */
    public function setRateFromEUR(?float $rateFromEUR = null): self
    {
        // validation for constraint: float
        if (!is_null($rateFromEUR) && !(is_float($rateFromEUR) || is_numeric($rateFromEUR))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateFromEUR, true), gettype($rateFromEUR)), __LINE__);
        }
        $this->rateFromEUR = $rateFromEUR;
        
        return $this;
    }
}
