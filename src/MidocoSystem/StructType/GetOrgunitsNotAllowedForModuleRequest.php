<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitsNotAllowedForModuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitsNotAllowedForModuleRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The modulId
     * @var string|null
     */
    protected ?string $modulId = null;
    /**
     * Constructor method for GetOrgunitsNotAllowedForModuleRequest
     * @uses GetOrgunitsNotAllowedForModuleRequest::setUnitName()
     * @uses GetOrgunitsNotAllowedForModuleRequest::setAppId()
     * @uses GetOrgunitsNotAllowedForModuleRequest::setModulId()
     * @param string $unitName
     * @param string $appId
     * @param string $modulId
     */
    public function __construct(?string $unitName = null, ?string $appId = null, ?string $modulId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setAppId($appId)
            ->setModulId($modulId);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitsNotAllowedForModuleRequest
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
     * Get appId value
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }
    /**
     * Set appId value
     * @param string $appId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitsNotAllowedForModuleRequest
     */
    public function setAppId(?string $appId = null): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->appId = $appId;
        
        return $this;
    }
    /**
     * Get modulId value
     * @return string|null
     */
    public function getModulId(): ?string
    {
        return $this->modulId;
    }
    /**
     * Set modulId value
     * @param string $modulId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitsNotAllowedForModuleRequest
     */
    public function setModulId(?string $modulId = null): self
    {
        // validation for constraint: string
        if (!is_null($modulId) && !is_string($modulId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modulId, true), gettype($modulId)), __LINE__);
        }
        $this->modulId = $modulId;
        
        return $this;
    }
}
