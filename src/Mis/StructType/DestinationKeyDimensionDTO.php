<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationKeyDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinationKeyDimensionDTO extends AbstractStructBase
{
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The destinationKeyDescription
     * @var string|null
     */
    protected ?string $destinationKeyDescription = null;
    /**
     * The destinationKeyId
     * @var int|null
     */
    protected ?int $destinationKeyId = null;
    /**
     * The destinationKeyLocDescr
     * @var string|null
     */
    protected ?string $destinationKeyLocDescr = null;
    /**
     * Constructor method for DestinationKeyDimensionDTO
     * @uses DestinationKeyDimensionDTO::setDestinationKey()
     * @uses DestinationKeyDimensionDTO::setDestinationKeyDescription()
     * @uses DestinationKeyDimensionDTO::setDestinationKeyId()
     * @uses DestinationKeyDimensionDTO::setDestinationKeyLocDescr()
     * @param string $destinationKey
     * @param string $destinationKeyDescription
     * @param int $destinationKeyId
     * @param string $destinationKeyLocDescr
     */
    public function __construct(?string $destinationKey = null, ?string $destinationKeyDescription = null, ?int $destinationKeyId = null, ?string $destinationKeyLocDescr = null)
    {
        $this
            ->setDestinationKey($destinationKey)
            ->setDestinationKeyDescription($destinationKeyDescription)
            ->setDestinationKeyId($destinationKeyId)
            ->setDestinationKeyLocDescr($destinationKeyLocDescr);
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Mis\StructType\DestinationKeyDimensionDTO
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
    /**
     * Get destinationKeyDescription value
     * @return string|null
     */
    public function getDestinationKeyDescription(): ?string
    {
        return $this->destinationKeyDescription;
    }
    /**
     * Set destinationKeyDescription value
     * @param string $destinationKeyDescription
     * @return \Pggns\MidocoApi\Mis\StructType\DestinationKeyDimensionDTO
     */
    public function setDestinationKeyDescription(?string $destinationKeyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKeyDescription) && !is_string($destinationKeyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKeyDescription, true), gettype($destinationKeyDescription)), __LINE__);
        }
        $this->destinationKeyDescription = $destinationKeyDescription;
        
        return $this;
    }
    /**
     * Get destinationKeyId value
     * @return int|null
     */
    public function getDestinationKeyId(): ?int
    {
        return $this->destinationKeyId;
    }
    /**
     * Set destinationKeyId value
     * @param int $destinationKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\DestinationKeyDimensionDTO
     */
    public function setDestinationKeyId(?int $destinationKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationKeyId) && !(is_int($destinationKeyId) || ctype_digit($destinationKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationKeyId, true), gettype($destinationKeyId)), __LINE__);
        }
        $this->destinationKeyId = $destinationKeyId;
        
        return $this;
    }
    /**
     * Get destinationKeyLocDescr value
     * @return string|null
     */
    public function getDestinationKeyLocDescr(): ?string
    {
        return $this->destinationKeyLocDescr;
    }
    /**
     * Set destinationKeyLocDescr value
     * @param string $destinationKeyLocDescr
     * @return \Pggns\MidocoApi\Mis\StructType\DestinationKeyDimensionDTO
     */
    public function setDestinationKeyLocDescr(?string $destinationKeyLocDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKeyLocDescr) && !is_string($destinationKeyLocDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKeyLocDescr, true), gettype($destinationKeyLocDescr)), __LINE__);
        }
        $this->destinationKeyLocDescr = $destinationKeyLocDescr;
        
        return $this;
    }
}
