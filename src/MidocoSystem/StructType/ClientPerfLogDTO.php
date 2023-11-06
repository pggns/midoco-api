<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientPerfLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClientPerfLogDTO extends AbstractStructBase
{
    /**
     * The duration
     * @var int|null
     */
    protected ?int $duration = null;
    /**
     * The logActionName
     * @var string|null
     */
    protected ?string $logActionName = null;
    /**
     * The logId
     * @var int|null
     */
    protected ?int $logId = null;
    /**
     * The params
     * @var string|null
     */
    protected ?string $params = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for ClientPerfLogDTO
     * @uses ClientPerfLogDTO::setDuration()
     * @uses ClientPerfLogDTO::setLogActionName()
     * @uses ClientPerfLogDTO::setLogId()
     * @uses ClientPerfLogDTO::setParams()
     * @uses ClientPerfLogDTO::setStartTime()
     * @uses ClientPerfLogDTO::setUnitName()
     * @uses ClientPerfLogDTO::setUserId()
     * @param int $duration
     * @param string $logActionName
     * @param int $logId
     * @param string $params
     * @param string $startTime
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?int $duration = null, ?string $logActionName = null, ?int $logId = null, ?string $params = null, ?string $startTime = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setDuration($duration)
            ->setLogActionName($logActionName)
            ->setLogId($logId)
            ->setParams($params)
            ->setStartTime($startTime)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get duration value
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param int $duration
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ClientPerfLogDTO
     */
    public function setDuration(?int $duration = null): self
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
        return $this;
    }
    /**
     * Get logActionName value
     * @return string|null
     */
    public function getLogActionName(): ?string
    {
        return $this->logActionName;
    }
    /**
     * Set logActionName value
     * @param string $logActionName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ClientPerfLogDTO
     */
    public function setLogActionName(?string $logActionName = null): self
    {
        // validation for constraint: string
        if (!is_null($logActionName) && !is_string($logActionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logActionName, true), gettype($logActionName)), __LINE__);
        }
        $this->logActionName = $logActionName;
        
        return $this;
    }
    /**
     * Get logId value
     * @return int|null
     */
    public function getLogId(): ?int
    {
        return $this->logId;
    }
    /**
     * Set logId value
     * @param int $logId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ClientPerfLogDTO
     */
    public function setLogId(?int $logId = null): self
    {
        // validation for constraint: int
        if (!is_null($logId) && !(is_int($logId) || ctype_digit($logId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($logId, true), gettype($logId)), __LINE__);
        }
        $this->logId = $logId;
        
        return $this;
    }
    /**
     * Get params value
     * @return string|null
     */
    public function getParams(): ?string
    {
        return $this->params;
    }
    /**
     * Set params value
     * @param string $params
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ClientPerfLogDTO
     */
    public function setParams(?string $params = null): self
    {
        // validation for constraint: string
        if (!is_null($params) && !is_string($params)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($params, true), gettype($params)), __LINE__);
        }
        $this->params = $params;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ClientPerfLogDTO
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ClientPerfLogDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ClientPerfLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
