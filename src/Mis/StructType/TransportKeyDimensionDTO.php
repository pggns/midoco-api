<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportKeyDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransportKeyDimensionDTO extends AbstractStructBase
{
    /**
     * The transportKey
     * @var string|null
     */
    protected ?string $transportKey = null;
    /**
     * The transportKeyDescription
     * @var string|null
     */
    protected ?string $transportKeyDescription = null;
    /**
     * The transportKeyId
     * @var int|null
     */
    protected ?int $transportKeyId = null;
    /**
     * The transportKeyLocDescr
     * @var string|null
     */
    protected ?string $transportKeyLocDescr = null;
    /**
     * Constructor method for TransportKeyDimensionDTO
     * @uses TransportKeyDimensionDTO::setTransportKey()
     * @uses TransportKeyDimensionDTO::setTransportKeyDescription()
     * @uses TransportKeyDimensionDTO::setTransportKeyId()
     * @uses TransportKeyDimensionDTO::setTransportKeyLocDescr()
     * @param string $transportKey
     * @param string $transportKeyDescription
     * @param int $transportKeyId
     * @param string $transportKeyLocDescr
     */
    public function __construct(?string $transportKey = null, ?string $transportKeyDescription = null, ?int $transportKeyId = null, ?string $transportKeyLocDescr = null)
    {
        $this
            ->setTransportKey($transportKey)
            ->setTransportKeyDescription($transportKeyDescription)
            ->setTransportKeyId($transportKeyId)
            ->setTransportKeyLocDescr($transportKeyLocDescr);
    }
    /**
     * Get transportKey value
     * @return string|null
     */
    public function getTransportKey(): ?string
    {
        return $this->transportKey;
    }
    /**
     * Set transportKey value
     * @param string $transportKey
     * @return \Pggns\MidocoApi\Mis\StructType\TransportKeyDimensionDTO
     */
    public function setTransportKey(?string $transportKey = null): self
    {
        // validation for constraint: string
        if (!is_null($transportKey) && !is_string($transportKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportKey, true), gettype($transportKey)), __LINE__);
        }
        $this->transportKey = $transportKey;
        
        return $this;
    }
    /**
     * Get transportKeyDescription value
     * @return string|null
     */
    public function getTransportKeyDescription(): ?string
    {
        return $this->transportKeyDescription;
    }
    /**
     * Set transportKeyDescription value
     * @param string $transportKeyDescription
     * @return \Pggns\MidocoApi\Mis\StructType\TransportKeyDimensionDTO
     */
    public function setTransportKeyDescription(?string $transportKeyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($transportKeyDescription) && !is_string($transportKeyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportKeyDescription, true), gettype($transportKeyDescription)), __LINE__);
        }
        $this->transportKeyDescription = $transportKeyDescription;
        
        return $this;
    }
    /**
     * Get transportKeyId value
     * @return int|null
     */
    public function getTransportKeyId(): ?int
    {
        return $this->transportKeyId;
    }
    /**
     * Set transportKeyId value
     * @param int $transportKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\TransportKeyDimensionDTO
     */
    public function setTransportKeyId(?int $transportKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($transportKeyId) && !(is_int($transportKeyId) || ctype_digit($transportKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transportKeyId, true), gettype($transportKeyId)), __LINE__);
        }
        $this->transportKeyId = $transportKeyId;
        
        return $this;
    }
    /**
     * Get transportKeyLocDescr value
     * @return string|null
     */
    public function getTransportKeyLocDescr(): ?string
    {
        return $this->transportKeyLocDescr;
    }
    /**
     * Set transportKeyLocDescr value
     * @param string $transportKeyLocDescr
     * @return \Pggns\MidocoApi\Mis\StructType\TransportKeyDimensionDTO
     */
    public function setTransportKeyLocDescr(?string $transportKeyLocDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($transportKeyLocDescr) && !is_string($transportKeyLocDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportKeyLocDescr, true), gettype($transportKeyLocDescr)), __LINE__);
        }
        $this->transportKeyLocDescr = $transportKeyLocDescr;
        
        return $this;
    }
}
