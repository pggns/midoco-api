<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DurationKeyDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DurationKeyDimensionDTO extends AbstractStructBase
{
    /**
     * The durationKey
     * @var string|null
     */
    protected ?string $durationKey = null;
    /**
     * The durationKeyDescription
     * @var string|null
     */
    protected ?string $durationKeyDescription = null;
    /**
     * The durationKeyId
     * @var int|null
     */
    protected ?int $durationKeyId = null;
    /**
     * The durationKeyLocDescr
     * @var string|null
     */
    protected ?string $durationKeyLocDescr = null;
    /**
     * Constructor method for DurationKeyDimensionDTO
     * @uses DurationKeyDimensionDTO::setDurationKey()
     * @uses DurationKeyDimensionDTO::setDurationKeyDescription()
     * @uses DurationKeyDimensionDTO::setDurationKeyId()
     * @uses DurationKeyDimensionDTO::setDurationKeyLocDescr()
     * @param string $durationKey
     * @param string $durationKeyDescription
     * @param int $durationKeyId
     * @param string $durationKeyLocDescr
     */
    public function __construct(?string $durationKey = null, ?string $durationKeyDescription = null, ?int $durationKeyId = null, ?string $durationKeyLocDescr = null)
    {
        $this
            ->setDurationKey($durationKey)
            ->setDurationKeyDescription($durationKeyDescription)
            ->setDurationKeyId($durationKeyId)
            ->setDurationKeyLocDescr($durationKeyLocDescr);
    }
    /**
     * Get durationKey value
     * @return string|null
     */
    public function getDurationKey(): ?string
    {
        return $this->durationKey;
    }
    /**
     * Set durationKey value
     * @param string $durationKey
     * @return \Pggns\MidocoApi\Mis\StructType\DurationKeyDimensionDTO
     */
    public function setDurationKey(?string $durationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($durationKey) && !is_string($durationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($durationKey, true), gettype($durationKey)), __LINE__);
        }
        $this->durationKey = $durationKey;
        
        return $this;
    }
    /**
     * Get durationKeyDescription value
     * @return string|null
     */
    public function getDurationKeyDescription(): ?string
    {
        return $this->durationKeyDescription;
    }
    /**
     * Set durationKeyDescription value
     * @param string $durationKeyDescription
     * @return \Pggns\MidocoApi\Mis\StructType\DurationKeyDimensionDTO
     */
    public function setDurationKeyDescription(?string $durationKeyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($durationKeyDescription) && !is_string($durationKeyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($durationKeyDescription, true), gettype($durationKeyDescription)), __LINE__);
        }
        $this->durationKeyDescription = $durationKeyDescription;
        
        return $this;
    }
    /**
     * Get durationKeyId value
     * @return int|null
     */
    public function getDurationKeyId(): ?int
    {
        return $this->durationKeyId;
    }
    /**
     * Set durationKeyId value
     * @param int $durationKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\DurationKeyDimensionDTO
     */
    public function setDurationKeyId(?int $durationKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($durationKeyId) && !(is_int($durationKeyId) || ctype_digit($durationKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationKeyId, true), gettype($durationKeyId)), __LINE__);
        }
        $this->durationKeyId = $durationKeyId;
        
        return $this;
    }
    /**
     * Get durationKeyLocDescr value
     * @return string|null
     */
    public function getDurationKeyLocDescr(): ?string
    {
        return $this->durationKeyLocDescr;
    }
    /**
     * Set durationKeyLocDescr value
     * @param string $durationKeyLocDescr
     * @return \Pggns\MidocoApi\Mis\StructType\DurationKeyDimensionDTO
     */
    public function setDurationKeyLocDescr(?string $durationKeyLocDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($durationKeyLocDescr) && !is_string($durationKeyLocDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($durationKeyLocDescr, true), gettype($durationKeyLocDescr)), __LINE__);
        }
        $this->durationKeyLocDescr = $durationKeyLocDescr;
        
        return $this;
    }
}
