<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisBonusPointDTO StructType
 * @subpackage Structs
 */
class MisBonusPointDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The points
     * @var int|null
     */
    protected ?int $points = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for MisBonusPointDTO
     * @uses MisBonusPointDTO::setCustomerId()
     * @uses MisBonusPointDTO::setOrgUnit()
     * @uses MisBonusPointDTO::setPoints()
     * @uses MisBonusPointDTO::setTypeId()
     * @param int $customerId
     * @param string $orgUnit
     * @param int $points
     * @param string $typeId
     */
    public function __construct(?int $customerId = null, ?string $orgUnit = null, ?int $points = null, ?string $typeId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setOrgUnit($orgUnit)
            ->setPoints($points)
            ->setTypeId($typeId);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\MisBonusPointDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MisBonusPointDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get points value
     * @return int|null
     */
    public function getPoints(): ?int
    {
        return $this->points;
    }
    /**
     * Set points value
     * @param int $points
     * @return \Pggns\MidocoApi\Mis\StructType\MisBonusPointDTO
     */
    public function setPoints(?int $points = null): self
    {
        // validation for constraint: int
        if (!is_null($points) && !(is_int($points) || ctype_digit($points))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($points, true), gettype($points)), __LINE__);
        }
        $this->points = $points;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Mis\StructType\MisBonusPointDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
