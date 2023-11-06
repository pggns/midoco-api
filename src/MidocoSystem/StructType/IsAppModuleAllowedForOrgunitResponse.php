<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsAppModuleAllowedForOrgunitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsAppModuleAllowedForOrgunitResponse extends AbstractStructBase
{
    /**
     * The isAllowed
     * @var bool|null
     */
    protected ?bool $isAllowed = null;
    /**
     * Constructor method for IsAppModuleAllowedForOrgunitResponse
     * @uses IsAppModuleAllowedForOrgunitResponse::setIsAllowed()
     * @param bool $isAllowed
     */
    public function __construct(?bool $isAllowed = null)
    {
        $this
            ->setIsAllowed($isAllowed);
    }
    /**
     * Get isAllowed value
     * @return bool|null
     */
    public function getIsAllowed(): ?bool
    {
        return $this->isAllowed;
    }
    /**
     * Set isAllowed value
     * @param bool $isAllowed
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IsAppModuleAllowedForOrgunitResponse
     */
    public function setIsAllowed(?bool $isAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAllowed) && !is_bool($isAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAllowed, true), gettype($isAllowed)), __LINE__);
        }
        $this->isAllowed = $isAllowed;
        
        return $this;
    }
}
