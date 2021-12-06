<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalSystemDimensionDTO StructType
 * @subpackage Structs
 */
class ExternalSystemDimensionDTO extends AbstractStructBase
{
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The externalSystemId
     * @var int|null
     */
    protected ?int $externalSystemId = null;
    /**
     * Constructor method for ExternalSystemDimensionDTO
     * @uses ExternalSystemDimensionDTO::setExternalSystem()
     * @uses ExternalSystemDimensionDTO::setExternalSystemId()
     * @param string $externalSystem
     * @param int $externalSystemId
     */
    public function __construct(?string $externalSystem = null, ?int $externalSystemId = null)
    {
        $this
            ->setExternalSystem($externalSystem)
            ->setExternalSystemId($externalSystemId);
    }
    /**
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\Mis\StructType\ExternalSystemDimensionDTO
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
    /**
     * Get externalSystemId value
     * @return int|null
     */
    public function getExternalSystemId(): ?int
    {
        return $this->externalSystemId;
    }
    /**
     * Set externalSystemId value
     * @param int $externalSystemId
     * @return \Pggns\MidocoApi\Mis\StructType\ExternalSystemDimensionDTO
     */
    public function setExternalSystemId(?int $externalSystemId = null): self
    {
        // validation for constraint: int
        if (!is_null($externalSystemId) && !(is_int($externalSystemId) || ctype_digit($externalSystemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalSystemId, true), gettype($externalSystemId)), __LINE__);
        }
        $this->externalSystemId = $externalSystemId;
        
        return $this;
    }
}
