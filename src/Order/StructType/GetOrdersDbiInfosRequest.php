<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersDbiInfosRequest StructType
 * @subpackage Structs
 */
class GetOrdersDbiInfosRequest extends AbstractStructBase
{
    /**
     * The dbiInfoType
     * @var string|null
     */
    protected ?string $dbiInfoType = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * The dbiKey
     * @var string|null
     */
    protected ?string $dbiKey = null;
    /**
     * The dbiArea
     * @var string|null
     */
    protected ?string $dbiArea = null;
    /**
     * Constructor method for GetOrdersDbiInfosRequest
     * @uses GetOrdersDbiInfosRequest::setDbiInfoType()
     * @uses GetOrdersDbiInfosRequest::setOrderId()
     * @uses GetOrdersDbiInfosRequest::setItemId()
     * @uses GetOrdersDbiInfosRequest::setPassengerAssignment()
     * @uses GetOrdersDbiInfosRequest::setDbiKey()
     * @uses GetOrdersDbiInfosRequest::setDbiArea()
     * @param string $dbiInfoType
     * @param int $orderId
     * @param int $itemId
     * @param int $passengerAssignment
     * @param string $dbiKey
     * @param string $dbiArea
     */
    public function __construct(?string $dbiInfoType = null, ?int $orderId = null, ?int $itemId = null, ?int $passengerAssignment = null, ?string $dbiKey = null, ?string $dbiArea = null)
    {
        $this
            ->setDbiInfoType($dbiInfoType)
            ->setOrderId($orderId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setDbiKey($dbiKey)
            ->setDbiArea($dbiArea);
    }
    /**
     * Get dbiInfoType value
     * @return string|null
     */
    public function getDbiInfoType(): ?string
    {
        return $this->dbiInfoType;
    }
    /**
     * Set dbiInfoType value
     * @param string $dbiInfoType
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setDbiInfoType(?string $dbiInfoType = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfoType) && !is_string($dbiInfoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfoType, true), gettype($dbiInfoType)), __LINE__);
        }
        $this->dbiInfoType = $dbiInfoType;
        
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest
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
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get dbiKey value
     * @return string|null
     */
    public function getDbiKey(): ?string
    {
        return $this->dbiKey;
    }
    /**
     * Set dbiKey value
     * @param string $dbiKey
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setDbiKey(?string $dbiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiKey) && !is_string($dbiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiKey, true), gettype($dbiKey)), __LINE__);
        }
        $this->dbiKey = $dbiKey;
        
        return $this;
    }
    /**
     * Get dbiArea value
     * @return string|null
     */
    public function getDbiArea(): ?string
    {
        return $this->dbiArea;
    }
    /**
     * Set dbiArea value
     * @param string $dbiArea
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setDbiArea(?string $dbiArea = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiArea) && !is_string($dbiArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiArea, true), gettype($dbiArea)), __LINE__);
        }
        $this->dbiArea = $dbiArea;
        
        return $this;
    }
}
