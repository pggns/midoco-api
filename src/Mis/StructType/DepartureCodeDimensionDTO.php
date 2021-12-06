<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartureCodeDimensionDTO StructType
 * @subpackage Structs
 */
class DepartureCodeDimensionDTO extends AbstractStructBase
{
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureCodeId
     * @var int|null
     */
    protected ?int $departureCodeId = null;
    /**
     * Constructor method for DepartureCodeDimensionDTO
     * @uses DepartureCodeDimensionDTO::setDepartureCode()
     * @uses DepartureCodeDimensionDTO::setDepartureCodeId()
     * @param string $departureCode
     * @param int $departureCodeId
     */
    public function __construct(?string $departureCode = null, ?int $departureCodeId = null)
    {
        $this
            ->setDepartureCode($departureCode)
            ->setDepartureCodeId($departureCodeId);
    }
    /**
     * Get departureCode value
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->departureCode;
    }
    /**
     * Set departureCode value
     * @param string $departureCode
     * @return \Pggns\MidocoApi\Mis\StructType\DepartureCodeDimensionDTO
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
        return $this;
    }
    /**
     * Get departureCodeId value
     * @return int|null
     */
    public function getDepartureCodeId(): ?int
    {
        return $this->departureCodeId;
    }
    /**
     * Set departureCodeId value
     * @param int $departureCodeId
     * @return \Pggns\MidocoApi\Mis\StructType\DepartureCodeDimensionDTO
     */
    public function setDepartureCodeId(?int $departureCodeId = null): self
    {
        // validation for constraint: int
        if (!is_null($departureCodeId) && !(is_int($departureCodeId) || ctype_digit($departureCodeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($departureCodeId, true), gettype($departureCodeId)), __LINE__);
        }
        $this->departureCodeId = $departureCodeId;
        
        return $this;
    }
}
