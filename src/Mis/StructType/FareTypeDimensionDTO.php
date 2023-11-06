<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareTypeDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FareTypeDimensionDTO extends AbstractStructBase
{
    /**
     * The fareType
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The fareTypeId
     * @var int|null
     */
    protected ?int $fareTypeId = null;
    /**
     * Constructor method for FareTypeDimensionDTO
     * @uses FareTypeDimensionDTO::setFareType()
     * @uses FareTypeDimensionDTO::setFareTypeId()
     * @param string $fareType
     * @param int $fareTypeId
     */
    public function __construct(?string $fareType = null, ?int $fareTypeId = null)
    {
        $this
            ->setFareType($fareType)
            ->setFareTypeId($fareTypeId);
    }
    /**
     * Get fareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }
    /**
     * Set fareType value
     * @param string $fareType
     * @return \Pggns\MidocoApi\Mis\StructType\FareTypeDimensionDTO
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareType, true), gettype($fareType)), __LINE__);
        }
        $this->fareType = $fareType;
        
        return $this;
    }
    /**
     * Get fareTypeId value
     * @return int|null
     */
    public function getFareTypeId(): ?int
    {
        return $this->fareTypeId;
    }
    /**
     * Set fareTypeId value
     * @param int $fareTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\FareTypeDimensionDTO
     */
    public function setFareTypeId(?int $fareTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($fareTypeId) && !(is_int($fareTypeId) || ctype_digit($fareTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fareTypeId, true), gettype($fareTypeId)), __LINE__);
        }
        $this->fareTypeId = $fareTypeId;
        
        return $this;
    }
}
