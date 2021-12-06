<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogEntryRequestDTO StructType
 * @subpackage Structs
 */
class LogEntryRequestDTO extends AbstractStructBase
{
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The endTime
     * @var string|null
     */
    protected ?string $endTime = null;
    /**
     * The application
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The severity
     * @var int|null
     */
    protected ?int $severity = null;
    /**
     * Constructor method for LogEntryRequestDTO
     * @uses LogEntryRequestDTO::setStartTime()
     * @uses LogEntryRequestDTO::setEndTime()
     * @uses LogEntryRequestDTO::setApplication()
     * @uses LogEntryRequestDTO::setSeverity()
     * @param string $startTime
     * @param string $endTime
     * @param string $application
     * @param int $severity
     */
    public function __construct(?string $startTime = null, ?string $endTime = null, ?string $application = null, ?int $severity = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setApplication($application)
            ->setSeverity($severity);
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
     * @return \Pggns\MidocoApi\Mis\StructType\LogEntryRequestDTO
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
     * Get endTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \Pggns\MidocoApi\Mis\StructType\LogEntryRequestDTO
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        
        return $this;
    }
    /**
     * Get application value
     * @return string|null
     */
    public function getApplication(): ?string
    {
        return $this->application;
    }
    /**
     * Set application value
     * @param string $application
     * @return \Pggns\MidocoApi\Mis\StructType\LogEntryRequestDTO
     */
    public function setApplication(?string $application = null): self
    {
        // validation for constraint: string
        if (!is_null($application) && !is_string($application)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($application, true), gettype($application)), __LINE__);
        }
        $this->application = $application;
        
        return $this;
    }
    /**
     * Get severity value
     * @return int|null
     */
    public function getSeverity(): ?int
    {
        return $this->severity;
    }
    /**
     * Set severity value
     * @param int $severity
     * @return \Pggns\MidocoApi\Mis\StructType\LogEntryRequestDTO
     */
    public function setSeverity(?int $severity = null): self
    {
        // validation for constraint: int
        if (!is_null($severity) && !(is_int($severity) || ctype_digit($severity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($severity, true), gettype($severity)), __LINE__);
        }
        $this->severity = $severity;
        
        return $this;
    }
}
