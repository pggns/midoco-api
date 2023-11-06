<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgUnitClosureDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrgUnitClosureDTO extends AbstractStructBase
{
    /**
     * The childOrgUnitId
     * @var int|null
     */
    protected ?int $childOrgUnitId = null;
    /**
     * The distance
     * @var int|null
     */
    protected ?int $distance = null;
    /**
     * The orgUnitId
     * @var int|null
     */
    protected ?int $orgUnitId = null;
    /**
     * Constructor method for OrgUnitClosureDTO
     * @uses OrgUnitClosureDTO::setChildOrgUnitId()
     * @uses OrgUnitClosureDTO::setDistance()
     * @uses OrgUnitClosureDTO::setOrgUnitId()
     * @param int $childOrgUnitId
     * @param int $distance
     * @param int $orgUnitId
     */
    public function __construct(?int $childOrgUnitId = null, ?int $distance = null, ?int $orgUnitId = null)
    {
        $this
            ->setChildOrgUnitId($childOrgUnitId)
            ->setDistance($distance)
            ->setOrgUnitId($orgUnitId);
    }
    /**
     * Get childOrgUnitId value
     * @return int|null
     */
    public function getChildOrgUnitId(): ?int
    {
        return $this->childOrgUnitId;
    }
    /**
     * Set childOrgUnitId value
     * @param int $childOrgUnitId
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitClosureDTO
     */
    public function setChildOrgUnitId(?int $childOrgUnitId = null): self
    {
        // validation for constraint: int
        if (!is_null($childOrgUnitId) && !(is_int($childOrgUnitId) || ctype_digit($childOrgUnitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($childOrgUnitId, true), gettype($childOrgUnitId)), __LINE__);
        }
        $this->childOrgUnitId = $childOrgUnitId;
        
        return $this;
    }
    /**
     * Get distance value
     * @return int|null
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }
    /**
     * Set distance value
     * @param int $distance
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitClosureDTO
     */
    public function setDistance(?int $distance = null): self
    {
        // validation for constraint: int
        if (!is_null($distance) && !(is_int($distance) || ctype_digit($distance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distance, true), gettype($distance)), __LINE__);
        }
        $this->distance = $distance;
        
        return $this;
    }
    /**
     * Get orgUnitId value
     * @return int|null
     */
    public function getOrgUnitId(): ?int
    {
        return $this->orgUnitId;
    }
    /**
     * Set orgUnitId value
     * @param int $orgUnitId
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitClosureDTO
     */
    public function setOrgUnitId(?int $orgUnitId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgUnitId) && !(is_int($orgUnitId) || ctype_digit($orgUnitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgUnitId, true), gettype($orgUnitId)), __LINE__);
        }
        $this->orgUnitId = $orgUnitId;
        
        return $this;
    }
}
