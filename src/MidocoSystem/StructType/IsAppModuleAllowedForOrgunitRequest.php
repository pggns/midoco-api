<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsAppModuleAllowedForOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsAppModuleAllowedForOrgunitRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The appName
     * @var string|null
     */
    protected ?string $appName = null;
    /**
     * The moduleId
     * @var string|null
     */
    protected ?string $moduleId = null;
    /**
     * Constructor method for IsAppModuleAllowedForOrgunitRequest
     * @uses IsAppModuleAllowedForOrgunitRequest::setUnitName()
     * @uses IsAppModuleAllowedForOrgunitRequest::setAppName()
     * @uses IsAppModuleAllowedForOrgunitRequest::setModuleId()
     * @param string $unitName
     * @param string $appName
     * @param string $moduleId
     */
    public function __construct(?string $unitName = null, ?string $appName = null, ?string $moduleId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setAppName($appName)
            ->setModuleId($moduleId);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IsAppModuleAllowedForOrgunitRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get appName value
     * @return string|null
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }
    /**
     * Set appName value
     * @param string $appName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IsAppModuleAllowedForOrgunitRequest
     */
    public function setAppName(?string $appName = null): self
    {
        // validation for constraint: string
        if (!is_null($appName) && !is_string($appName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appName, true), gettype($appName)), __LINE__);
        }
        $this->appName = $appName;
        
        return $this;
    }
    /**
     * Get moduleId value
     * @return string|null
     */
    public function getModuleId(): ?string
    {
        return $this->moduleId;
    }
    /**
     * Set moduleId value
     * @param string $moduleId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IsAppModuleAllowedForOrgunitRequest
     */
    public function setModuleId(?string $moduleId = null): self
    {
        // validation for constraint: string
        if (!is_null($moduleId) && !is_string($moduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moduleId, true), gettype($moduleId)), __LINE__);
        }
        $this->moduleId = $moduleId;
        
        return $this;
    }
}
