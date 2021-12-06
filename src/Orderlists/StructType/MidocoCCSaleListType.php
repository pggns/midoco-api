<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCCSaleListType StructType
 * @subpackage Structs
 */
class MidocoCCSaleListType extends AbstractStructBase
{
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The captureDate
     * @var string|null
     */
    protected ?string $captureDate = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for MidocoCCSaleListType
     * @uses MidocoCCSaleListType::setCardType()
     * @uses MidocoCCSaleListType::setCaptureDate()
     * @uses MidocoCCSaleListType::setAmount()
     * @param string $cardType
     * @param string $captureDate
     * @param float $amount
     */
    public function __construct(?string $cardType = null, ?string $captureDate = null, ?float $amount = null)
    {
        $this
            ->setCardType($cardType)
            ->setCaptureDate($captureDate)
            ->setAmount($amount);
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListType
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get captureDate value
     * @return string|null
     */
    public function getCaptureDate(): ?string
    {
        return $this->captureDate;
    }
    /**
     * Set captureDate value
     * @param string $captureDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListType
     */
    public function setCaptureDate(?string $captureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($captureDate) && !is_string($captureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($captureDate, true), gettype($captureDate)), __LINE__);
        }
        $this->captureDate = $captureDate;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListType
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
