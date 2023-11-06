<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SafegatewayTransactionLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SafegatewayTransactionLogDTO extends AbstractStructBase
{
    /**
     * The department
     * @var string|null
     */
    protected ?string $department = null;
    /**
     * The httpStatus
     * @var int|null
     */
    protected ?int $httpStatus = null;
    /**
     * The iframeAccess
     * @var bool|null
     */
    protected ?bool $iframeAccess = null;
    /**
     * The numDecrypted
     * @var int|null
     */
    protected ?int $numDecrypted = null;
    /**
     * The numEncrypted
     * @var int|null
     */
    protected ?int $numEncrypted = null;
    /**
     * The proxyTimestamp
     * @var string|null
     */
    protected ?string $proxyTimestamp = null;
    /**
     * The requestId
     * @var int|null
     */
    protected ?int $requestId = null;
    /**
     * The requestPath
     * @var string|null
     */
    protected ?string $requestPath = null;
    /**
     * The targetId
     * @var string|null
     */
    protected ?string $targetId = null;
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
     * Constructor method for SafegatewayTransactionLogDTO
     * @uses SafegatewayTransactionLogDTO::setDepartment()
     * @uses SafegatewayTransactionLogDTO::setHttpStatus()
     * @uses SafegatewayTransactionLogDTO::setIframeAccess()
     * @uses SafegatewayTransactionLogDTO::setNumDecrypted()
     * @uses SafegatewayTransactionLogDTO::setNumEncrypted()
     * @uses SafegatewayTransactionLogDTO::setProxyTimestamp()
     * @uses SafegatewayTransactionLogDTO::setRequestId()
     * @uses SafegatewayTransactionLogDTO::setRequestPath()
     * @uses SafegatewayTransactionLogDTO::setTargetId()
     * @uses SafegatewayTransactionLogDTO::setUnitName()
     * @uses SafegatewayTransactionLogDTO::setUserId()
     * @param string $department
     * @param int $httpStatus
     * @param bool $iframeAccess
     * @param int $numDecrypted
     * @param int $numEncrypted
     * @param string $proxyTimestamp
     * @param int $requestId
     * @param string $requestPath
     * @param string $targetId
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $department = null, ?int $httpStatus = null, ?bool $iframeAccess = null, ?int $numDecrypted = null, ?int $numEncrypted = null, ?string $proxyTimestamp = null, ?int $requestId = null, ?string $requestPath = null, ?string $targetId = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setDepartment($department)
            ->setHttpStatus($httpStatus)
            ->setIframeAccess($iframeAccess)
            ->setNumDecrypted($numDecrypted)
            ->setNumEncrypted($numEncrypted)
            ->setProxyTimestamp($proxyTimestamp)
            ->setRequestId($requestId)
            ->setRequestPath($requestPath)
            ->setTargetId($targetId)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
        return $this;
    }
    /**
     * Get httpStatus value
     * @return int|null
     */
    public function getHttpStatus(): ?int
    {
        return $this->httpStatus;
    }
    /**
     * Set httpStatus value
     * @param int $httpStatus
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setHttpStatus(?int $httpStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($httpStatus) && !(is_int($httpStatus) || ctype_digit($httpStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($httpStatus, true), gettype($httpStatus)), __LINE__);
        }
        $this->httpStatus = $httpStatus;
        
        return $this;
    }
    /**
     * Get iframeAccess value
     * @return bool|null
     */
    public function getIframeAccess(): ?bool
    {
        return $this->iframeAccess;
    }
    /**
     * Set iframeAccess value
     * @param bool $iframeAccess
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setIframeAccess(?bool $iframeAccess = null): self
    {
        // validation for constraint: boolean
        if (!is_null($iframeAccess) && !is_bool($iframeAccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($iframeAccess, true), gettype($iframeAccess)), __LINE__);
        }
        $this->iframeAccess = $iframeAccess;
        
        return $this;
    }
    /**
     * Get numDecrypted value
     * @return int|null
     */
    public function getNumDecrypted(): ?int
    {
        return $this->numDecrypted;
    }
    /**
     * Set numDecrypted value
     * @param int $numDecrypted
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setNumDecrypted(?int $numDecrypted = null): self
    {
        // validation for constraint: int
        if (!is_null($numDecrypted) && !(is_int($numDecrypted) || ctype_digit($numDecrypted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numDecrypted, true), gettype($numDecrypted)), __LINE__);
        }
        $this->numDecrypted = $numDecrypted;
        
        return $this;
    }
    /**
     * Get numEncrypted value
     * @return int|null
     */
    public function getNumEncrypted(): ?int
    {
        return $this->numEncrypted;
    }
    /**
     * Set numEncrypted value
     * @param int $numEncrypted
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setNumEncrypted(?int $numEncrypted = null): self
    {
        // validation for constraint: int
        if (!is_null($numEncrypted) && !(is_int($numEncrypted) || ctype_digit($numEncrypted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numEncrypted, true), gettype($numEncrypted)), __LINE__);
        }
        $this->numEncrypted = $numEncrypted;
        
        return $this;
    }
    /**
     * Get proxyTimestamp value
     * @return string|null
     */
    public function getProxyTimestamp(): ?string
    {
        return $this->proxyTimestamp;
    }
    /**
     * Set proxyTimestamp value
     * @param string $proxyTimestamp
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setProxyTimestamp(?string $proxyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($proxyTimestamp) && !is_string($proxyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proxyTimestamp, true), gettype($proxyTimestamp)), __LINE__);
        }
        $this->proxyTimestamp = $proxyTimestamp;
        
        return $this;
    }
    /**
     * Get requestId value
     * @return int|null
     */
    public function getRequestId(): ?int
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param int $requestId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setRequestId(?int $requestId = null): self
    {
        // validation for constraint: int
        if (!is_null($requestId) && !(is_int($requestId) || ctype_digit($requestId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        
        return $this;
    }
    /**
     * Get requestPath value
     * @return string|null
     */
    public function getRequestPath(): ?string
    {
        return $this->requestPath;
    }
    /**
     * Set requestPath value
     * @param string $requestPath
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setRequestPath(?string $requestPath = null): self
    {
        // validation for constraint: string
        if (!is_null($requestPath) && !is_string($requestPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestPath, true), gettype($requestPath)), __LINE__);
        }
        $this->requestPath = $requestPath;
        
        return $this;
    }
    /**
     * Get targetId value
     * @return string|null
     */
    public function getTargetId(): ?string
    {
        return $this->targetId;
    }
    /**
     * Set targetId value
     * @param string $targetId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function setTargetId(?string $targetId = null): self
    {
        // validation for constraint: string
        if (!is_null($targetId) && !is_string($targetId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetId, true), gettype($targetId)), __LINE__);
        }
        $this->targetId = $targetId;
        
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
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
