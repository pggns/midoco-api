<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitsInSameDBRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgUnitsInSameDBRequest extends AbstractStructBase
{
    /**
     * The dbType
     * @var string|null
     */
    protected ?string $dbType = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The useMidocoAsTopUnit
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useMidocoAsTopUnit = null;
    /**
     * Constructor method for GetOrgUnitsInSameDBRequest
     * @uses GetOrgUnitsInSameDBRequest::setDbType()
     * @uses GetOrgUnitsInSameDBRequest::setOrgUnit()
     * @uses GetOrgUnitsInSameDBRequest::setUseMidocoAsTopUnit()
     * @param string $dbType
     * @param string $orgUnit
     * @param bool $useMidocoAsTopUnit
     */
    public function __construct(?string $dbType = null, ?string $orgUnit = null, ?bool $useMidocoAsTopUnit = false)
    {
        $this
            ->setDbType($dbType)
            ->setOrgUnit($orgUnit)
            ->setUseMidocoAsTopUnit($useMidocoAsTopUnit);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsInSameDBRequest
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsInSameDBRequest
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
     * Get useMidocoAsTopUnit value
     * @return bool|null
     */
    public function getUseMidocoAsTopUnit(): ?bool
    {
        return $this->useMidocoAsTopUnit;
    }
    /**
     * Set useMidocoAsTopUnit value
     * @param bool $useMidocoAsTopUnit
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgUnitsInSameDBRequest
     */
    public function setUseMidocoAsTopUnit(?bool $useMidocoAsTopUnit = false): self
    {
        // validation for constraint: boolean
        if (!is_null($useMidocoAsTopUnit) && !is_bool($useMidocoAsTopUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useMidocoAsTopUnit, true), gettype($useMidocoAsTopUnit)), __LINE__);
        }
        $this->useMidocoAsTopUnit = $useMidocoAsTopUnit;
        
        return $this;
    }
}
