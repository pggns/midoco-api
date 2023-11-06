<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StatusDimensionDTO extends AbstractStructBase
{
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The statusId
     * @var int|null
     */
    protected ?int $statusId = null;
    /**
     * Constructor method for StatusDimensionDTO
     * @uses StatusDimensionDTO::setStatus()
     * @uses StatusDimensionDTO::setStatusId()
     * @param string $status
     * @param int $statusId
     */
    public function __construct(?string $status = null, ?int $statusId = null)
    {
        $this
            ->setStatus($status)
            ->setStatusId($statusId);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Mis\StructType\StatusDimensionDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get statusId value
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->statusId;
    }
    /**
     * Set statusId value
     * @param int $statusId
     * @return \Pggns\MidocoApi\Mis\StructType\StatusDimensionDTO
     */
    public function setStatusId(?int $statusId = null): self
    {
        // validation for constraint: int
        if (!is_null($statusId) && !(is_int($statusId) || ctype_digit($statusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusId, true), gettype($statusId)), __LINE__);
        }
        $this->statusId = $statusId;
        
        return $this;
    }
}
