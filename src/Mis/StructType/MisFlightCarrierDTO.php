<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisFlightCarrierDTO StructType
 * @subpackage Structs
 */
class MisFlightCarrierDTO extends AbstractStructBase
{
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MisFlightCarrierDTO
     * @uses MisFlightCarrierDTO::setCarrier()
     * @uses MisFlightCarrierDTO::setItemId()
     * @uses MisFlightCarrierDTO::setOrderId()
     * @uses MisFlightCarrierDTO::setPosition()
     * @uses MisFlightCarrierDTO::setTotalPrice()
     * @uses MisFlightCarrierDTO::setUnitName()
     * @param string $carrier
     * @param int $itemId
     * @param int $orderId
     * @param int $position
     * @param float $totalPrice
     * @param string $unitName
     */
    public function __construct(?string $carrier = null, ?int $itemId = null, ?int $orderId = null, ?int $position = null, ?float $totalPrice = null, ?string $unitName = null)
    {
        $this
            ->setCarrier($carrier)
            ->setItemId($itemId)
            ->setOrderId($orderId)
            ->setPosition($position)
            ->setTotalPrice($totalPrice)
            ->setUnitName($unitName);
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightCarrierDTO
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightCarrierDTO
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightCarrierDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightCarrierDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightCarrierDTO
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Mis\StructType\MisFlightCarrierDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
