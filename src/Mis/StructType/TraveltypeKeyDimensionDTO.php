<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TraveltypeKeyDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TraveltypeKeyDimensionDTO extends AbstractStructBase
{
    /**
     * The traveltypeKey
     * @var string|null
     */
    protected ?string $traveltypeKey = null;
    /**
     * The traveltypeKeyDescription
     * @var string|null
     */
    protected ?string $traveltypeKeyDescription = null;
    /**
     * The traveltypeKeyId
     * @var int|null
     */
    protected ?int $traveltypeKeyId = null;
    /**
     * The traveltypeKeyLocDescr
     * @var string|null
     */
    protected ?string $traveltypeKeyLocDescr = null;
    /**
     * Constructor method for TraveltypeKeyDimensionDTO
     * @uses TraveltypeKeyDimensionDTO::setTraveltypeKey()
     * @uses TraveltypeKeyDimensionDTO::setTraveltypeKeyDescription()
     * @uses TraveltypeKeyDimensionDTO::setTraveltypeKeyId()
     * @uses TraveltypeKeyDimensionDTO::setTraveltypeKeyLocDescr()
     * @param string $traveltypeKey
     * @param string $traveltypeKeyDescription
     * @param int $traveltypeKeyId
     * @param string $traveltypeKeyLocDescr
     */
    public function __construct(?string $traveltypeKey = null, ?string $traveltypeKeyDescription = null, ?int $traveltypeKeyId = null, ?string $traveltypeKeyLocDescr = null)
    {
        $this
            ->setTraveltypeKey($traveltypeKey)
            ->setTraveltypeKeyDescription($traveltypeKeyDescription)
            ->setTraveltypeKeyId($traveltypeKeyId)
            ->setTraveltypeKeyLocDescr($traveltypeKeyLocDescr);
    }
    /**
     * Get traveltypeKey value
     * @return string|null
     */
    public function getTraveltypeKey(): ?string
    {
        return $this->traveltypeKey;
    }
    /**
     * Set traveltypeKey value
     * @param string $traveltypeKey
     * @return \Pggns\MidocoApi\Mis\StructType\TraveltypeKeyDimensionDTO
     */
    public function setTraveltypeKey(?string $traveltypeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeKey) && !is_string($traveltypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeKey, true), gettype($traveltypeKey)), __LINE__);
        }
        $this->traveltypeKey = $traveltypeKey;
        
        return $this;
    }
    /**
     * Get traveltypeKeyDescription value
     * @return string|null
     */
    public function getTraveltypeKeyDescription(): ?string
    {
        return $this->traveltypeKeyDescription;
    }
    /**
     * Set traveltypeKeyDescription value
     * @param string $traveltypeKeyDescription
     * @return \Pggns\MidocoApi\Mis\StructType\TraveltypeKeyDimensionDTO
     */
    public function setTraveltypeKeyDescription(?string $traveltypeKeyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeKeyDescription) && !is_string($traveltypeKeyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeKeyDescription, true), gettype($traveltypeKeyDescription)), __LINE__);
        }
        $this->traveltypeKeyDescription = $traveltypeKeyDescription;
        
        return $this;
    }
    /**
     * Get traveltypeKeyId value
     * @return int|null
     */
    public function getTraveltypeKeyId(): ?int
    {
        return $this->traveltypeKeyId;
    }
    /**
     * Set traveltypeKeyId value
     * @param int $traveltypeKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\TraveltypeKeyDimensionDTO
     */
    public function setTraveltypeKeyId(?int $traveltypeKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($traveltypeKeyId) && !(is_int($traveltypeKeyId) || ctype_digit($traveltypeKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($traveltypeKeyId, true), gettype($traveltypeKeyId)), __LINE__);
        }
        $this->traveltypeKeyId = $traveltypeKeyId;
        
        return $this;
    }
    /**
     * Get traveltypeKeyLocDescr value
     * @return string|null
     */
    public function getTraveltypeKeyLocDescr(): ?string
    {
        return $this->traveltypeKeyLocDescr;
    }
    /**
     * Set traveltypeKeyLocDescr value
     * @param string $traveltypeKeyLocDescr
     * @return \Pggns\MidocoApi\Mis\StructType\TraveltypeKeyDimensionDTO
     */
    public function setTraveltypeKeyLocDescr(?string $traveltypeKeyLocDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeKeyLocDescr) && !is_string($traveltypeKeyLocDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeKeyLocDescr, true), gettype($traveltypeKeyLocDescr)), __LINE__);
        }
        $this->traveltypeKeyLocDescr = $traveltypeKeyLocDescr;
        
        return $this;
    }
}
