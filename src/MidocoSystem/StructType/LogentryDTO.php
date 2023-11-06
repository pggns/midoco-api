<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogentryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LogentryDTO extends AbstractStructBase
{
    /**
     * The application
     * @var string|null
     */
    protected ?string $application = null;
    /**
     * The entryId
     * @var int|null
     */
    protected ?int $entryId = null;
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The refId
     * @var string|null
     */
    protected ?string $refId = null;
    /**
     * The severity
     * @var int|null
     */
    protected ?int $severity = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * Constructor method for LogentryDTO
     * @uses LogentryDTO::setApplication()
     * @uses LogentryDTO::setEntryId()
     * @uses LogentryDTO::setMessage()
     * @uses LogentryDTO::setRefId()
     * @uses LogentryDTO::setSeverity()
     * @uses LogentryDTO::setTimestamp()
     * @param string $application
     * @param int $entryId
     * @param string $message
     * @param string $refId
     * @param int $severity
     * @param string $timestamp
     */
    public function __construct(?string $application = null, ?int $entryId = null, ?string $message = null, ?string $refId = null, ?int $severity = null, ?string $timestamp = null)
    {
        $this
            ->setApplication($application)
            ->setEntryId($entryId)
            ->setMessage($message)
            ->setRefId($refId)
            ->setSeverity($severity)
            ->setTimestamp($timestamp);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogentryDTO
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
     * Get entryId value
     * @return int|null
     */
    public function getEntryId(): ?int
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param int $entryId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogentryDTO
     */
    public function setEntryId(?int $entryId = null): self
    {
        // validation for constraint: int
        if (!is_null($entryId) && !(is_int($entryId) || ctype_digit($entryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogentryDTO
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get refId value
     * @return string|null
     */
    public function getRefId(): ?string
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param string $refId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogentryDTO
     */
    public function setRefId(?string $refId = null): self
    {
        // validation for constraint: string
        if (!is_null($refId) && !is_string($refId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogentryDTO
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
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogentryDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
}
