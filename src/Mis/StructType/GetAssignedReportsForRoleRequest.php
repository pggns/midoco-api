<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedReportsForRoleRequest StructType
 * @subpackage Structs
 */
class GetAssignedReportsForRoleRequest extends AbstractStructBase
{
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * Constructor method for GetAssignedReportsForRoleRequest
     * @uses GetAssignedReportsForRoleRequest::setOrgUnit()
     * @uses GetAssignedReportsForRoleRequest::setRoleId()
     * @param string $orgUnit
     * @param int $roleId
     */
    public function __construct(?string $orgUnit = null, ?int $roleId = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setRoleId($roleId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedReportsForRoleRequest
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
     * Get roleId value
     * @return int|null
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }
    /**
     * Set roleId value
     * @param int $roleId
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedReportsForRoleRequest
     */
    public function setRoleId(?int $roleId = null): self
    {
        // validation for constraint: int
        if (!is_null($roleId) && !(is_int($roleId) || ctype_digit($roleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleId, true), gettype($roleId)), __LINE__);
        }
        $this->roleId = $roleId;
        
        return $this;
    }
}
