<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOpenErListSumsType StructType
 * @subpackage Structs
 */
class MidocoOpenErListSumsType extends AbstractStructBase
{
    /**
     * The filiale
     * @var string|null
     */
    protected ?string $filiale = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for MidocoOpenErListSumsType
     * @uses MidocoOpenErListSumsType::setFiliale()
     * @uses MidocoOpenErListSumsType::setAmount()
     * @param string $filiale
     * @param float $amount
     */
    public function __construct(?string $filiale = null, ?float $amount = null)
    {
        $this
            ->setFiliale($filiale)
            ->setAmount($amount);
    }
    /**
     * Get filiale value
     * @return string|null
     */
    public function getFiliale(): ?string
    {
        return $this->filiale;
    }
    /**
     * Set filiale value
     * @param string $filiale
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType
     */
    public function setFiliale(?string $filiale = null): self
    {
        // validation for constraint: string
        if (!is_null($filiale) && !is_string($filiale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filiale, true), gettype($filiale)), __LINE__);
        }
        $this->filiale = $filiale;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
