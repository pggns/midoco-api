<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserQueryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserQueryDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The outputFields
     * @var string|null
     */
    protected ?string $outputFields = null;
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UserQueryDTO
     * @uses UserQueryDTO::setCreationDate()
     * @uses UserQueryDTO::setOutputFields()
     * @uses UserQueryDTO::setQueryId()
     * @uses UserQueryDTO::setType()
     * @uses UserQueryDTO::setUserId()
     * @param string $creationDate
     * @param string $outputFields
     * @param int $queryId
     * @param string $type
     * @param int $userId
     */
    public function __construct(?string $creationDate = null, ?string $outputFields = null, ?int $queryId = null, ?string $type = null, ?int $userId = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setOutputFields($outputFields)
            ->setQueryId($queryId)
            ->setType($type)
            ->setUserId($userId);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get outputFields value
     * @return string|null
     */
    public function getOutputFields(): ?string
    {
        return $this->outputFields;
    }
    /**
     * Set outputFields value
     * @param string $outputFields
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryDTO
     */
    public function setOutputFields(?string $outputFields = null): self
    {
        // validation for constraint: string
        if (!is_null($outputFields) && !is_string($outputFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFields, true), gettype($outputFields)), __LINE__);
        }
        $this->outputFields = $outputFields;
        
        return $this;
    }
    /**
     * Get queryId value
     * @return int|null
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param int $queryId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryDTO
     */
    public function setQueryId(?int $queryId = null): self
    {
        // validation for constraint: int
        if (!is_null($queryId) && !(is_int($queryId) || ctype_digit($queryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserQueryDTO
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
