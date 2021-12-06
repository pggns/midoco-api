<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitSequenceRequest StructType
 * @subpackage Structs
 */
class GetOrgUnitSequenceRequest extends AbstractStructBase
{
    /**
     * The isCountable
     * @var bool|null
     */
    protected ?bool $isCountable = null;
    /**
     * Constructor method for GetOrgUnitSequenceRequest
     * @uses GetOrgUnitSequenceRequest::setIsCountable()
     * @param bool $isCountable
     */
    public function __construct(?bool $isCountable = null)
    {
        $this
            ->setIsCountable($isCountable);
    }
    /**
     * Get isCountable value
     * @return bool|null
     */
    public function getIsCountable(): ?bool
    {
        return $this->isCountable;
    }
    /**
     * Set isCountable value
     * @param bool $isCountable
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitSequenceRequest
     */
    public function setIsCountable(?bool $isCountable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCountable) && !is_bool($isCountable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCountable, true), gettype($isCountable)), __LINE__);
        }
        $this->isCountable = $isCountable;
        
        return $this;
    }
}
