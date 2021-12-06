<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemMarginDTO StructType
 * @subpackage Structs
 */
class SellItemMarginDTO extends AbstractStructBase
{
    /**
     * The costNet
     * @var float|null
     */
    protected ?float $costNet = null;
    /**
     * The feeNet
     * @var float|null
     */
    protected ?float $feeNet = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The marginNet
     * @var float|null
     */
    protected ?float $marginNet = null;
    /**
     * The salePriceNet
     * @var float|null
     */
    protected ?float $salePriceNet = null;
    /**
     * The settlementDone
     * @var bool|null
     */
    protected ?bool $settlementDone = null;
    /**
     * The updatedAt
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * Constructor method for SellItemMarginDTO
     * @uses SellItemMarginDTO::setCostNet()
     * @uses SellItemMarginDTO::setFeeNet()
     * @uses SellItemMarginDTO::setItemId()
     * @uses SellItemMarginDTO::setMarginNet()
     * @uses SellItemMarginDTO::setSalePriceNet()
     * @uses SellItemMarginDTO::setSettlementDone()
     * @uses SellItemMarginDTO::setUpdatedAt()
     * @param float $costNet
     * @param float $feeNet
     * @param int $itemId
     * @param float $marginNet
     * @param float $salePriceNet
     * @param bool $settlementDone
     * @param string $updatedAt
     */
    public function __construct(?float $costNet = null, ?float $feeNet = null, ?int $itemId = null, ?float $marginNet = null, ?float $salePriceNet = null, ?bool $settlementDone = null, ?string $updatedAt = null)
    {
        $this
            ->setCostNet($costNet)
            ->setFeeNet($feeNet)
            ->setItemId($itemId)
            ->setMarginNet($marginNet)
            ->setSalePriceNet($salePriceNet)
            ->setSettlementDone($settlementDone)
            ->setUpdatedAt($updatedAt);
    }
    /**
     * Get costNet value
     * @return float|null
     */
    public function getCostNet(): ?float
    {
        return $this->costNet;
    }
    /**
     * Set costNet value
     * @param float $costNet
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SellItemMarginDTO
     */
    public function setCostNet(?float $costNet = null): self
    {
        // validation for constraint: float
        if (!is_null($costNet) && !(is_float($costNet) || is_numeric($costNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($costNet, true), gettype($costNet)), __LINE__);
        }
        $this->costNet = $costNet;
        
        return $this;
    }
    /**
     * Get feeNet value
     * @return float|null
     */
    public function getFeeNet(): ?float
    {
        return $this->feeNet;
    }
    /**
     * Set feeNet value
     * @param float $feeNet
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SellItemMarginDTO
     */
    public function setFeeNet(?float $feeNet = null): self
    {
        // validation for constraint: float
        if (!is_null($feeNet) && !(is_float($feeNet) || is_numeric($feeNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeNet, true), gettype($feeNet)), __LINE__);
        }
        $this->feeNet = $feeNet;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SellItemMarginDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get marginNet value
     * @return float|null
     */
    public function getMarginNet(): ?float
    {
        return $this->marginNet;
    }
    /**
     * Set marginNet value
     * @param float $marginNet
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SellItemMarginDTO
     */
    public function setMarginNet(?float $marginNet = null): self
    {
        // validation for constraint: float
        if (!is_null($marginNet) && !(is_float($marginNet) || is_numeric($marginNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginNet, true), gettype($marginNet)), __LINE__);
        }
        $this->marginNet = $marginNet;
        
        return $this;
    }
    /**
     * Get salePriceNet value
     * @return float|null
     */
    public function getSalePriceNet(): ?float
    {
        return $this->salePriceNet;
    }
    /**
     * Set salePriceNet value
     * @param float $salePriceNet
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SellItemMarginDTO
     */
    public function setSalePriceNet(?float $salePriceNet = null): self
    {
        // validation for constraint: float
        if (!is_null($salePriceNet) && !(is_float($salePriceNet) || is_numeric($salePriceNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePriceNet, true), gettype($salePriceNet)), __LINE__);
        }
        $this->salePriceNet = $salePriceNet;
        
        return $this;
    }
    /**
     * Get settlementDone value
     * @return bool|null
     */
    public function getSettlementDone(): ?bool
    {
        return $this->settlementDone;
    }
    /**
     * Set settlementDone value
     * @param bool $settlementDone
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SellItemMarginDTO
     */
    public function setSettlementDone(?bool $settlementDone = null): self
    {
        // validation for constraint: boolean
        if (!is_null($settlementDone) && !is_bool($settlementDone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($settlementDone, true), gettype($settlementDone)), __LINE__);
        }
        $this->settlementDone = $settlementDone;
        
        return $this;
    }
    /**
     * Get updatedAt value
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Set updatedAt value
     * @param string $updatedAt
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SellItemMarginDTO
     */
    public function setUpdatedAt(?string $updatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAt) && !is_string($updatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        $this->updatedAt = $updatedAt;
        
        return $this;
    }
}
