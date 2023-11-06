<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationCodeDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinationCodeDimensionDTO extends AbstractStructBase
{
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationCodeId
     * @var int|null
     */
    protected ?int $destinationCodeId = null;
    /**
     * Constructor method for DestinationCodeDimensionDTO
     * @uses DestinationCodeDimensionDTO::setDestinationCode()
     * @uses DestinationCodeDimensionDTO::setDestinationCodeId()
     * @param string $destinationCode
     * @param int $destinationCodeId
     */
    public function __construct(?string $destinationCode = null, ?int $destinationCodeId = null)
    {
        $this
            ->setDestinationCode($destinationCode)
            ->setDestinationCodeId($destinationCodeId);
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Mis\StructType\DestinationCodeDimensionDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get destinationCodeId value
     * @return int|null
     */
    public function getDestinationCodeId(): ?int
    {
        return $this->destinationCodeId;
    }
    /**
     * Set destinationCodeId value
     * @param int $destinationCodeId
     * @return \Pggns\MidocoApi\Mis\StructType\DestinationCodeDimensionDTO
     */
    public function setDestinationCodeId(?int $destinationCodeId = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationCodeId) && !(is_int($destinationCodeId) || ctype_digit($destinationCodeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationCodeId, true), gettype($destinationCodeId)), __LINE__);
        }
        $this->destinationCodeId = $destinationCodeId;
        
        return $this;
    }
}
