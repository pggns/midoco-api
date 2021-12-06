<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTTImportResponse StructType
 * @subpackage Structs
 */
class UpdateTTImportResponse extends AbstractStructBase
{
    /**
     * The isUpdated
     * @var bool|null
     */
    protected ?bool $isUpdated = null;
    /**
     * Constructor method for UpdateTTImportResponse
     * @uses UpdateTTImportResponse::setIsUpdated()
     * @param bool $isUpdated
     */
    public function __construct(?bool $isUpdated = null)
    {
        $this
            ->setIsUpdated($isUpdated);
    }
    /**
     * Get isUpdated value
     * @return bool|null
     */
    public function getIsUpdated(): ?bool
    {
        return $this->isUpdated;
    }
    /**
     * Set isUpdated value
     * @param bool $isUpdated
     * @return \Pggns\MidocoApi\Api\System\StructType\UpdateTTImportResponse
     */
    public function setIsUpdated(?bool $isUpdated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUpdated) && !is_bool($isUpdated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUpdated, true), gettype($isUpdated)), __LINE__);
        }
        $this->isUpdated = $isUpdated;
        
        return $this;
    }
}
