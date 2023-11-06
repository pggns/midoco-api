<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitsInSameDBForUserRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgUnitsInSameDBForUserRequest extends AbstractStructBase
{
    /**
     * The dbType
     * @var string|null
     */
    protected ?string $dbType = null;
    /**
     * The checkOverwriteUnit
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $checkOverwriteUnit = null;
    /**
     * Constructor method for GetOrgUnitsInSameDBForUserRequest
     * @uses GetOrgUnitsInSameDBForUserRequest::setDbType()
     * @uses GetOrgUnitsInSameDBForUserRequest::setCheckOverwriteUnit()
     * @param string $dbType
     * @param bool $checkOverwriteUnit
     */
    public function __construct(?string $dbType = null, ?bool $checkOverwriteUnit = true)
    {
        $this
            ->setDbType($dbType)
            ->setCheckOverwriteUnit($checkOverwriteUnit);
    }
    /**
     * Get dbType value
     * @return string|null
     */
    public function getDbType(): ?string
    {
        return $this->dbType;
    }
    /**
     * Set dbType value
     * @param string $dbType
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsInSameDBForUserRequest
     */
    public function setDbType(?string $dbType = null): self
    {
        // validation for constraint: string
        if (!is_null($dbType) && !is_string($dbType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbType, true), gettype($dbType)), __LINE__);
        }
        $this->dbType = $dbType;
        
        return $this;
    }
    /**
     * Get checkOverwriteUnit value
     * @return bool|null
     */
    public function getCheckOverwriteUnit(): ?bool
    {
        return $this->checkOverwriteUnit;
    }
    /**
     * Set checkOverwriteUnit value
     * @param bool $checkOverwriteUnit
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsInSameDBForUserRequest
     */
    public function setCheckOverwriteUnit(?bool $checkOverwriteUnit = true): self
    {
        // validation for constraint: boolean
        if (!is_null($checkOverwriteUnit) && !is_bool($checkOverwriteUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkOverwriteUnit, true), gettype($checkOverwriteUnit)), __LINE__);
        }
        $this->checkOverwriteUnit = $checkOverwriteUnit;
        
        return $this;
    }
}
